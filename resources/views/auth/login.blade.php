<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IIITDM NETWORK</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/login.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    @include('partials._messages')

    <body>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                    
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1 style="color: black;font-weight: bold;">IIITDM NETWORK</h1>
                        <div class="description">
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
                
                {{-- <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 show-forms">
                        <span class="show-login-form">Login</span>
                    </div>
                </div> --}}
            
                
                <div class="row login-form">
                    <div class="col-sm-4 col-sm-offset-4">
                        <form role="form" action="{{ route('login') }}" method="post" class="l-form">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label class="sr-only" for="email">Email</label>
                                <input type="text" name="email" placeholder="Email..." class="email form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="password">Password</label>
                                <input type="password" name="password" placeholder="Password..." class="password form-control" id="password">
                            </div>
                            <button type="submit" class="btn">Sign in!</button>
                        </form>
                        {{-- <div class="social-login">
                            <p>Or login with:</p>
                            <div class="social-login-buttons">
                                <a class="btn btn-link-1" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="btn btn-link-1" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="btn btn-link-1" href="#"><i class="fa fa-google-plus"></i></a>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div class="col-sm-6 forms-right-icons">
                        <div class="row">
                            <div class="col-sm-2 icon"><i class="fa fa-user"></i></div>
                            <div class="col-sm-10">
                                <h3>New Features</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 icon"><i class="fa fa-eye"></i></div>
                            <div class="col-sm-10">
                                <h3>Easy To Use</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 icon"><i class="fa fa-twitter"></i></div>
                            <div class="col-sm-10">
                                <h3>Social Integrated</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
                    
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    
                    {{-- <div class="col-sm-8 col-sm-offset-2">
                        <div class="footer-border"></div>
                        <!-- {{-- <p>Made by <a href="http://azmind.com" target="_blank">AZMIND</a>.</p> --}} 
                    
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>