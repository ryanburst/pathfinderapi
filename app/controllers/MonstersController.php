<?php
use Swagger\Annotations as SWG;
use App\Transformer\MonsterTransformer;

/**
 * @SWG\Resource(
 *     apiVersion="0.1",
 *     swaggerVersion="1.2",
 *     resourcePath="/monsters",
 *     description="Monsters. Or Bestiary if you want to get literary."
 * )
 *
 * @SWG\Model(id="MonsterDataWrapper")
 * @SWG\Property(
 *   name="data",type="array",required=true,
 *   description="Array of Monster objects. If only one Monster is requested, this will not be an array and will instead hold a singular Monster object.",
 *   @SWG\Items("Monster")
 * )
 */
class MonstersController extends ApiController {

  /**
   * Display a listing of the resource.
   *
   * @SWG\Api(
   *   path="/monsters",
   *   @SWG\Operation(
   *     method="GET",
   *     summary="Get a list of all monsters",
   *     notes="Returns a collection of monsters",
   *     type="MonsterDataWrapper",
   *     nickname="monsters"
   *   )
   * )
   *
   * @return Response
   */
  public function index()
  {
    $monsters = Monster::take(10)->get();
    return $this->respondWithCollection($monsters, new MonsterTransformer);
  }

  /**
   * Display the specified resource.
   *
   * @SWG\Api(
   *   path="/monsters/{monster_id}",
   *   @SWG\Operation(
   *     method="GET",
   *     summary="Grab a specific monster",
   *     notes="A comma delimited list of ids can also be used",
   *     type="MonsterDataWrapper",
   *     nickname="monster",
   *     @SWG\Parameters(
   *       @SWG\Parameter(
   *         name="monster_id",
   *         description="ID of monster that needs to be fetched",
   *         paramType="path",
   *         required=true,
   *         type="integer"
   *       )
   *     ),
   *     @SWG\ResponseMessage(code=404, message="Monster not found")
   *   )
   * )
   *
   * @param  int  $monster_id
   * @return Response
   */
  public function show($monster_id)
  {
    $monster = Monster::find($monster_id);
    if( ! $monster )
    {
      return $this->errorNotFound('Did you just invent a monster? Who do you think you are?');
    }
    return $this->respondWithItem($monster, new MonsterTransformer);
  }

}