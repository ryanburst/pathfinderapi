<?php namespace Burst\Services;

use Burst\Validators\UserValidator;
use Burst\Validators\ValidationException;
use Config;
use User;
use ApiReferer;

/**
 * Class UserCreatorService
 * @package Burst\Services
 */
class UserCreatorService {

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
	 * @param array $attributes
	 * @return mixed
	 * @throws \Burst\Validators\ValidationException
	 */
	public function make(array $attributes)
  {
    // Determine whether data is valid
    if( $this->validator->isValid($attributes) )
    {
      $user = User::create($attributes);
      ApiReferer::create(array(
        'url' => Config::get('app.default_api_referer'),
        'user_id' => $user->id
      ));

      return $user;

    }

    throw new ValidationException('User creation validation failed',$this->validator->getErrors());
  }
}