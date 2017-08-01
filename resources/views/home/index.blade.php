<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Olive Community Bank</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{asset('assets/assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/assets/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/assets/css/form-elements.css')}}">
        <link rel="stylesheet" href="{{asset('assets/assets/css/style.css')}}">
        <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
         <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('/assets/assets/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('/assets/assets/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('/assets/assets/ico/apple-touch-icon-72-precomposed.png')}}">
         <link rel="apple-touch-icon-precomposed" href="{{asset('/assets/assets/ico/apple-touch-icon-57-precomposed.png')}}">  

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Olive</strong> Community Bank</h1>
                            <div class="description">
                            	<p>
	                            	At Olive, we help customers like you save thier cash and update thier balance at due time. 
                            	</p>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<center><h3>Customer's Login</h3></center>
                            		<p>Enter your username and password to log on:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
                                {{--  @if(Session::has('error'))
                                    {{ Session::get('error') }}
                                @endif  --}}
			                    <form method="POST" action="{{ route('customer.login') }}" class="login-form">
			                    	{{ csrf_field() }}
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username_or_email" placeholder="Username..." class="form-username form-control" id="form-username">
                                        @if($errors->has('username_or_email'))
                                                <span class="" style="color:red">{{ $errors->first('username_or_email') }}</span>
                                        @endif
                                    </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                                        @if($errors->has('password'))
                                                <span style="color:red">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
			                       <center> <input type="submit" value="Sign in!" class="btn" style="background-color:#de615e; color:white;"> </input> <center>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...Copyright Olive Comminity Bank ({{$settings->site_email}})</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-2" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/assets/js/scripts.js"></script>
        <script src="{{ asset('js/toastr.min.js') }}"></script>
        <script>
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}")
            @endif

            @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}")
            @endif

            @if(Session::has('error'))
                toastr.error("{{ Session::get('error') }}")
            @endif
        </script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>