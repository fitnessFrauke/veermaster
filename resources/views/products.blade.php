@extends('layouts.app')
@section('content')
@include('submitProduct')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th></th>
                <th>{{ $product->title }}</th>
                <th><a href='edit/{{$product->id}}'>Edit</a></th>
                <th><a href='delete/{{$product->id}}'>Delete</a></th>
            </tr>   
            @endforeach    
        </tbody>
    </table>
</div>

@endsection