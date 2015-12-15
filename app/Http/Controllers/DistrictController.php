<?php

namespace API\Http\Controllers;

use Illuminate\Http\Request;

use API\Http\Requests;
use API\Http\Controllers\Controller;

class DistrictController extends Controller
{
    public function index()
    {
        $regions = \API\District::all();
        return response()->json($regions);
    }

    public function store(Request $request)
    {
        $district = new \API\District;
        $name = $request->input('name');
        $region_id = $request->input('region_id');
        $district->name = $name;
        $district->region_id = $region_id;
        $district->save();

    }
//
    public function show($id)
    {
        $district = \API\District::find($id);
        return response()->json($district);
    }
//
//    public function update(Request $request, $id)
//    {
//        $region = \API\Region::find($id);
//        $name = $request->input('name');
//        $region->name = $name;
//        $region->save();
//        return response()->json($region);
//    }
//
//    public function destroy($id)
//    {
//        $region = \API\Region::find($id);
//        $region->delete();
//        return response(200);
//    }
}
