@extends('panel/master/master')

@section('addon')
    @parent

    {!!$info or "" !!}

    <br><br>

{{ Form::open(array('url' => $action)) }}

     {{ Form::text('values') }}

      {!!$additional or "" !!}

     {{Form::submit()}}

{{ Form::close() }}

@stop

