@extends('main')

@section('title', '| Welcome Page')

@section('stylesheets')
<style>
body{
overflow-y: hidden;	
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
  <li><a href="{{ route('friends') }}">Friends</a></li>
</ol>

<h1 class="text-center" style="color: skyblue;">--------ALL POSTS HERE-----</h1>
<div class="row">
	<div class="col-lg-4">
	<h1 class="text-center">News</h1>
	{{-- <marquee behavior="" direction="up"> --}}
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat reprehenderit ipsa laudantium non officia doloribus perferendis. Modi officia possimus quis, a esse facilis ratione, sed explicabo totam, voluptatibus ipsam! Obcaecati!</p>
		<hr>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi deleniti temporibus perspiciatis, dolor placeat commodi accusamus consequuntur quo voluptate ad a? Sequi unde pariatur, eveniet. Quas ut aliquam distinctio quia!
		</p>
		<hr>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore nulla quis dolorem aut dicta voluptatem non, sunt assumenda! Deserunt odio porro minima nesciunt alias fugiat qui consequuntur modi dignissimos, magnam!
		</p>
		{{-- <hr> --}}
			{{-- </marquee> --}}
	</div>
	<div class="col-lg-4">
	<h1 class="text-center">Announcements</h1>
	{{-- <marquee behavior="" direction="up"> --}}
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla optio, dolor facilis aut nostrum error velit quibusdam minus vel sapiente qui laborum ducimus id officia reiciendis eos quasi eum unde?</p>

		<hr>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error unde temporibus, illo ducimus est reprehenderit. Porro officia, laudantium voluptates explicabo ratione dolorum nobis soluta praesentium! Enim neque id beatae cumque.</p>

		<hr>

		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae cum optio dolor, tempora beatae nesciunt neque in ipsum quas minus delectus possimus inventore, libero asperiores, quia quis maiores autem voluptate!</p>
	{{-- </marquee> --}}
	</div>
	<div class="col-lg-4">
	<h1 class="text-center">Achievements</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores neque ratione vero ullam enim assumenda, doloremque numquam aliquid corporis, possimus a veniam dolores rerum provident culpa quasi consequuntur minima, omnis!</p>
		<hr>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi necessitatibus explicabo nemo, doloremque, iure facere modi sunt officia consequatur quasi. Cum adipisci dolorum quo nulla est suscipit odio, ea corporis.</p>
		<hr>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam ea, explicabo neque delectus fugit aspernatur atque ratione tenetur nesciunt perspiciatis, sit est. Delectus accusamus ipsum a, officiis repudiandae deleniti tempora.
		</p>
	</div>
</div>
@endsection