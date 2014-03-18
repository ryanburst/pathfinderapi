<?php

class SessionsController extends BaseController {

  /**
   * Show the form for creating a new resource.
   *
   * @return View
   */
  public function create()
  {
    if( Auth::check() ) return Redirect::route('account');
    return View::make('sessions.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    if( Auth::check() ) return Redirect::route('sessions.account');
    if( Auth::attempt(Input::only('email','password')) )
    {
      return Redirect::route('account');
    }
    return Redirect::back()->withInput()->with('flash_message','Invalid email/password combination.');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show()
  {
    return View::make('sessions.show')->with('user',Auth::user());
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy()
  {
    Auth::logout();

    return Redirect::home();
  }

}