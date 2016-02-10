@extends('master')

@section('title', '')
@section('meta-description', 'Users profile page')
	
@section('content')



	<header id="user-profile">
		<img src="" alt="" width="120" height="120">
		<h1>{{ $user->name }}</h1>
		<p>{{ $user->description }}</p>
		<ul>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</header>

@endsection