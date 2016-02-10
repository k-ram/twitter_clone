@extends('master')

@section('title', 'Account')
@section('meta-description', 'Users account details')
	
@section('content')

<div class="title">Hi there {{ \Auth::user()->name }} </div>

@endsection