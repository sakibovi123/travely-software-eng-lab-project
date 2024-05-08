<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get("destinations", [ App\Http\Controllers\DestinationController::class, "get_all_destination" ]);
Route::get("hotels", [App\Http\Controllers\HotelController::class, "special_offer_hotels"]);

Route::post("filter", [App\Http\Controllers\HotelController::class, "search_by_destination_or_date"]);

