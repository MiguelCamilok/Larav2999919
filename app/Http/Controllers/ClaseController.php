<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClaseController extends Controller
{
    public function saludo(){
        return view('saludo');
    }

}
