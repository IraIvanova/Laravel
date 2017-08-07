@extends('default')



@section('content')
<div class="col-sm-12">
    {!! \ConsoleTVs\Charts\Facades\Charts::assets() !!}

    {!! $chart->render() !!}
</div>
 @endsection