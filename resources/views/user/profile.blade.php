@extends('main')

@section('title', '| Profile Page')

@section('stylesheets')
<style>
 html, body {
                background-color: #ddd;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
            }
</style>
@endsection

@section('main-content')
<ol class="breadcrumb">
  <li><a href="/user">Home</a></li>
  <li><a href="{{ route('profile', ['Auth::user()->slug']) }}">Profile</a></li>
  <li><a href="{{ route('editProfile') }}">Edit Profile</a></li>
  <li><a href="{{ route('findFriends') }}">Find Friends</a></li>
  
</ol>
<script>
toastr.info('Are you the 6 fingered man?')
</script> 
 <section class="content">

      <div class="row">
        <div class="col-md-3">

         <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{URL::asset('public/img')}}/{{$user->image}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{ucwords($user->name)}}</h3>

              <p class="text-muted text-center">{{$profile->about}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">  </a>
                </li>
              </ul>
  
              
              @if(Auth::user()->id == $id)
      
              <p></p>
        
              @else  
              
              <?php 
              $req1 = DB::table('friendships')->where('requester', '=', Auth::user()->id)->where('user_requested', '=', $id)->first();

              $req2 = DB::table('friendships')->where('user_requested', '=', Auth::user()->id)->where('requester', '=', $id)->first();

              if($req1 == '' || $req2 == '')
              {
              ?>

              <a href="#" class="btn btn-primary btn-block"><b><i class="fa fa-plus" aria-hidden="true"></i> Add Friend Request</b></a>

              <?php } ?>
              @endif

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
              	



              <p class="text-muted">
                {{-- B.S. in Computer Science from the University of Tennessee at Knoxville --}}
              {{ $profile->branch }}  {{ $profile->year }}
              <br>
              
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
              {{-- <span class="pull-right"><i class="fa fa-pencil"></i></span>  --}}

              <p class="text-muted">{{$profile->city}}</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
              {{-- <span class="pull-right"><i class="fa fa-pencil"></i></span>  --}}

              <p>
                @foreach($profile->skills as $skill)
                @if ($skill->id % 3 == 0)
                <span class="label label-warning">{{$skill->name}}</span>
                
                @elseif ($skill->id % 3 == 1)
                <span class="label label-info">{{$skill->name}}</span>
                
                @elseif($skill->id % 3 == 2) 
                <span class="label label-success">{{$skill->name}}</span>
                
                @endif          
                @endforeach
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Goal</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>

              <hr>

              <strong><i class="fa fa-envelope margin-r-5" aria-hidden="true"></i>Email Address</strong>

              <h4> {{$user->email}} </h4>

              {{-- <p class="lead"> {{$user->email}} </p> --}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">

          <div class="nav-tabs-custom">

            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>

            <div class="tab-content" id="app">		
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                @if($count != 0)

           	              @foreach($posts as $post)
               
                 <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="{{URL::asset('public/img')}}/{{$post->user->image}}" alt="User Image">
                <span class="username"><a href="#">{{ucwords($post->user->name)}}</a></span>
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

              <!-- Attachment -->
              {{-- <div class="attachment-block clearfix">
                <img class="attachment-img" src="../dist/img/photo1.png" alt="Attachment Image">

                <div class="attachment-pushed">
                  <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                  <div class="attachment-text">
                    Description about the attachment can be placed here.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                  </div>
                  <!-- /.attachment-text -->
                </div>
                <!-- /.attachment-pushed -->
              </div> --}}
              <!-- /.attachment-block -->

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
            <!-- /.box-footer -->

            {{--  <form action="{{ route('comments.store', ['post_id' => $post->id]) }}" method="post">
                  {{ csrf_field() }}
                  <input class="form-control input-sm" name="comment" type="text" placeholder="Type a comment">
                  <br>
                  <input type="submit" class="input-sm form-control" value="comment">  
                  </form> --}}




          </div> 
          @endforeach

          @else
          <p class="lead text-center" style="color: blue;">No posts Yet!</p>

          @endif

                </div>

           
				
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
	
                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-thumbs-o-up bg-blue"></i>
                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o">3 mins ago</i></span>

                      <h3 class="timeline-header">Likes</h3>
                      <div class="timeline-body">
                        @foreach ($posts as $post)
                        @foreach ($post->likes as $user)
                            {{ $user->name }} likes this !
                        @endforeach
                        @endforeach
                      </div>
                    </div>
                  </li>
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
              <h1>Settings</h1>

              </div>
              <!-- /.tab-pane -->
            
                

            </div>

            <!-- /.tab-content -->

          </div>

          <!-- /.nav-tabs-custom -->

          {{-- @endforeach --}}
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>




@endsection


