@extends('default')

@section('content')
{{$article->title}}
   <div> {{$article->text}}</div>
    @endsection