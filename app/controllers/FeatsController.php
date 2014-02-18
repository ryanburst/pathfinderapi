<?php
use Swagger\Annotations as SWG;
use App\Transformer\FeatTransformer;
/**
 * @SWG\Resource(
 *   apiVersion="0.1",
 *   swaggerVersion="1.2",
 *   resourcePath="/feats",
 *   description="If you're playing a rogue, you better look at this list early."
 * )
 *
 * @SWG\Model(id="FeatDataWrapper")
 * @SWG\Property(
 *   name="data",type="array",required=true,
 *   description="Array of Feat objects. If only one Feat is requested, this will not be an array and will instead hold a singular Feat object.",
 *   @SWG\Items("Feat")
 * )
 */
class FeatsController extends ApiController {

  /**
   * Display a listing of the resource.
   *
   * @SWG\Api(
   *   path="/feats",
   *   @SWG\Operation(
   *     method="GET",
   *     summary="Get a list of all feats",
   *     notes="Returns a collection of feats",
   *     type="FeatDataWrapper",
   *     nickname="feats"
   *   )
   * )
   *
   * @return Response
   */
  public function index()
  {
    $feats = Feat::take(10)->get();
    return $this->respondWithCollection($feats, new FeatTransformer);
  }

  /**
   * Display the specified resource.
   *
   * @SWG\Api(
   *   path="/feats/{feat_id}",
   *   @SWG\Operation(
   *     method="GET",
   *     summary="Grab a specific feat",
   *     notes="A comma delimited list of ids can also be used",
   *     type="SpellDataWrapper",
   *     nickname="feat",
   *     @SWG\Parameters(
   *       @SWG\Parameter(
   *         name="feat_id",
   *         description="ID of feat that needs to be fetched",
   *         paramType="path",
   *         required=true,
   *         type="integer"
   *       )
   *     ),
   *     @SWG\ResponseMessage(code=404, message="Feat not found")
   *   )
   * )
   *
   * @param  int  $feat_id
   * @return Response
   */
  public function show($feat_id)
  {
    $feat = Feat::find($feat_id);
    if( ! $feat )
    {
      return $this->errorNotFound('Did you just invent a feat? Who do you think you are?');
    }
    return $this->respondWithItem($feat, new FeatTransformer);
  }

}