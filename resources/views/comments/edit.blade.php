@extends('default')



@section('content')
    <form method="post" action="/comment/update/{{$comment->id}}">

        <div class="form-group">
            <label for="descr">Text</label>
            <textarea class="form-control"  name="text" id="descr" placeholder="Text"></textarea>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <button type="submit" class="btn btn-default">Save</button>
    </form>
@endsection