<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Location;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all(); 

        return view('pages.create_trip', compact('trips'));
    }
    public function create()
    {
        $locations = Location::all();
        return view('pages.create_trip', compact('locations'));
    }

    public function store(Request $request)
    {
       
        Trip::create([
            'date' => $request->input('date'),
            'location_id' => $request->input('location_id'),
           
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Trip created successfully.');
    }
}
