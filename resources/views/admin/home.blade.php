@extends('admin.master')

@section('content')	

	<div class="container">
		<h1>Admin area</h1>
		<a href="{{ url('auth/logout') }}">Sair</a>
	</div>
@stop