@extends('default')

@section('content')

    @foreach($articles as $article)
        <div> <a href="/article/show/{{$article->id}}">{{$article->title}}</a></div>
        <a class="btn btn-info" href="/article/edit/{{$article->id}}">Edit article</a>
         <a class="btn btn-danger" href="/article/delete/{{$article->id}}">Delete article</a>
    @endforeach
    @endsection