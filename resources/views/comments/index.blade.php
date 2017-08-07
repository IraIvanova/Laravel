@extends('default')

@section('content')

    @foreach($comments as $comment)
        <div> {{$comment->text}}</div>
        <a class="btn btn-info" href="/comment/edit/{{$comment->id}}">Edit comment</a>
         <a class="btn btn-danger" href="/comment/delete/{{$comment->id}}">Delete comment</a>
    @endforeach
    @endsection