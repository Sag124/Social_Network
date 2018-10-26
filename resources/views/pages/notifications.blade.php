@extends('main')

@section('stylesheets')
<style>
	body{
		overflow-y: auto;
	}
	h1{
		color: skyblue;
	}

</style>
@endsection

@section('title', 'Notifications Page')

@section('main-content')
<h1 class="text-center">View All Notifications</h1>

@foreach($notifications as $notification)
<div class="well">
	<a href="{{ route('requests') }}"><h3> You have friend request from  {{DB::table('users')->where('id','=', $notification->requester)->value('name')}}  </h3></a>
</div>
@endforeach
@endsection