@extends('master')

@section('title', 'Login')
@section('meta-description', 'Login to Twitter Clone')
	
@section('content')

<div class="title">Log into your account</div>

<form action="/login" method="post">

	{!! csrf_field() !!}
	
	<div>
		<label for="email">E-mail: </label>
		<input type="email" name="email" value="{{ old('email') }}" id="email" placeholder="kristy@twitterclone.com">
	</div>

	<div>
		<label for="password">Password: </label>
		<input type="password" name="password" id="password">
	</div>


	<input type="submit" value="Login">

</form>

@if(count($errors))
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

@endsection