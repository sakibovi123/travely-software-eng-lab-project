<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
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
            null;
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
