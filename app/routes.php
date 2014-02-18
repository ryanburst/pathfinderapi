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
Route::get('/', function()
{
  return View::make('layouts.master');
});

Route::get('/docs', function()
{
  return View::make('layouts.master')->nest('content','api-docs');
});

//404 routing for the API
App::missing(function($exception)
{
  if (Request::is('api/*'))
  {
    return 'API 404';
  }
});

//Group all of our API calls with a prefix of api/v1
Route::group(array('prefix' => 'api/v1'), function()
{
  Route::resource('spells','SpellsController',array('only' => array('index', 'show')));
  Route::resource('feats','FeatsController',array('only' => array('index', 'show')));
  Route::resource('magicitems','MagicItemsController',array('only' => array('index', 'show')));
  Route::resource('monsters','MonstersController',array('only' => array('index', 'show')));
  Route::resource('npcs','NPCsController',array('only' => array('index', 'show')));
  Route::resource('traits','TraitsController',array('only' => array('index', 'show')));
});
