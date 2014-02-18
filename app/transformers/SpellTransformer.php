<?php namespace App\Transformer;

use Spell;
use League\Fractal\TransformerAbstract;
/**
 * @SWG\Model(id="Spell")
 */
class SpellTransformer extends TransformerAbstract
{
  /**
   * Turn this item object into a generic array
   *
   * @return array
   */
  public function transform(Spell $spell)
  {
    return array(
      /**
       * @SWG\Property(
       *   name="id",type="integer",required=true,
       *   description="The spell identifier."
       * )
       */
      'id'           => (int) $spell->id,
      /**
       * @SWG\Property(
       *   name="name",type="string",required=true,
       *   description="The name of the spell."
       * )
       */
      'name'         => $spell->name,
      /**
       * @SWG\Property(
       *   name="school",type="string",required=true,
       *   description="The school of magic this spell belongs to."
       * )
       */
      'school'       => $spell->school,
      /**
       * @SWG\Property(
       *   name="short_description",type="string",required=true,
       *   description="A brief description of what this spell does."
       * )
       */
      'short_description'     => $spell->short_description,
      /**
       * @SWG\Property(
       *   name="description",type="string",required=true,
       *   description="A full description of this spell."
       * )
       */
      'description'           => $spell->description,
      /**
       * @SWG\Property(
       *   name="description_formatted",type="string",required=true,
       *   description="A full description of this spell, complete with HTML tags."
       * )
       */
      'description_formatted' => $spell->description_formated,
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