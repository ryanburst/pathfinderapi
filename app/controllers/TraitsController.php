<?php
use Swagger\Annotations as SWG;
use App\Transformer\CharacterTraitTransformer;
/**
 * @SWG\Resource(
 *     apiVersion="0.1",
 *     swaggerVersion="1.2",
 *     resourcePath="/traits",
 *     description="Traits. Because your character needs more bonuses."
 * )
 *
 * @SWG\Model(id="CharacterTraitDataWrapper")
 * @SWG\Property(
 *   name="data",type="array",required=true,
 *   description="Array of CharacterTrait objects. If only one CharacterTrait is requested, this will not be an array and will instead hold a singular CharacterTrait object.",
 *   @SWG\Items("CharacterTrait")
 * )
 */
class TraitsController extends ApiController {

  /**
   * Display a listing of the resource.
   *
   * @SWG\Api(
   *   path="/traits",
   *   @SWG\Operation(
   *     method="GET",
   *     summary="Get a list of all traits",
   *     notes="Returns a collection of traits",
   *     type="CharacterTraitDataWrapper",
   *     nickname="traits"
   *   )
   * )
   *
   * @return Response
   */
  public function index()
  {
    $traits = CharacterTrait::take(10)->get();
    return $this->respondWithCollection($traits, new CharacterTraitTransformer);
  }

  /**
   * Display the specified resource.
   *
   * @SWG\Api(
   *   path="/traits/{trait_id}",
   *   @SWG\Operation(
   *     method="GET",
   *     summary="Grab a specific trait",
   *     notes="A comma delimited list of ids can also be used",
   *     type="CharacterTraitDataWrapper",
   *     nickname="trait",
   *     @SWG\Parameters(
   *       @SWG\Parameter(
   *         name="trait_id",
   *         description="ID of trait that needs to be fetched",
   *         paramType="path",
   *         required=true,
   *         type="integer"
   *       )
   *     ),
   *     @SWG\ResponseMessage(code=404, message="Trait not found.")
   *   )
   * )
   *
   * @param  int  $trait_id
   * @return Response
   */
  public function show($trait_id)
  {
    $trait = CharacterTrait::find($trait_id);
    if( ! $trait )
    {
      return $this->errorNotFound('Did you just invent a trait? Who do you think you are?');
    }
    return $this->respondWithItem($trait, new CharacterTraitTransformer);
  }

}