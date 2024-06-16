<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\EpresasDeEnvioYRetiro;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/sucursal/{id}', function ($id) {
   $data = EpresasDeEnvioYRetiro::find($id);
   return response()->json($data->retiro);
})->name('sucursal');