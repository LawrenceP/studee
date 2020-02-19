<?php

namespace App\Http\Controllers;

use App\Commodity;
use Illuminate\Http\Request;
use App\Http\Requests\CommoditiesControllerStoreRequest;
use App\Http\Resources\CommodityResource;

class CommoditiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Commodity::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CommoditiesControllerStoreRequest  $request
     * @return \Illuminate\Http\Response
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
