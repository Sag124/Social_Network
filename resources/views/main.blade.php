<!DOCTYPE html> 
<html lang="en">
<head>
  @include('partials._head')
  @yield('stylesheets')
</head>

<body class="hold-transition skin-purple sidebar-mini">
      
          <div class="wrapper">

          @include('partials._header')
          @include('partials._messages')


            {{-- @include('partials._sidebar') --}}
           <div class="content-wrapper">
            @include('partials._cwrapper')          
           </div>
                  @include('partials._footer')


            <aside class="control-sidebar control-sidebar-dark">

          @include('partials._csidebar')

          </aside>
         <div class="control-sidebar-bg"></div>

          @include('partials._scripts')
          
          @yield('scripts') 

        </div>
        
  </body>
</html>