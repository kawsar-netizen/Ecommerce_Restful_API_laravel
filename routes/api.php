<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/products','App\Http\Controllers\ProductController');

Route::group(['prefix'=>'products'],function(){
    Route::apiResource('/{products}/reviews','App\Http\Controllers\ReviewController');
});

