@extends('main')

@section('title', '| Find Friends Page')

@section('stylesheets')
<style>
    body{
        overflow-y: auto;
    }
</style>
@endsection

@section('main-content')
<ol class="breadcrumb">
  <li><a href="/user">Home</a></li>
  <li><a href="{{ route('profile', ['$slug' => Auth::user()->slug]) }}">Profile</a></li>
  <li><a href="{{ route('editProfile') }}">Edit Profile</a></li>
  <li><a href="{{ route('findFriends') }}">Find Friends</a></li>
  <li><a href="{{ route('requests') }}">Friend Requests</a></li>
  
</ol>

<div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">{{ucwords(Auth::user()->name)}}</div>

                <div class="panel-body">
                    <div class="col-sm-12 col-md-12">
                        @foreach($friends as $friend)

                        <div class="row" style="border-bottom:1px solid #ccc; margin-bottom:15px">
                            <div class="col-md-2 pull-left">
                                <img src="{{URL::asset('public/img')}}/{{$friend->image}}"
                                width="80px" height="80px" class="img-rounded"/>
                            </div>

                            <div class="col-md-7 pull-left">
                                <h3 style="margin:0px;"><a href="{{ url('/profile') }}/{{$friend->slug}}">
                                  {{ucwords($friend->name)}}</a></h3>
                                <p><i class="fa fa-globe"></i> {{$friend->city}}  - {{$friend->branch}}</p>
                                <p>{{$friend->about}}</p>

                            </div>

                            <div class="col-md-3 pull-right">

                                <?php
                                $check = DB::table('friendships')
                                        ->where('user_requested', '=', $friend->id)
                                        ->where('requester', '=', Auth::user()->id)
                                        ->first();

                                $check1 = DB::table('friendships')
                                        ->where('requester', '=', Auth::user()->id)
                                        ->where('user_requested', '=', $friend->id)
                                        ->where('status', '=', 1)
                                        ->first(); 

                                $check3 = DB::table('friendships')
                                        ->where('user_requested', '=', Auth::user()->id)
                                        ->where('requester', '=', $friend->id)
                                        ->first();  

                                $check2 = DB::table('friendships')
                                        ->where('user_requested', '=', Auth::user()->id)
                                        ->where('requester', '=', $friend->id)
                                        ->where('status', '=', 1)
                                        ->first();                                                  

                                if($check == '' && $check3 == ''){
                                ?>
                                   <p>
                                        <a href="{{url('/')}}/addFriend/{{$friend->id}}"
                                           class="btn btn-info btn-sm">Add to Friend</a>
                                    </p>
                                <?php } else if($check1 == '' && $check3 == '') {?>
                                    <p>Request Pending!</p>
                                <?php }?>
                                <?php if($check1 != '' || $check2!= '') {?>
                                <p class="lead">Friends!!</p>
                                <?php } ?>
                            </div>

                        </div>
                        @endforeach
                    </div>




                </div>
            </div>
        </div>
        </div>

	

@endsection