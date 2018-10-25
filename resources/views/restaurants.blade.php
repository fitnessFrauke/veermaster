@extends('layouts.app')
@section('restaurant')
@include('submitRestaurant')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Restaurant</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($restaurants as $restaurant)
            <tr>
                <th></th>
                <th>{{ $restaurant->title }}</th>
                <th><a href='edit/{{$restaurant->id}}'>Edit</a></th>
                <th><a href='delete/{{$restaurant->id}}'>Delete</a></th>
            </tr> 
            @endforeach      
        </tbody>
    </table>
</div>

@endsection