@extends('master')

@section('title', 'Account')
@section('meta-description', 'Users account details')
	
@section('content')

<div class="title">Hi there {{ \Auth::user()->name }} </div>

<h2>Account stats</h2>
<ul>
	<li>Total Tweets: {{ $totalTweets }}</li>
</ul>

<h2>Write a new Tweet</h2>

<form action="/account/new-tweet" method="post">
	
{!! csrf_field() !!}

	<div>
		<label for="content">Tweet: </label>
		<textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
	</div>

	<input type="submit" value="Post">

</form>

@if(count($errors))
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

@endsection