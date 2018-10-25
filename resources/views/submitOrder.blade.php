<div class="container submitProduct">
<h5>Add new order</h5>
    <div class="row">
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
                        <select name="department" id="department" class="form-control">
                        <option value=""> -- Select One --</option>
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->title}}</option>
                            @endforeach
                        </select>
                        <select name="department" id="department" class="form-control">
                        <option value=""> -- Select One --</option>
                            @foreach($restaurants as $restaurant)
                                <option value="{{$restaurant->id}}">{{$restaurant->title}}</option>
                            @endforeach
                        </select>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
</div>