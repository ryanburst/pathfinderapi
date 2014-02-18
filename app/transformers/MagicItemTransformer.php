<?php namespace App\Transformer;

use MagicItem;
use League\Fractal\TransformerAbstract;
/**
 * @SWG\Model(id="MagicItem")
 */
class MagicItemTransformer extends TransformerAbstract
{
  /**
   * Turn this item object into a generic array
   *
   * @return array
   */
  public function transform(MagicItem $magic_item)
  {
    return array(
      /**
       * @SWG\Property(
       *   name="id",type="integer",required=true,
       *   description="The magic item identifier."
       * )
       */
      'id'            => (int) $magic_item->id,
      /**
       * @SWG\Property(
       *   name="name",type="string",required=true,
       *   description="The name of the magic item."
       * )
       */
      'name'          => $magic_item->name,
      /**
       * @SWG\Property(
       *   name="description",type="string",required=true,
       *   description="A description of what this magic item is."
       * )
       */
      'description'   => $magic_item->description,
      /**
       * @SWG\Property(
       *   name="source",type="string",required=true,
       *   description="The source material in which this information can be found."
       * )
       */
      'source'        => $magic_item->source
    );
  }
}