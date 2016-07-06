@extends('panel/master/master')

@section('addon')
    @parent

   @foreach ($output as $key => $value)

     <strong> {{ucfirst($key)}} </strong> = {{ucfirst($value)}} <br> <br>

   @endforeach

@stop

