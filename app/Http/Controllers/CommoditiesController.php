<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\Http\Requests\CommoditiesControllerEditRequest;
use App\Http\Requests\CommoditiesControllerStoreRequest;
use App\Http\Resources\CommodityResource;

class CommoditiesController extends Controller
{
    /**
     * Display a listing of commodities.
     *
     * @return object
     */
    public function index()
    {
        return CommodityResource::collection(Commodity::all());
    }

    /**
     * Store a newly created commodity.
     *
     * @param  CommoditiesControllerStoreRequest  $request
     * @return CommodityResource
     */
    public function store(CommoditiesControllerStoreRequest $request)
    {
        $commodity = new Commodity();
        $commodity->segment = $request->segment;
        $commodity->segment_name = $request->segment_name;
        $commodity->family = $request->family;
        $commodity->family_name = $request->family_name;
        $commodity->class = $request->class;
        $commodity->class_name = $request->class_name;
        $commodity->commodity = $request->commodity;
        $commodity->commodity_name = $request->commodity_name;
        $commodity->save();

        return new CommodityResource($commodity);
    }

    /**
     * Display the specified commodity.
     *
     * @param  int  $id
     * @return CommodityResource
     */
    public function show($id)
    {
        return new CommodityResource(Commodity::find($id));
    }

    /**
     * Update the specified commodity.
     *
     * @param  CommoditiesControllerEditRequest  $request
     * @param  int  $id
     * @return CommodityResource
     */
    public function update(CommoditiesControllerEditRequest $request, $id)
    {
        $commodity = Commodity::findOrFail($id);

        if ($request->has('segment')) {
            $commodity->segment = $request->segment;
        }

        if ($request->has('segment_name')) {
            $commodity->segment_name = $request->segment_name;
        }

        if ($request->has('family')) {
            $commodity->family = $request->family;
        }

        if ($request->has('family_name')) {
            $commodity->family_name = $request->family_name;
        }

        if ($request->has('class')) {
            $commodity->class = $request->class;
        }

        if ($request->has('class_name')) {
            $commodity->class_name = $request->class_name;
        }

        if ($request->has('commodity')) {
            $commodity->commodity = $request->commodity;
        }

        if ($request->has('commodity_name')) {
            $commodity->commodity_name = $request->commodity_name;
        }

        $commodity->save();

        return new CommodityResource($commodity);
    }

    /**
     * Remove the specified commodity.
     *
     * @param  int  $id
     * @return object
     */
    public function destroy($id)
    {
        $commodity = Commodity::findOrFail($id);
        $commodity->delete();

        return response()->json([
            "message" => "Commodity with id ($id) has been successfully deleted"
        ]);
    }
}
