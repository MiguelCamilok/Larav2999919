<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreasController extends Controller
{
    public function area_triangulo($base, $altura){
        $area = ($base * $altura)/2;
        return $area;
    }

    public function area_circulo($radio){
        $area = M_PI * Pow($radio, 2);
        return $area;
    }
    public function cuadratica($a, $b, $c) {
        $areapositiva = (-$b + sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);
        $areanegativa = (-$b - sqrt(pow($b, 2) - (4 * $a * $c))) / (2 * $a);
        return "AreaPositiva: $areapositiva, AreaNegativa: $areanegativa";
    }
    
}
