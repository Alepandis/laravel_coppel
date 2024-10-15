<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampanasController extends Controller
{
    public function generarJson(Request $request){
        //dd($request);
        $data = $request->all();

        return response()->json($data);
    }
}
