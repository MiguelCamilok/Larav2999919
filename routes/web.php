<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\ClaseController;

Route::get ('/areatriangulo/{base}/{altura}', [AreasController::class, 'area_triangulo']);
Route::get ('/areacirculo/{radio}', [AreasController::class, 'area_circulo']);
Route::get ('/cuadratica/{a}/{b}/{c}', [AreasController::class, 'cuadratica']);
Route::get ('/saludo', [ClaseController::class, 'saludo']);

