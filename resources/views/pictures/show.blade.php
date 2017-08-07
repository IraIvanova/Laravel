@extends('default')

@section('content')
{{$picture->title}}
   <div> <img src="/image/{{$picture->image}}" height="300px" /></div>
    @endsection