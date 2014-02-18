<?php
use Swagger\Annotations as SWG;
use App\Transformer\NPCTransformer;

/**
 * @SWG\Resource(
 *     apiVersion="0.1",
 *     swaggerVersion="1.2",
 *     resourcePath="/npcs",
 *     description="Non-Playing Characters (NPCs)"
 * )
 *
 * @SWG\Model(id="NPCDataWrapper")
 * @SWG\Property(
 *   name="data",type="array",required=true,
 *   description="Array of NPC objects. If only one NPC is requested, this will not be an array and will instead hold a singular NPC object.",
 *   @SWG\Items("NPC")
 * )
 */
class NPCsController extends ApiController {

  /**
   * Display a listing of the resource.
   *
   * @SWG\Api(
   *   path="/npcs",
   *   @SWG\Operation(
   *     method="GET",
   *     summary="Get a list of all NPCs",
   *     notes="Returns a collection of NPCs",
   *     type="NPCDataWrapper",
   *     nickname="npcs"
   *   )
   * )
   *
   * @return Response
   */
  public function index()
  {
    $npcs = NPC::take(10)->get();
    return $this->respondWithCollection($npcs, new NPCTransformer);
  }

  /**
   * Display the specified resource.
   *
   * @SWG\Api(
   *   path="/npcs/{npc_id}",
   *   @SWG\Operation(
   *     method="GET",
   *     summary="Grab a specific NPC",
   *     notes="A comma delimited list of ids can also be used",
   *     type="NPCDataWrapper",
   *     nickname="npc",
   *     @SWG\Parameters(
   *       @SWG\Parameter(
   *         name="npc_id",
   *         description="ID of NPC that needs to be fetched",
   *         paramType="path",
   *         required=true,
   *         type="integer"
   *       )
   *     ),
   *     @SWG\ResponseMessage(code=404, message="NPC not found. His stealth bonus must be better than your perception check.")
   *   )
   * )
   *
   * @param  int  $npc_id
   * @return Response
   */
  public function show($npc_id)
  {
    $npc = NPC::find($npc_id);
    if( ! $npc )
    {
      return $this->errorNotFound('Did you just invent a NPC? Who do you think you are?');
    }
    return $this->respondWithItem($npc, new NPCTransformer);
  }

}