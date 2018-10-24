@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <h1>Add new product</h1>
    <form action="/create" method="post">
        @if($errors->any())
        Please fix follows errors
        @endif

        {!! csrf_field() !!}
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                        @if($errors->has('title'))
                            <span class="help-block">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                <button type="submit" class="btn btn-default">Submit</button>
         </form>
    </div>
</div>
@endsection