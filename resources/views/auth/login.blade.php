@extends('master')

@section('title', 'Login')
@section('meta-description', 'Login to Twitter Clone')
	
@section('content')

<div class="title">Log into your account</div>

<form action="/login" method="post" class="form-group">

	{!! csrf_field() !!}
	
	<div>
		<label for="email" class="control-label">E-mail: </label>
		<input type="email" name="email" value="{{ old('email') }}" class="control-input" id="email" placeholder="kristy@twitterclone.com">
	</div>

	<div>
		<label for="password" class="control-label">Password: </label>
		<input type="password" name="password" class="control-input" id="password">
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