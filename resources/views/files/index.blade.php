@extends('main')

@section('title', '| File Uploading')

@section('main-content')

<div class="text-center">
	<h1 style="color: skyblue;">List of Files</h1>
</div>

   <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                {{-- <h2>List of Product Files</h2> --}}
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('upload-files.create') }}"> Upload New File</a>
                <br>
            </div>
        </div>
    </div>
    {{-- <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th>Your File</th>
        </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->details }}</td>
        <td>
        <a href='{{ asset("images/$product->product_image") }}'>{{ $product->product_image }}</a>
        </td>
    </tr>
    @endforeach
    </table> --}}
    <br>
    @foreach ($products as $product)
<div class="row">
<div class="col-md-10 col-md-offset-1">
                 {{-- @foreach($posts as $post) --}}
              
                 <div class="box box-widget">
            {{-- <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="{{URL::asset('public/img')}}/{{$product->user->image}}" alt="User Image">
                <span class="username"><a href="{{ route('profile',[$product->user->slug]) }}">{{ucwords($product->user->name)}}</a></span>
                <span class="description">Shared publicly - {{ date('M j, Y h:ia', strtotime($product->created_at)) }}</span>
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
             --}}<!-- /.box-header -->
            <div class="box-body">
              <!-- product text -->
{{--               <p class="lead">
                {{$product->details}}
              </p>
 --}}
              <!-- Attachment -->
              <div class="attachment-block clearfix">
                <img class="attachment-img" src="{{URL::asset('img/pdf.png')}}" alt="Attachment Image">

                <div class="attachment-pushed">
                  <h4 class="attachment-heading"><a href="{{ asset("images/$product->product_image") }}">{{ $product->name }}</a></h4>

                  <div class="attachment-text">
                    {{$product->details}}
                  </div>
                  <!-- /.attachment-text -->
                </div>
                <!-- /.attachment-pushed -->
              </div>
              <!-- /.attachment-block -->

    

              <!-- Social sharing buttons -->
              {{-- <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button> --}}
                    {{-- <a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a> --}}

               {{-- @if ($post->isLiked) --}}
               {{-- <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up">Like</i></button> --}}
                     {{-- <a href="{{ route('post.like', $post->id) }}"> --}}
                        {{-- Unlike this shit --}}
                        {{-- <i class="fa fa-thumbs-o-down margin-r-5"></i>Dislike</a> --}}
               {{-- @else --}}
                     {{-- <a href="{{ route('post.like', $post->id) }}"> --}}
                        {{-- Like this awesome post! --}}
                        {{-- <i class="fa fa-thumbs-o-up margin-r-5"></i>Like</a> --}}
               {{-- @endif --}}
              {{-- <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button> --}}
            {{--   <span class="pull-right text-muted">{{$post->likes->count()}} likes - {{$post->comments->count()}} comments</span>
            </div>
             --}}<!-- /.box-body -->

            {{-- ========================================================= --}}
            {{-- @if(comment_count != 0) --}}
            {{-- <div class="box-footer box-comments"> --}}
            {{-- <br> --}}
{{-- 
              @foreach($post->comments as $comment)
              <div class="box-comment"> --}}
                <!-- User image -->
                {{-- <img class="img-circle img-sm" src="{{URL::asset('public/img')}}/{{$comment->file}}" alt="User Image"> --}}

                {{-- <div class="comment-text"> --}}
                      {{-- <span class="username"> --}}
                        {{-- {{ucwords($comment->name)}} --}}
                        {{-- <span class="text-muted pull-right">{{ date('M j, Y h:ia', strtotime($comment->created_at)) }}</span> --}}
                      {{-- </span>/.username --}}
                      {{-- {{ $comment->comment }} --}}
                {{-- </div> --}}
                <!-- /.comment-text -->
              {{-- </div> --}}
              {{-- <br> --}}
                {{-- @endforeach --}}
              <!-- /.box-comment -->
               </div>
            <!-- /.box-footer -->
            {{-- @else --}}
            {{-- <h2 class="text-center" style="color: sky-blue;">No comments!</h2> --}}
            {{-- @endif --}}

            {{-- =============================================== --}}



           {{--  <div class="box-footer">
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
           --}}



          </div> 
          {{-- @endforeach --}}
                <br>


</div>


</div>

    @endforeach
    {!! $products->render() !!}


    @endsection
