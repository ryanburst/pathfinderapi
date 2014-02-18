<?php
use Swagger\Annotations as SWG;
use App\Transformer\SpellTransformer;
// php vendor/zircote/swagger-php/swagger.phar app/ --default-base-path http://pathfinder.rburst.ny.dev.mcdpartners.com/api/v1 -u /api-docs/ -o www/api-docs
/**
 * @SWG\Resource(
 *     apiVersion="0.1",
 *     swaggerVersion="1.2",
 *     resourcePath="/spells",
 *     description="Spells for your magic user. Pick a card..."
 * )
 *
 * @SWG\Model(id="SpellDataWrapper")
 * @SWG\Property(
 *   name="data",type="array",required=true,
 *   description="Array of Spell objects. If only one Spell is requested, this will not be an array and will instead hold a singular Spell object.",
 *   @SWG\Items("Spell")
 * )
 */
class SpellsController extends ApiController {

  /**
   * Display a listing of the resource.
   *
   * @SWG\Api(
   *   path="/spells",
   *   @SWG\Operation(
   *     method="GET",
   *     summary="Get a list of all spells",
   *     notes="Returns a collection of spells",
   *     type="SpellDataWrapper",
   *     nickname="spells"
   *   )
   * )
   *
   * @return Response
   */
  public function index()
  {
    $spells = Spell::take(10)->get();
    return $this->respondWithCollection($spells, new SpellTransformer);
  }

  /**
   * Display the specified resource.
   *
   * @SWG\Api(
   *   path="/spells/{spell_id}",
   *   @SWG\Operation(
   *     method="GET",
   *     summary="Grab a specific spell",
   *     notes="A comma delimited list of ids can also be used",
   *     type="SpellDataWrapper",
   *     nickname="spell",
   *     @SWG\Parameters(
   *       @SWG\Parameter(
   *         name="spell_id",
   *         description="ID of spell that needs to be fetched",
   *         paramType="path",
   *         required=true,
   *         type="integer"
   *       )
   *     ),
   *     @SWG\ResponseMessage(code=404, message="Spell not found. Have you checked your wizard sleeves?")
   *   )
   * )
   *
   * @param  int  $spell_id
   * @return Response
   */
  public function show($spell_id)
  {
    $spell = Spell::find($spell_id);
    if( ! $spell )
    {
      return $this->errorNotFound('Did you just invent a spell? Who do you think you are?');
    }
    return $this->respondWithItem($spell, new SpellTransformer);
  }

}