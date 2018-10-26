@extends('main')

@section('title', '| My Posts Page')

@section('main-content')
<ol class="breadcrumb">
  <li><a href="/user">Home</a></li>
  <li><a href="{{ route('profile', [Auth::user()->slug]) }}">Profile</a></li>
  <li><a href="{{ route('editProfile') }}">Edit Profile</a></li>
  <li><a href="{{ route('findFriends') }}">Find Friends</a></li>
  
</ol>


<div class="row">
@foreach($posts as $post)
<br>
        <div class="[ col-xs-12 col-sm-offset-1 col-sm-5 col-md-10 ]">
            <div class="[ panel panel-default ] panel-google-plus">
                <div class="dropdown">
                    <span class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="[ glyphicon glyphicon-chevron-down ]"></span>
                    </span>
                    <ul class="dropdown-menu" role="menu">
                        {{-- <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('posts.show', [$post->id]) }}">Show</a></li> --}}
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                    </ul>
                </div>
              {{--   <div class="panel-google-plus-tags">
                    <ul>
                        <li>#Millennials</li>
                        <li>#Generation</li>
                    </ul>
                </div> --}}


                <div class="panel-heading">
                    <img class="[ img-circle pull-left ]" src="{{URL::asset('img/boy.jpg')}}" alt="Mouse0270" />
                    <h3>{{ucwords($post->user->name)}} <small></small></h3>
                    <h5><span>Shared publicly</span> - <span>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</span> </h5>
                </div>
                <div class="panel-body">
                    <p>{{$post->content}}</p>
                    <br>
                    @if(($post->image)!='')
                    <p class="lead">
                        <img src=" {{ URL::asset('public/posts') }}/{{ $post->image }} " class="img-responsive" width="200px" height="200px">
                    </p>
                    @endif
                </div>
                <div class="panel-footer">
                    <button type="button" class="[ btn btn-default ]"><span class="glyphicon glyphicon-thumbs-up
" aria-hidden="true"></span>
</button>
                    <button type="button" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-share-alt ]"></span>
                    </button>
                    <div class="input-placeholder">Add a comment...</div>
                </div>
                <div class="panel-google-plus-comment">
                    <img class="img-circle" src="https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s46" alt="User Image" />
                    <div class="panel-google-plus-textarea">
                        <textarea rows="4"></textarea>
                        <button type="submit" class="[ btn btn-success disabled ]">Post comment</button>
                        <button type="reset" class="[ btn btn-default ]">Cancel</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
@endforeach
        </div>


@endsection