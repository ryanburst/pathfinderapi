<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
 * Site Routes (www)
 */
Route::get('/', array('as'=>'home',function()
{
  return View::make('home');
}));
Route::get('/get-started', function()
{
  return View::make('get-started');
});
Route::get('/community-use', function()
{
  return View::make('community-use');
});
Route::get('/endpoints', function()
{
  return View::make('api-docs');
});
Route::get('/authorization', function()
{
  return View::make('authorization');
});
Route::get('/rate-limits', function()
{
  return View::make('rate-limits');
});
Route::get('/help', function()
{
  return View::make('help');
});
Route::get('/login', array('as'=>'login','uses'=>'SessionsController@create'));
Route::get('/logout', array('as'=>'logout','uses'=>'SessionsController@destroy'));
Route::get('/account', array('before'=>'auth','as'=>'account','uses'=>'SessionsController@show'));
Route::resource('sessions', 'SessionsController',array('only'=>array('create','store','show','destroy')));
Route::get('/register', array('as'=>'users.register','uses'=>'UsersController@create'));
Route::resource('users', 'UsersController',array('only'=>array('create','store')));

/**
 * Model Events
 */
User::creating(function($model)
{
  $model->generateKeys();
  return true;
});

/**
 * Error Routes
 */
App::missing(function($exception)
{
  if (Request::is('api/*'))
  {
    return 'API 404';
  }
});

/**
 * API Routes
 */
Route::group(array('prefix' => 'api/v1'), function()
{
  Route::resource('spells','SpellsController',array('only' => array('index', 'show')));
  Route::resource('feats','FeatsController',array('only' => array('index', 'show')));
  Route::resource('magicitems','MagicItemsController',array('only' => array('index', 'show')));
  Route::resource('monsters','MonstersController',array('only' => array('index', 'show')));
  Route::resource('npcs','NPCsController',array('only' => array('index', 'show')));
  Route::resource('traits','TraitsController',array('only' => array('index', 'show')));
});