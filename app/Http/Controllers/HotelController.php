<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function special_offer_hotels()
    {
        $hotels = Hotel::all();

        return response()->json([
            "success" => true,
            "data" => $hotels
        ], 200);
    }

    /**
     * search by destination or date
     */
    public function search_by_destination_or_date(Request $request)
    {
        try{
            $from_date = Carbon::parse($request->input("from_date"));
            $to_date = Carbon::parse($request->input("to_date"));
            $destination = $request->input("destination");

            $hotels = Hotel::join("destinations", "hotels.destination_id", "=", "destinations.id")
                ->where("destinations.destination_name", $destination)
                ->whereDate("opening", "<=", $from_date)
                ->whereDate("closing", ">=", $to_date)
                ->get();

            return response()->json([
                "success" => true,
                "data" => $hotels
            ], 200);

        } catch( Exception $e )
        {
            return response([
                "success"=> false,
                "error"=> $e->getMessage()
            ], 400);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
