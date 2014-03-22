<?php

class SessionsController extends BaseController {

  /**
   * Show the form for creating a new resource.
   *
   * @return View
   */
  public function create()
  {
    if( Auth::check() ) return Redirect::route('sessions.show');

    return View::make('sessions.create');
  }

  /**
   * Attempts to log someone in with given credentials and
   * redirects them to their account page
   *
   * @return Redirect
   */
  public function store()
  {
    if( Auth::check() ) return Redirect::route('sessions.show');

    if( Auth::attempt(Input::only('email','password'),Input::get('remember')) )
    {
      return Redirect::route('sessions.show');
    }

    return Redirect::back()->withInput()->with('flash_message','Invalid email/password combination.');
  }

  /**
   * Shows information on the current logged in user
   *
   * @return View
   */
  public function show()
  {
    return View::make('sessions.show')->with('user',Auth::user());
  }

  /**
   * Destroys the current session
   *
   * @return Redirect
   */
  public function destroy()
  {
    Auth::logout();

    return Redirect::home();
  }

}