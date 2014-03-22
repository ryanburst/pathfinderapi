<?php

/**
 * Class ApiReferer
 */
class ApiReferer extends Eloquent {

	/**
	 * @var string
	 */
	protected $table = 'referers';

	/**
	 * @var array
	 */
	protected $fillable = array('url','user_id');

	/**
	 * @var
	 */
	protected $user;

	/**
	 * @return mixed
	 */
	public function user()
  {
    return $this->belongsTo('User');
  }

}
