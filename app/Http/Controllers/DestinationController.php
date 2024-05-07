<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Exception;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function get_all_destination()
    {
        try {
            $destination = Destination::all();
            // dd($destination);
            return response()->json([
                "success" => true,
                "data" => $destination
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                "success" => false,
                "error" => $e->getMessage()
            ]);
        }
    }

    /**
     * Search destination
     */
    public function search_destination()
    {
        //
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
