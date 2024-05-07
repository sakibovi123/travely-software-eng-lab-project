<?php

use Illuminate\Support\Facades\Route;


Route::prefix("api")
    ->controller(App\Http\Controllers\DestinationController::class)
    ->middleware("api")
    ->group(function ($route) {
        $route->get("destinations", "get_all_destination");
    });

Route::prefix("api")
    ->controller(App\Http\Controllers\HotelController::class)
    ->middleware("api")
    ->group(function ($route) {
        $route->get("hotels", "special_offer_hotels");
    });


// Route::get("destinations", [ DestinationController::class, "get_all_destination" ]);
