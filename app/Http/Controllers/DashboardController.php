<?php

namespace App\Http\Controllers;

use App\Models\SeatAllocation;
use App\Models\Trip;
use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        $totalTrips = Trip::count();
        $totalCustomers = User::count();
        $soldTickets = SeatAllocation::count();
        $totalLocations = Location::count();

        return view('pages.index', compact('totalTrips', 'totalCustomers', 'soldTickets', 'totalLocations'));
    }
}

