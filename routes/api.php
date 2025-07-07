<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/test', function(Request $request){
    return response()->json([
        'id' => "4",
        "name" => "Apple iPhone 11, 64GB",
        "data" => [
            "price" => 389.99,
            "color" => "Purple"
        ]
    ]);
});

