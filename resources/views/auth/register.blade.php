@extends('master')

@section('title', 'Register')
@section('meta-description', 'Sign up to Twitter Clone')
	
@section('content')

<div class="title">Register a new account</div>

<form action="/register" method="post">

	{!! csrf_field() !!}

	<div>
		<label for="name">Full Name: </label>
		<input type="text" name="name" id="name" placeholder="Kirsty Ramage">
	</div>
	
	<div>
		<label for="email">E-mail: </label>
		<input type="email" name="email" id="email" placeholder="kristy@twitterclone.com">
	</div>

	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" id="password">
	</div>

	<div>
		<label for="password_confirmation">Confirm Password: </label>
		<input type="password" name="password_confirmation" id="password_confirmation">
	</div>

	<input type="submit" value="Register">

</form>

@if(count($errors))
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

@endsection
