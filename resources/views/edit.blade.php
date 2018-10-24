@extends('layouts.app')
@section('content')

<h1>Edit product - Product Name </h1>
    <p class="lead">Edit this product below. <a href='/'>Go back to all products.</a></p>
<hr>

<div class="container">
    <div class="row">
    <h1>Edit product</h1>
    <form action="/update/{{$product->id}}" method="post">
        @if($errors->any())
        Please fix follows errors
        @endif

        {!! csrf_field() !!}
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$product->title}}">
                        @if($errors->has('title'))
                            <span class="help-block">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                <button type="submit" class="btn btn-default">Submit</button>
         </form>
    </div>
</div>

@stop