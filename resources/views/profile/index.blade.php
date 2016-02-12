@extends('master')

@section('title', 'Profile')
@section('meta-description', 'Users account details')
	
@section('content')

<div class="title">Hi there {{ \Auth::user()->name }} </div>

<h2>Account stats</h2>
<ul>
	<li>Total Tweets: {{ $totalTweets }}</li>
</ul>

	<h2>Add a new profile image!</h2>

	<form action="/profile/new-profile-image" method="post" enctype="multipart/form-data">
	{!! csrf_field() !!}
		
	<input type="file" name="photo" required>
	<input type="submit" value="Upload">

	</form>

<h2>Write a new Tweet</h2>

<form action="/profile/new-tweet" method="post">
	
{!! csrf_field() !!}

	<div>
		<label for="content">Tweet: </label>
		<textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
	</div>

	<div>
		<label for="tags">Tags: </label>
		<textarea name="tags" id="tags" placeholder="#hashlikethis">{{ old('tags')}}</textarea>
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