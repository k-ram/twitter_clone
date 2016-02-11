@extends('master')

@section('title', 'Delete Tweet')
@section('meta-description', 'Want to take back what you said???')
	
@section('content')

<h1>Are you sure ?</h1>

<p>You are about to <em>permanently</em> delete the following tweet: </p>

<article class="tweet">
	<p> {{ $tweet->content }} </p>
	<small>Posted {{ $tweet->created_at }} by {{ $tweet->user->name }}</small>
</article>

<a href="/profile/delete-tweet/{{ $tweet->id }}/confirm">Yes</a> | <a href="/profile/{{ $tweet->user->username }}">No, please take me back</a>


@endsection