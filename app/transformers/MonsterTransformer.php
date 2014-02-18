<?php namespace App\Transformer;

use Monster;
use League\Fractal\TransformerAbstract;
/**
 * @SWG\Model(id="Monster")
 */
class MonsterTransformer extends TransformerAbstract
{
  /**
   * Turn this item object into a generic array
   *
   * @return array
   */
  public function transform(Monster $monster)
  {
    return array(
      /**
       * @SWG\Property(
       *   name="id",type="integer",required=true,
       *   description="The monster identifier."
       * )
       */
      'id'              => (int) $monster->id,
      /**
       * @SWG\Property(
       *   name="name",type="string",required=true,
       *   description="The name of the monster."
       * )
       */
      'name'            => $monster->name,
      /**
       * @SWG\Property(
       *   name="race",type="string",
       *   description="The monster's race."
       * )
       */
      'race'            => $monster->race,
      /**
       * @SWG\Property(
       *   name="class",type="string",
       *   description="The monster's class."
       * )
       */
      'class'           => $monster->class,
      /**
       * @SWG\Property(
       *   name="ability_scores",type="string",required=true,
       *   description="The monster's ability scores."
       * )
       */
      'ability_scores'  => $monster->ability_scores,
      /**
       * @SWG\Property(
       *   name="source",type="string",required=true,
       *   description="The source material in which this information can be found."
       * )
       */
      'source'          => $monster->source
    );
  }
}