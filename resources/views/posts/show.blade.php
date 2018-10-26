@extends('main')

@section('title', '| Edit Post')

@section('main-content')

{{-- <div class="row">
<div class="col-md-7">
<p class="text-center lead">{{$post->content}}</p>
@foreach($post->comments as $comment)
				<div class="comment">
					<div class="author-info">

						<img src="{{URL::asset('public/img')}}/{{$post->user->image}}" class="author-image">
						<div class="author-name">
							<h4>{{ $comment->comment }}</h4>
							<p class="author-time">{{ date('F nS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>

						</div>
						
					</div>

					<div class="comment-content">
						{{ $comment->comment }}

						<a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
					
					<a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
					</div>

				</div>
			@endforeach
</div>
<div class="col-md-6">
	<div class="well">
		
	</div>
</div>
</div>

 --}}


<div class="row">
	<div class="col-md-6">
		<p class="lead">{{$post->content}}</p>
	</div>
	<div class="col-md-6">
		<img src="{{URL::asset('public/posts')}}/{{$post->image}}" alt="Post Image" class="image-responsive">
	</div>

</div>

<div class="row">
	@foreach($post->comments as $comment)
	<h1>{{$comment->comment}} <small>{{$comment->name}}</small></h1>
	@endforeach
</div>



@endsection