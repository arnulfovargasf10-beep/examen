<?php

use App\Http\Controllers\VehiculosController;
use App\Models\vehiculos;
use Illuminate\Support\Facades\Route;

Route::get ('/', function () {
    return view('welcome');
});

route::resource('/vehiculosController');  
