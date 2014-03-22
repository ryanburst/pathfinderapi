<?php

use Burst\Services\UserCreatorService;
use Burst\Services\UserUpdateService;
use Burst\Validators\ValidationException;

/**
 * Class UsersController
 */
class UsersController extends BaseController {

	/**
	 * @var User
	 */
	protected $user;

	/**
	 * @var Burst\Services\UserCreatorService
	 */
	protected $userCreator;

	/**
	 * @var Burst\Services\UserUpdateService
	 */
	protected $userUpdater;

	/**
	 * @param User $user
	 * @param UserCreatorService $userCreator
	 * @param UserUpdateService $userUpdater
	 */
	public function __construct(User $user, UserCreatorService $userCreator, UserUpdateService $userUpdater)
  {
    $this->user = $user;
    $this->userCreator = $userCreator;
    $this->userUpdater = $userUpdater;
  }

  /**
   * Shows the registration form
   *
   * @access public
   * @return View
   */
  public function create()
  {
    if( Auth::check() ) return Redirect::route('sessions.show');
    return View::make('users.create');
  }

  /**
   * Creates a user resource. They should be submitting from
   * the registration form to get here. If they are unsuccessful
   * we will route them back to the registration form. If they
   * are successful we will store the resource in the database,
   * log them in, and redirect them to their account page.
   *
   * @access public
   * @return Redirect
   */
  public function store()
  {
    try
    {
      $this->user = $this->userCreator->make(Input::all());
    }
    catch(ValidationException $e)
    {
      return Redirect::back()->withInput()->withErrors($e->getErrors());
    }


    Auth::login($this->user);

    //Redirect to account page
    return Redirect::route('sessions.show');
  }

	/**
	 * @return mixed
	 */
	public function update()
  {
    try
    {
      $this->userUpdater->update(Auth::user()->id,Input::all());
    }
    catch(ValidationException $e)
    {
      return Redirect::back()->withInput()->withErrors($e->getErrors());
    }

    return Redirect::route('sessions.show')->with('flash_message_success','Account updated!');
  }

}
