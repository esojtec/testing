@extends('layouts.app')

@section('content')

{{ $saludo }}

@foreach( $message as $m)
	<br>
	{{ $m['type'] }}
	->
	{{$m['message']}}
@endforeach
@endsection