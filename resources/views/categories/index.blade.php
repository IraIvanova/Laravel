@extends('default')

@section('content')

    @foreach($categories as $category)
        <div> {{$category->name}}</div>
        <a class="btn btn-info" href="/category/edit/{{$category->id}}">Edit category</a>
         <a class="btn btn-danger" href="/category/delete/{{$category->id}}">Delete category</a>
    @endforeach
    @endsection