<?php

namespace API\Http\Controllers;

use Illuminate\Http\Request;
use API\Http\Requests;
use API\Http\Middleware\Headers;
use API\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;


class RegionsController extends Controller
{
    public function index()
    {
        $regions = \API\Region::all();
        return response()->json($regions);
    }

    public function store(Request $request)
    {
        $region = new \API\Region;
        $region->name = $request->input('name');
        $region->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $region = \API\Region::find($id);
        return response()->json($region->districts);
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
        $region = \API\Region::find($id);
        $name = $request->input('name');
        $region->name = $name;
        $region->save();
        return response()->json($region);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region = \API\Region::find($id);
        $region->delete();
        return response(200)->sendHeaders("Access-Control-Allow-Origin: *");
    }
}