@extends('main')

@section('title', '| Edit Profile Page')

@section('stylesheets')
	<link rel="stylesheet" href="css/select2.min.css">

		{{--   <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
		 <script>tinymce.init({ selector:'textarea',  plugins: 'link code', menubar: false
 });</script> --}}

@endsection

@section('main-content')
<ol class="breadcrumb">
  <li><a href="/user">Home</a></li>
  <li><a href="{{ route('profile', ['$slug' => Auth::user()->slug]) }}">Profile</a></li>
  <li><a href="{{ route('editProfile') }}">Edit Profile</a></li>
  <li><a href="{{ route('findFriends') }}">Find Friends</a></li>
  
</ol>


<div class="row">
<h1 class="text-center" style="color: skyblue;">Edit Profile {{ Auth::user()->name }}</h1>

<div class="col-md-6 col-md-offset-1">
<form action=" {{ route('updateProfile') }} " method="post">	
{{ csrf_field() }}
<div class="form-group">
	<label for="city">City Name</label>
	<input type="text" name="city" value="{{$data->city}}" class="form-control">
</div>


<div class="form-group">
	<label for="year">Current Year</label>
	<input type="text" name="year" value="{{$data->year}}" class="form-control">
</div>



<div class="form-group">
	<label for="branch">Branch Name</label>
	<input type="text" name="branch" value="{{$data->branch}}" class="form-control">
</div>


<div class="form-group">
	<label for="about">About Yourself</label>
	<textarea rows="7" name="about" value="{{$data->about}}" class="form-control">{{$data->about}}</textarea>
</div>

<div class="form-group">
	<label for="skills">Skills</label>
	<select class="form-control select2-multi" name="skills[]" multiple="multiple">
	@foreach($skills as $skill)	
	<option value="{{$skill->id}}">{{$skill->name}}</option>
	@endforeach			
	</select>
</div>


<input type="submit" class="btn btn-success">
</form>
</div>
<div class="col-md-4 form-group">
	<form action="{{ route('updatePhoto') }}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
		<input type="file" name="image" class="form-control">
		<br>
		<div class="text-center">
		<input type="submit" value="Update Profile Pic">
		</div>
	</form>
</div>
</div>


@endsection


@section('scripts')
<script src="js/select2.min.js"></script>


	<script type="text/javascript">
  $('select').select2();
</script>
@endsection
