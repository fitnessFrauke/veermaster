@extends('layouts.app')
@section('startPage')
@include('submitOrder', ['products' => $products, 'restaurants' => $restaurants])
<div class="container">
    <h3>New order</h3>
</div>
@endsection