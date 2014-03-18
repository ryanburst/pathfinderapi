<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {
	protected $fillable = array('email','password');

  protected $hidden = array('password','private_key');

	public static $rules = array(
    'email' => 'required|email|unique:users',
    'password' => 'required|alpha_num|min:7|confirmed'
  );

  public $errors;

  /**
   * Get the unique identifier for the user.
   *
   * @return mixed
   */
  public function getAuthIdentifier()
  {
    return $this->getKey();
  }

  /**
   * Get the password for the user.
   *
   * @return string
   */
  public function getAuthPassword()
  {
    return $this->password;
  }

  /**
   * Get the e-mail address where password reminders are sent.
   *
   * @return string
   */
  public function getReminderEmail()
  {
    return $this->email;
  }

  /**
   * Returns the user's private key
   * @access public
   * @return string
   */
  public function getPrivateKey()
  {
    return $this->private_key;
  }

  /**
   * Hashes the password before setting it.
   * @access public
   * @param  string $value Plain text password to be hashed
   */
  public function setPasswordAttribute($value)
  {
    $this->attributes['password'] = Hash::make($value);
  }

  /**
   * Whenever the email is set, set the username to the same
   * thing. The database has two columns for this, but for account
   * purposes they will be one and the same.
   * @access public
   * @param  string $value Email string being set
   */
  public function setEmailAttribute($value)
  {
    $this->attributes['email'] = $value;
    $this->attributes['username'] = $value;
  }

  /**
   * Generates a unique ID for the public and private user keys
   * @access public
   * @return void
   */
  public function generateKeys()
  {
    $public_key = str_random(32);
    while( ! is_null(DB::table('users')->where('public_key',$public_key)->first()) )
    {
      $public_key = str_random(32);
    }
    $this->attributes['public_key'] = $public_key;
    $this->attributes['private_key'] = str_random(48);
  }

  /**
   * Check if the current user object is valid using our static rule set
   * @access public
   * @return boolean
   */
  public function validateForNewUser( $data = array() )
  {
    $validation = Validator::make($data,static::$rules);

    if( $validation->passes() )
      return true;

    $this->errors = $validation->messages();

    return false;
  }
}
