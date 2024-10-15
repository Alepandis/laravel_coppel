<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AudienciasController extends Controller
{
    public function index(){
        return view('motor_audiencias');
    }
}
