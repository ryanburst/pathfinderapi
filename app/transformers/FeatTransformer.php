<?php namespace App\Transformer;

use Feat;
use League\Fractal\TransformerAbstract;
/**
 * @SWG\Model(id="Feat")
 */
class FeatTransformer extends TransformerAbstract
{
  /**
   * Turn this item object into a generic array
   *
   * @return array
   */
  public function transform(Feat $feat)
  {
    return array(
      /**
       * @SWG\Property(
       *   name="id",type="integer",required=true,
       *   description="The feat identifier."
       * )
       */
      'id'            => (int) $feat->id,
      /**
       * @SWG\Property(
       *   name="name",type="string",required=true,
       *   description="The name of the feat."
       * )
       */
      'name'          => $feat->name,
      /**
       * @SWG\Property(
       *   name="description",type="string",required=true,
       *   description="A description of what this feat is."
       * )
       */
      'description'   => $feat->description,
      /**
       * @SWG\Property(
       *   name="benefit",type="string",required=true,
       *   description="The benefit gained by learning this feat."
       * )
       */
      'benefit'       => $feat->benefit,
      /**
       * @SWG\Property(
       *   name="normal",type="string",required=true,
       *   description="What would normally occur if your character does not have this feat."
       * )
       */
      'normal'        => $feat->normal,
      /**
       * @SWG\Property(
       *   name="special",type="string",required=true,
       *   description="Any additional or special information regarding this feat."
       * )
       */
      'special'       => $feat->special,
      /**
       * @SWG\Property(
       *   name="source",type="string",required=true,
       *   description="The source material in which this information can be found."
       * )
       */
      'source'                => $spell->source
    );
  }
}