@extends('main')

@section('title', '| Requests Page')

@section('main-content')
<ol class="breadcrumb">
  <li><a href="/user">Home</a></li>
  <li><a href="{{ route('profile', ['$slug' => Auth::user()->slug]) }}">Profile</a></li>
  <li><a href="{{ route('editProfile') }}">Edit Profile</a></li>
  <li><a href="{{ route('findFriends') }}">Find Friends</a></li>
  <li><a href="{{ route('requests') }}">Friend Requests</a></li>
</ol>

{{-- <h1>Hello</h1> --}}

  <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">{{ucwords(Auth::user()->name)}}</div>

                @if($rcount == 0)

                <h1 class="text-center" style="color:skyblue;">No New Requests</h1>

                @else

                <div class="panel-body">
                    <div class="col-sm-12 col-md-12">
                         @if ( session()->has('msg') )
                         <p class="alert alert-success">
                                      {{ session()->get('msg') }}
                                   </p>
                                @endif
                        @foreach($requests as $uList)

                        <div class="row" style="border-bottom:1px solid #ccc; margin-bottom:15px">
                            <div class="col-md-2 pull-left">
                                <img src="{{URL::asset('public/img')}}/{{$uList->image}}" width="80px" height="80px" class="img-rounded"/>
                            </div>

                            <div class="col-md-7 pull-left">
                                <h3 style="margin:0px;"><a href="">{{ucwords($uList->name)}}</a></h3>

                                <p><b>Gender:</b> {{$uList->gender}}</p>
                                   <p><b>Email:</b> {{$uList->email}}</p>

                            </div>

                            <div class="col-md-3 pull-right">

                                     <p>
                                        <a href="{{url('/accept')}}/{{$uList->name}}/{{$uList->id}}"  class="btn btn-info btn-sm">Confirm</a>

                                         <a href="{{url('/requestRemove')}}/{{$uList->id}}"  class="btn btn-default btn-sm">Remove</a>

                                     </p>

                            </div>

                        </div>
                        @endforeach
                    </div>




                </div>
                @endif
            </div>
        </div>

	

@endsection