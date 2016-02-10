@extends('master')

@section('title', '')
@section('meta-description', 'Users profile page')
	
@section('content')



	<header id="user-profile">
		<img src="" alt="" width="120" height="120">
		<h1>{{ $user->name }}</h1>
		<p>{{ $user->description }}</p>
		<ul>
			<li>Total Tweets: {{ $totalTweets }} </li>
			<li></li>
			<li></li>
		</ul>
	</header>

	@foreach( $userPosts as $tweet )

		<article class="tweet">
			
			<p> {{ $tweet->content }} </p>
			<small>Posted {{ $tweet->created_at }} by {{ $tweet->user->name }}</small>

		</article>

	@endforeach

@endsection