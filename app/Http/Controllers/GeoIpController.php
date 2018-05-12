<?php

namespace App\Http\Controllers;

use App\GeoIp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class GeoIpController extends Controller
{
    public function index(Request $request){

        $coordinates =  Cache::get($request->get('ip'));

        if(!$coordinates){

            $coordinates = GeoIp::findOrFail($request->get('ip'));

            Cache::put($request->get('ip'), $coordinates, GeoIp::CACHE_LIFETIME);

        }


        return $coordinates->toJson();
    }
}
