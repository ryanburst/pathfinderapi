<?php namespace App\Transformer;

use NPC;
use League\Fractal\TransformerAbstract;
/**
 * @SWG\Model(id="NPC")
 */
class NPCTransformer extends TransformerAbstract
{
  /**
   * Turn this item object into a generic array
   *
   * @return array
   */
  public function transform(NPC $npc)
  {
    return array(
      /**
       * @SWG\Property(
       *   name="id",type="integer",required=true,
       *   description="The NPC identifier."
       * )
       */
      'id'                  => (int) $npc->id,
      /**
       * @SWG\Property(
       *   name="name",type="string",required=true,
       *   description="The name of the NPC."
       * )
       */
      'name'                => $npc->name,
      /**
       * @SWG\Property(
       *   name="race",type="string",
       *   description="The NPC's race - which apparently can be blank, don't look at me."
       * )
       */
      'race'                => $npc->race,
      /**
       * @SWG\Property(
       *   name="class",type="string",required=true,
       *   description="The NPC's class. Pretty straight forward. Except when this field is blank. I do not know why."
       * )
       */
      'class'               => $npc->class,
      /**
       * @SWG\Property(
       *   name="ability_scores",type="string",
       *   description="This NPC's ability scores or 'holy crap, these random numbers are better than all the players.'"
       * )
       */
      'ability_scores'      => $npc->ability_scores,
      /**
       * @SWG\Property(
       *   name="special_abilities",type="string",required=true,
       *   description="Any special abilities this NPC has. Feel free to make up your own when your PCs are getting to big for their armor."
       * )
       */
      'special_abilities'   => $npc->description_visual,
      /**
       * @SWG\Property(
       *   name="before_combat",type="string",required=true,
       *   description="A description of any special actions to be taken before this NPC lays down the hammer. Not a real one, cuz this could be a sorcerer or something."
       * )
       */
      'before_combat'       => ! empty($npc->before_combat) ? $npc->before_combat : null,
      /**
       * @SWG\Property(
       *   name="after_combat",type="string",required=true,
       *   description="A description of any special actions to be taken when the dust settles."
       * )
       */
      'after_combat'        => ! empty($npc->after_combat) ? $npc->after_combat: null,
      /**
       * @SWG\Property(
       *   name="source",type="string",required=true,
       *   description="The source material in which this information can be found."
       * )
       */
      'source'              => $npc->source
    );
  }
}