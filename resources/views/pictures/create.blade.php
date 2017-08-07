@extends('default')

@section('content')

    <h1>Create new article</h1>
@if(count($errors) > 0)
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error  }}</li>
    @endforeach
</ul>
@endif
<form method="post" action="/picture/store" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titleInput">Title</label>
        <input class="form-control" type="text" name="title" id="titleInput" placeholder="Title">
    </div>

    <div class="form-group">
        <label for="descr">Description</label>
        <input class="form-control" type="text" name="description" id="descr" placeholder="Short description">
    </div>

        <div class="form-group">
            <label for="tag">Price</label>
            <input class="form-control" type="text" name="price" id="tag" placeholder="Tags">
        </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
    </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <button type="submit" class="btn btn-default">Save</button>
</form>


@endsection