@extends('admin.master')

@section('content')	

	<div class="container">
		<div style="width: 300px; margin: auto;">
			<h1>Log in screen</h1>
			<form method="POST" action="/auth/login" data-toggle="validator" role="form">
				{!! csrf_field() !!}
				<div class="form-group">
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" value="enviar" class="form-control btn-primary">
				</div>
			</form>
		</div>
	</div>

@stop