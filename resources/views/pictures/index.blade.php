@extends('default')

@section('content')

    @foreach($pictures as $picture)
        <div> <a href="/picture/show/{{$picture->id}}">{{$picture->title}}</a></div>
        <div> <img src="/image/{{$picture->image}}" height="300px" /></div>
        <a class="btn btn-info" href="/picture/edit/{{$picture->id}}">Edit picture</a>
         <a class="btn btn-danger" href="/picture/delete/{{$picture->id}}">Delete picture</a>
    @endforeach
    @endsection