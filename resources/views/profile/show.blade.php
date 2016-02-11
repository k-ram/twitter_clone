@extends('master')

@section('title', '')
@section('meta-description', 'Users profile page')
	
@section('content')



	<header id="user-profile">
		<img src="" alt="" width="120" height="120">
		<h1>{{ $user->name }}</h1>
		<p>{{ $user->description }}</p>
		<ul>
			<li>Total Tweets: {{ $user->tweets->count() }} </li>
			<li></li>
			<li></li>
		</ul>
	</header>

	@foreach( $userPosts as $tweet )
	<hr>

		<article class="tweet">
			
			<p> {{ $tweet->content }} </p>
			<small>Posted {{ $tweet->created_at }} by {{ $tweet->user->name }}</small>

			<h2>Comments: </h2>
			@forelse( $tweet->comments as $comment )
				<article>
					<p> {{  $comment->content }} </p>
					<small>Written by {{ $comment->user->name }}</small>
				</article>
				@empty
				<p>Be frist to comment</p>
			@endforelse

		</article>

		


	<hr>

	@endforeach

@endsection