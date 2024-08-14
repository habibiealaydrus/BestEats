<?php

namespace App\Http\Controllers;

use App\Models\Award_Year;
use Illuminate\Http\Request;

class AwardYearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $yearAward = Award_Year::all();
        if ($yearAward) {
            return response()->json([
                "status" => true,
                "message" => "data found",
                "data" => $yearAward
            ]);
        } else {
            return response()->json([
                "status" => false,
                "message" => "Data Not Found",
            ]);
        };
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
    public function show(Award_Year $award_Year)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Award_Year $award_Year)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Award_Year $award_Year)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Award_Year $award_Year)
    {
        //
    }
}
