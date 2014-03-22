<?php namespace Burst\Validators;

use Validator as V;

/**
 * Class Validator
 * @package Burst\Validators
 */
abstract class Validator {

	/**
	 * @var
	 */
	protected $v;

	/**
   * Checks to see if a given rule set and data are valid
   *
	 * @param $field_set
	 * @param array $attributes
	 * @param null $translations
	 * @return bool
	 */
	public function isValid( $field_set, array $attributes = null, $translations = null )
  {
    if( is_array($field_set) )
    {
      $translations = $attributes;
      $attributes = $field_set;
      $field_set = 'default';
    }

    $rules = $this->translateRules(static::$rules[$field_set],$translations);

    $this->v = V::make($attributes,$rules);

    if( $this->v->fails() )
    {
      return false;
    }

    return true;
  }

	/**
	 * @return mixed
	 */
	public function getErrors()
  {
    return $this->v->messages();
  }

	/**
	 * @return mixed
	 */
	public function getMessageBag()
  {
    return $this->v->getMessageBag();
  }

	/**
	 * @param $rules
	 * @param array $translations
	 * @return mixed
	 */
	protected function translateRules($rules, $translations = array() )
  {
    if( empty($translations) )
      return $rules;

    foreach( $rules as $field => $field_rules )
    {
      $rules[$field] = $this->translate($field_rules,$translations);
    }
    return $rules;
  }

	/**
	 * @param $rule
	 * @param array $translations
	 * @return mixed
	 */
	protected function translate( $rule, $translations )
  {
    foreach( $translations as $translate_key => $translate_message )
    {
      $rule = str_replace($translate_key,$translate_message,$rule);
    }
    return $rule;
  }

}