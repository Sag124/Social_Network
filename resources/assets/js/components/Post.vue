<template>
  <div class="post">

                  <div class="user-block">

                    <img class="img-circle img-bordered-sm" src="{{URL::asset('public/img')}}/{{$user->image}}" alt="user image">
                        <span class="username">
                          <a href="#">{{ucwords($post->user->name)}}</a>
                          {{-- <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a> --}}
                        </span>
                    <span class="description">Shared publicly - {{ date('M j, Y h:ia', strtotime($post->created_at)) }}</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    {{$post->content}}
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm">
                    <i class="fa fa-thumbs-o-up margin-r-5"></i>0 Like
                    </a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
               
                </div>
                <!-- /.post -->
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
