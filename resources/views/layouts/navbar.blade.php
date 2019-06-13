		<!-- top-area Start -->
		<section class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="index.html">trip<span>egy</span></a>

			            </div><!--/.navbar-header-->
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                        
                            @if(!Auth::check())
                            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
			                    <li class="scroll"><a href="" id="signinbtn">sign in</a></li>
			                    <li class="scroll"><a href="" id="signupbtn">register</a></li>
			                    <li class="select-opt" class="head-responsive-right pull-right">
			                    	<select name="language" id="language">
										<option value="default">EN</option>
										<option value="Arabic">AR</option>
									</select>
			                    </li>
                            </ul><!--/.nav -->
                            @endif()
                            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="scroll"><a style="cursor:pointer"><span style="text-transform: lowercase; ">{{--logged in as:--}} </span>{{auth()->user()->name}}</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
			        </div><!--/.container-->
			    </nav><!--/nav-->
			    <!-- End Navigation -->
			</div><!--/.header-area-->
		    <div class="clearfix"></div>

            
            @if(! Auth::check())
		    <section id="login-outer">
    <div id="logreg-forms">

        <button style="padding: 5px" type="button" class="close" id="closebtn" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <form action="/login" method="POST" class="form-signin">
                    {{ csrf_field() }}
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i>
                        Sign in with Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i>
                        Sign in with Google+</span> </button>
            </div>
            <p style="text-align:center"> OR </p>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">

            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            <a href="#" id="forgot_pswd">Forgot password?</a>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i>
                Sign up New Account</button>
        </form>

        <form action="/reset/password/" class="form-reset">
            {{ csrf_field() }}
            <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required=""
                autofocus="">
            <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
            <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
        </form>

        <form action="/register" method="POST" class="form-signup" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i>
                        Sign up with Facebook</span> </button>
            </div>
            <div class="social-login">
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i>
                        Sign up with Google+</span> </button>
            </div>

            <p style="text-align:center">OR</p>

            <input type="text" id="name" name="name" class="form-control" placeholder="Full name" required="" autofocus="">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required
                autofocus="">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required autofocus="">
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Repeat Password" required autofocus="">

            <label>Gender : </label>
            <div class="radio">
                    <label for="male">
                      <input type="radio" name="gender" id="male" value="male" checked>
                      male
                    </label>
            </div>
            <div class="radio">
                    <label for="female">
                      <input type="radio" name="gender" id="female" value="female">
                      female
                    </label>
            </div>
            
            <label>Role : </label>
            <div class="radio">
                    <label for="user">
                      <input type="radio" name="role" id="user" value="user" checked>
                      User
                    </label>
            </div>
            <div class="radio">
                    <label for="company">
                      <input type="radio" name="role" id="company" value="company">
                      Company
                    </label>
            </div>

            <input type="text" id="phone" name="phone" class="form-control" placeholder="phone number" required autofocus="">
            <label for="date">Date of birth </label><input id="date" type="date" class="form-control" name="birthdate" value="{{old('birthdate')}}">
            <label>Profile picture :</label><input type="file" class="form-control" name="user_image" >                        
             
            <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
            <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
        </form>
        <br>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    
    
</section>
@endif

