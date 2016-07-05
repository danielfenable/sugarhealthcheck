@extends('panel/master/master')

@section('addon')
    @parent

{!!$list_info or "" !!} <br>

<form action="{{$action}}" method="POST" name="list" >

{{ Form::token() }}

<select name="list_value">


@foreach ($list_value as $item)

<option value="{{$item}}">{{$item}}</option>

@endforeach

<br>
<br>

</select>


     {!!$additional or "" !!}


<input type="submit">

</form>


@stop

