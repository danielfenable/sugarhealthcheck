@extends('panel/master/master')

@section('addon')
    @parent


<form action="{{$action}}" method="POST" name="list" >

{{ Form::token() }}

<select name="system">

@foreach ($list as $sugar)

<option value="{{$sugar}}">{{$sugar}}</option>
    
@endforeach

<br>
<br>

</select>

<input type="submit">

</form>


@stop

