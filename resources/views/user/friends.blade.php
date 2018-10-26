@extends('main')

@section('title', '| Friends Page')

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

{{-- <h1>Hello</h1> --}}

  <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">{{ucwords(Auth::user()->name)}}</div>

                <div class="panel-body">
                    <div class="col-sm-12 col-md-12">

                    <h1>{{$data}} Friends</h1>
{{-- 
                      @if($data == 0)
                      
                      <h1 style="text-align: center; color: skyblue">-------->No Friends Yet!<---------</h1>
                      
                      @else --}}

                        
                        @foreach($friends as $uList)

                        <div class="row" style="border-bottom:1px solid #ccc; margin-bottom:15px">
                            <div class="col-md-2 pull-left">
                                <img src="{{URL::asset('public/img')}}/{{$uList->image}}" width="80px" height="80px" class="img-rounded"/>
                            </div>

                            <div class="col-md-7 pull-left">
                                <h3 style="margin:0px;"><a href="{{ url('/profile') }}/{{ $uList->slug }}">{{ucwords($uList->name)}}</a></h3>

                                <p><b>Gender:</b> {{$uList->gender}}</p>
                                   <p><b>Email:</b> {{$uList->email}}</p>

                            </div>

                            <div class="col-md-3 pull-right">

                                     <p>
                                        <a href="{{url('/accept')}}/{{$uList->name}}/{{$uList->id}}"  class="btn btn-info btn-sm">Unfriend</a>


                                     </p>

                            </div>

                        </div>
                        @endforeach

                        {{-- @endif --}}

                    </div>




                </div>
            </div>
        </div>

	

@endsection