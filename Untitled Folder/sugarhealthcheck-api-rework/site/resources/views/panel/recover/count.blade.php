@extends('panel/master/master')

@section('addon')
    @parent

<p>Choose a range of two dates to show deleted records between them for {{ $system }}.</p>

<body>

{{ Form::open(array('url' => 'recoverlist')) }}

<p>

</p>
    {{ $errors->first('max') }}
<p>
    {{ Form::date('date_range_1', Input::old('date_range_1'), array('placeholder' => '01/01/2016','required' => 'required')) }}
</p>

<p>
    {{ Form::date('date_range_2', Input::old('date_range_2'), array('placeholder' => '01/01/2016','required' => 'required')) }}
</p>

Module Name <br>

<select name="module" required>

<option disabled selected value>

@foreach ($modules as $key => $value)

<option value="{{$value}}">{{$value}}</option>

@endforeach

<select>

<br><br>

{{Form::hidden("system",$system)}}


<p>{{ Form::submit('Submit') }}</p>
{{ Form::close() }}


@stop

