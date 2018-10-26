@extends('main')

@section('title', '| View Posts')

@section('stylesheets')
<style>
  body{
    overflow-y: auto;
  }
   html, body {
                background-color: #ddd;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
            }
   .posts_div{margin-bottom:10px !important}
    .posts_div h3{
              margin-top:4px !important;
            }
</style>
@endsection

@section('main-content')
<div class="row">
<div class="col-md-9 col-md-offset-1">
{{-- <h1>Create New Post</h1> --}}


 <div class="posts_div">
          <div style="background-color:#fff">
            <div class="row">
              <div class="col-md-1 pull-left">
                <img src="{{URL::asset('public/img')}}/{{Auth::user()->image}}"
                 style="width:50px; margin:5px; padding:5px" class="img-rounded">
              </div>
              <div class="col-md-11 pull-right">
                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <textarea name="content" id="postText" class="form-control"
                placeholder="what's on your mind ?" rows="4"></textarea>
                <input type="file" name="image" id="image" class="inputfile">
                {{-- <label for="file">Choose a file</label> --}}
                <button type="submit" class="btn btn-sm btn-info pull-right" style="margin:10px" id="postBtn">Post</button>
                </form>
              </div>
            </div>
          </div>
      </div>
      </div>

      <div class="col-md-1">
        <a href="http://127.0.0.1:8000/upload-files" class="btn btn-success">Click to upload files</a>
      </div>
</div>






@if($post_count == 0)
<h1>No posts Yet!</h1>

@else

@foreach($posts as $post)
<br>


<div class="row">
<div class="col-md-10 col-md-offset-1">
                 {{-- @foreach($posts as $post) --}}
              
                 <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="{{URL::asset('public/img')}}/{{$post->user->image}}" alt="User Image">
                <span class="username"><a href="{{ route('profile',[$post->user->slug]) }}">{{ucwords($post->user->name)}}</a></span>
                <span class="description">Shared publicly - {{ date('M j, Y h:ia', strtotime($post->created_at)) }}</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
              <p class="lead">
                {{$post->content}}
              </p>

       {{--  @if($post->image)
        
              <!-- Attachment -->
              <div class="attachment-block clearfix">
                <img class="attachment-img" src="{{URL::asset('public/posts')}}/{{$post->image}}" alt="Attachment Image">

                <div class="attachment-pushed">
                  <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                  <div class="attachment-text">
                    Description about the attachment can be placed here.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                  </div>
                  <!-- /.attachment-text -->
                </div>
                <!-- /.attachment-pushed -->
              </div>
              <!-- /.attachment-block -->

        class="img-responsive pad"
        @endif --}}

        @if($post->image)
          <div class="box-body">
              <img src="{{URL::asset('public/posts')}}/{{$post->image}}" class="img-responsive" alt="Photo">
            
          </div>
        @endif

    

              <!-- Social sharing buttons -->
              {{-- <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button> --}}
                    <a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a>

               @if ($post->isLiked)
               {{-- <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up">Like</i></button> --}}
                     <a href="{{ route('post.like', $post->id) }}">{{-- Unlike this shit --}}<i class="fa fa-thumbs-o-down margin-r-5"></i>Dislike</a>
               @else
                     <a href="{{ route('post.like', $post->id) }}">{{-- Like this awesome post! --}}<i class="fa fa-thumbs-o-up margin-r-5"></i>Like</a>
               @endif
              {{-- <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button> --}}
              <span class="pull-right text-muted">{{$post->likes->count()}} likes - {{$post->comments->count()}} comments</span>
            </div>
            <!-- /.box-body -->

            {{-- ========================================================= --}}
            {{-- @if(comment_count != 0) --}}
            <div class="box-footer box-comments">
            {{-- <br> --}}

              @foreach($post->comments as $comment)
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="{{URL::asset('public/img')}}/{{$comment->file}}" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        {{ucwords($comment->name)}}
                        <span class="text-muted pull-right">{{ date('M j, Y h:ia', strtotime($comment->created_at)) }}</span>
                      </span><!-- /.username -->
                      {{ $comment->comment }}
                </div>
                <!-- /.comment-text -->
              </div>
              {{-- <br> --}}
                @endforeach
              <!-- /.box-comment -->
               </div>
            <!-- /.box-footer -->
            {{-- @else --}}
            {{-- <h2 class="text-center" style="color: sky-blue;">No comments!</h2> --}}
            {{-- @endif --}}

            {{-- =============================================== --}}



            <div class="box-footer">
              <form action="{{ route('comments.store', ['post_id' => $post->id]) }}" method="post">
              {{ csrf_field() }}
                <img class="img-responsive img-circle img-sm" src="{{URL::asset('public/img')}}/{{Auth::user()->image}}" alt="Alt Text">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                  <input type="text" name="comment" class="form-control input-sm" placeholder="Press enter to post comment">
                </div>
                <br>
                <div class="form-group">
                  <input type="submit" value="comment" class="form-control btn btn-info">
              </div>
              </form>
            </div>
          



          </div> 
          {{-- @endforeach --}}
                <br>


</div>


</div>

{{-- 
<div class="col-md-3 col-md-offset-8">
  <h1>New friends section</h1>
  <marquee behavior="" direction=""></marquee>
</div> --}}






@endforeach
        
        <div class="text-center">        {{ $posts->links() }}
</div>
@endif
@endsection

<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
    readURL(this);
});
</script>