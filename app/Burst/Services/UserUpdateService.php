<?php namespace Burst\Services;

use Burst\Validators\UserValidator;
use Burst\Validators\ValidationException;
use Config;
use User;
use ApiReferer;

/**
 * Class UserUpdateService
 * @package Burst\Services
 */
class UserUpdateService {

  /**
   * @var \Burst\Validators\UserValidator
   */
  protected $validator;

  /**
   * @param UserValidator $validator
   */
  public function __construct(UserValidator $validator)
  {
    $this->validator = $validator;
  }

  /**
   * @param $id
   * @param array $attributes
   * @return mixed
   * @throws \Burst\Validators\ValidationException
   */
  public function update($id, array $attributes)
  {
    $user = User::findOrFail($id);

    if( $this->validator->isValid('update',$attributes,array(':id'=>$user->id)) )
    {
      // Removes all the user's referrers and then adds in new ones. Seems like the easiest
      // way to manage deletions, updates, and additions all in the same go
      ApiReferer::where('user_id',$user->id)->delete();
      foreach( $attributes['referer'] as $referer )
      {
        ApiReferer::create(array(
          'url' => $referer,
          'user_id' => $user->id
        ));
      }

      $user->fill($attributes);
      $user->save();

      return $user;
    }

    throw new ValidationException('User update validation failed',$this->validator->getErrors());
  }
}