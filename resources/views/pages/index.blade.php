

@extends('layouts.app')

@section('content')
    <h2>Dashboard</h2>

    <div class="card-container">
        <div class="card">
            <h3>Total Trips</h3>
            <p>{{ $totalTrips }}</p>
        </div>

        <div class="card">
            <h3>Total Customers</h3>
            <p>{{ $totalCustomers }}</p>
        </div>

        <div class="card">
            <h3>Sold Tickets</h3>
            <p>{{ $soldTickets }}</p>
        </div>

        <div class="card">
            <h3>Total Locations</h3>
            <p>{{ $totalLocations }}</p>
        </div>
    </div>
@endsection

@section('head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
