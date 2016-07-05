@extends('panel/master/master')

@section('addon')
    @parent

    {!!$info or "" !!}

{{ Form::open(array('url' => $action)) }}

      {!!$base or "" !!}

     {{Form::submit()}}

{{ Form::close() }}

@stop

