@extends('main')

@section('title', '| Skills Page')

@section('main-content')
<h1 class="text-center">Skills</h1>
<div class="row">
	<div class="col-md-8">
		<h1>Listing Skills</h1>
		<table class="table">
			<thead>
				<td>#</td>
				<td>Name</td>
			</thead>
			<tbody>
				@foreach($skills as $skill)
				<tr>
				<td> {{ $skill->id }} </td>
				<td> {{ $skill->name }} </td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="col-md-4">
		<div class="well">
			<h2>Create a New Skill</h2>
			<div class="form-group">
			<form action="{{ route('skills.store') }}" method="post">
			{{ csrf_field() }}
			<input type="text" name="name" id="name" class="form-control">
				<br>
			<input type="submit" value="Create a new Skill" class=" btn btn-primary form-control">
			</form>
			</div>
		</div>
	</div>
</div>
@endsection