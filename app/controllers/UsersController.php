<?php

class UsersController extends BaseController {

  protected $user;

  public function __construct(User $user)
  {
    $this->user = $user;
  }

  /**
   * Shows the registration form
   *
   * @access public
   * @return View
   */
  public function create()
  {
    if( Auth::check() ) return Redirect::route('sessions.account');
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
    if( ! $this->user->validateForNewUser(Input::all()) )
    {
      return Redirect::back()->withInput()->withErrors($this->user->errors);
    }

    $this->user->fill(Input::all());
    $this->user->save();

    //Log them in
    //This should be handled by a SessionsController which has it's own create/store/destroy
    //for sessions...so do we redirect there? Or force a login here? Or redirect them to login
    //page with a flash message telling them their account was created, now login?
    Auth::login($this->user);

    //Redirect to account page
    return Redirect::route('account');
  }

}
