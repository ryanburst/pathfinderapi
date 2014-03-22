<?php namespace Burst\Validators;

/**
 * Class UserValidator
 * @package Burst\Validators
 */
class UserValidator extends Validator{

	/**
	 * @var array
	 */
	protected static $rules = array(
    'default' => array(
      'email' => 'required|email|unique:users',
      'password' => 'required|alpha_num|min:7|confirmed'
    ),
    'update' => array(
      'email' => 'required|email|unique:users,email,:id',
      'password' => 'alpha_num|min:7|confirmed'
    )
  );

}