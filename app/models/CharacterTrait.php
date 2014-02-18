<?php
/**
 * Not just "Trait" because that is a PHP thing. No conflicts here.
 */
class CharacterTrait extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'traits';
}