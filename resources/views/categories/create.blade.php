@extends('default')

@section('content')

    <h1>Create new category</h1>
@if(count($errors) > 0)
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error  }}</li>
    @endforeach
</ul>
@endif
<form method="post" action="{{route('storeCategory')}}" >
    <div class="form-group">
        <label for="titleInput">Name</label>
        <input class="form-control" type="text" name="name" id="titleInput" placeholder="Name">
    </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <button type="submit" class="btn btn-default">Save</button>
</form>


@endsection