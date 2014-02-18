<?php
use Swagger\Annotations as SWG;
use App\Transformer\MagicItemTransformer;

/**
 * @SWG\Resource(
 *   apiVersion="0.1",
 *   swaggerVersion="1.2",
 *   resourcePath="/magicitems",
 *   description="Magic Items and/or things you can't afford."
 * )
 *
 * @SWG\Model(id="MagicItemDataWrapper")
 * @SWG\Property(
 *   name="data",type="array",required=true,
 *   description="Array of MagicItem objects. If only one MagicItem is requested, this will not be an array and will instead hold a singular MagicItem object.",
 *   @SWG\Items("MagicItem")
 * )
 */
class MagicItemsController extends ApiController {

  /**
   * Display a listing of the resource.
   *
   * @SWG\Api(
   *   path="/magicitems",
   *   @SWG\Operation(
   *     method="GET",
   *     summary="Get a list of all magic items",
   *     notes="Returns a collection of magic items",
   *     type="MagicItemDataWrapper",
   *     nickname="magicitems"
   *   )
   * )
   *
   * @return Response
   */
  public function index()
  {
    $magic_items = MagicItem::take(10)->get();
    return $this->respondWithCollection($magic_items, new MagicItemTransformer);
  }

  /**
   * Display the specified resource.
   *
   * @SWG\Api(
   *   path="/magicitems/{magic_item_id}",
   *   @SWG\Operation(
   *     method="GET",
   *     summary="Grab a specific magic item",
   *     notes="A comma delimited list of ids can also be used",
   *     type="SpellDataWrapper",
   *     nickname="magicitem",
   *     @SWG\Parameters(
   *       @SWG\Parameter(
   *         name="magic_item_id",
   *         description="ID of magic item that needs to be fetched",
   *         paramType="path",
   *         required=true,
   *         type="integer"
   *       )
   *     ),
   *     @SWG\ResponseMessage(code=404, message="Magic Item not found")
   *   )
   * )
   *
   * @param  int  $magic_item_id
   * @return Response
   */
  public function show($magic_item_id)
  {
    $magic_item = MagicItem::find($magic_item_id);
    if( ! $magic_item )
    {
      return $this->errorNotFound('Did you just invent a magic item? Who do you think you are?');
    }
    return $this->respondWithItem($magic_item, new MagicItemTransformer);
  }

}