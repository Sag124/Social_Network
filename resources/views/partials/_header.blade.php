 <header class="main-header">
    <!-- Logo -->
    <a href="{{ route('posts.index') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IIIT</b>DM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>IIITDM</b>NETWORK</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
     {{--  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a> --}}

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="{{ route('messages') }}" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              {{-- <span class="label label-success">4</span> --}}
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{URL::asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{URL::asset('dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{URL::asset('dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{URL::asset('dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="{{URL::asset('dist/img/user4-128x128.jpg')}}" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="{{ route('messages') }}">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              {{-- <span class="label label-warning">10</span> --}}
              @if(App\Friendship::where('status', '=', NULL)->where('user_requested', Auth::user()->id)->count()>0)
              <span class="label label-danger">{{App\Friendship::where('status', '=', NULL)
                                                  ->where('user_requested', Auth::user()->id)
                                                  ->count()}}</span>
              @else
              
              @endif
            </a>
            <ul class="dropdown-menu">

              <li class="header">You have {{App\Friendship::where('status', '=', NULL)
                                                  ->where('user_requested', Auth::user()->id)
                                                  ->count()}} friend requests</li>
            <?php
            $notifications = App\Friendship::where('status', '=', NULL)->where('user_requested', Auth::user()->id)->get()
            ?>
                       @foreach($notifications as $notification)


              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="{{ route('requests') }}">
                      <i class="fa fa-users text-aqua"></i>
            You have friend request from  {{DB::table('users')->where('id','=', $notification->requester)->value('name')}}
                    </a>
                  </li>
                </ul>
              </li>
                  @endforeach

              <li class="footer"><a href="{{ route('requests') }}">View all Friend Requests</a></li>
            </ul>
          </li>


          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger"></span>
                                                 
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have {{App\Friendship::where('status', '=', 1)
                                                  ->where('user_requested', Auth::user()->id)
                                                  ->count()}}  notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="{{ route('requests') }}">
                        You have friend requests
                      </li>
                      </a>
                </ul>
              </li>
              <li class="footer">
                <a href="{{ route('notifications') }}">View all notifications</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{URL::asset('public/img')}}/{{Auth::user()->image}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ ucwords(Auth::user()->name) }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{URL::asset('public/img')}}/{{Auth::user()->image}}" class="img-circle" alt="User Image">

                <p>
                  {{ ucwords(Auth::user()->name) }} - {{ Auth::user()->body }}
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="{{ route('myposts', [Auth::user()->slug]) }}">My Posts</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="{{ route('posts.index') }}">Posts</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="{{ route('friends') }}">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="{{ route('profile', [Auth::user()->slug]) }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>