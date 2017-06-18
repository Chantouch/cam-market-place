<?php

namespace App\Http\Controllers\REST;

use App\Model\City;
use App\Model\Commune;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class APIController extends Controller
{
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function get_city($id)
    {
        $cities = City::with('commune')->where('country_id', $id)
            ->whereNull('city_id')
            ->where('status', 1)
            ->pluck('name', 'id');
        return response()->json($cities);
    }
    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function get_commune($id)
    {
        $cities = Commune::with('city')->where('city_id', $id)
            ->whereNotNull('city_id')
            ->whereNotNull('country_id')
            ->where('status', 1)
            ->pluck('name', 'id');
        return response()->json($cities);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function set_default(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(['data' => 'Yes it work']);
        }
        //return;
    }
}
