<?php

use Illuminate\Support\Facades\Route;

Route::prefix("api")->middleware("api")->get("destinations", [ App\Http\Controllers\DestinationController::class, "get_all_destination" ]);
Route::prefix("api")
    ->middleware("api")
    ->get("hotels", [App\Http\Controllers\HotelController::class, "special_offer_hotels"]);
