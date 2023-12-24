
@extends('layouts.app')

@section('content')
    <h2>Create a Trip</h2>

    <form method="POST" action="{{ route('trips.store') }}">
        @csrf

        <label for="date">Select Trip Date:</label>
        <input type="date" name="date" required>

        <label for="location">Select Location:</label>
        <select name="location_id" required>
            @foreach($locations as $location)
                <option value="{{ $location->id }}">{{ $location->name }}</option>
            @endforeach
        </select>

        <button type="submit">Submit</button>
    </form>
@endsection
