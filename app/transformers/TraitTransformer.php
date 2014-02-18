<?php namespace App\Transformer;

use CharacterTrait;
use League\Fractal\TransformerAbstract;
/**
 * @SWG\Model(id="CharacterTrait")
 */
class CharacterTraitTransformer extends TransformerAbstract
{
  /**
   * Turn this item object into a generic array
   *
   * @return array
   */
  public function transform(CharacterTrait $trait)
  {
    return array(
      /**
       * @SWG\Property(
       *   name="id",type="integer",required=true,
       *   description="The trait identifier."
       * )
       */
      'id'            => (int) $trait->id,
      /**
       * @SWG\Property(
       *   name="name",type="string",required=true,
       *   description="The name of the trait."
       * )
       */
      'name'          => $trait->name,
      /**
       * @SWG\Property(
       *   name="type",type="string",
       *   description="The type of trait this...trait...is."
       * )
       */
      'type'          => $trait->type,
      /**
       * @SWG\Property(
       *   name="category",type="string",
       *   description="The category this trait belongs in."
       * )
       */
      'category'      => $trait->category,
      /**
       * @SWG\Property(
       *   name="description",type="string",required=true,
       *   description="A full description of this trait."
       * )
       */
      'description'   => $trait->description,
      /**
       * @SWG\Property(
       *   name="source",type="string",required=true,
       *   description="The source material in which this information can be found."
       * )
       */
      'source'        => $trait->source
    );
  }
}