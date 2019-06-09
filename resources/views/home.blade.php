
@extends('index')
@section('content')
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





<!--welcome-hero start -->
<section id="home" class="welcome-hero">
    <div class="container">
        <div class="welcome-hero-txt">
            <h2>best place to find and explore <br> that all you need </h2>
            <p>
                Find Best Place, Mood, Prices, and many more think in just One click
            </p>
        </div>
        <div class="welcome-hero-serch-box">
            <div class="welcome-hero-form">

                <div class="single-welcome-hero-form">
                    <h3>location</h3>
                    <form action="index.html">
                        <input type="text" placeholder="Ex: london, newyork, rome" />
                    </form>
                    <div class="welcome-hero-form-icon">
                        <i class="flaticon-gps-fixed-indicator"></i>
                    </div>
                </div>
            </div>
            <div class="welcome-hero-serch">
                <button class="welcome-hero-btn" onclick="window.location.href='#'">
                    search <i data-feather="search"></i>
                </button>
            </div>
        </div>
    </div>

</section>
<!--/.welcome-hero-->
<!--welcome-hero end -->

<!--list-topics start -->
<section id="list-topics" class="list-topics">
    <div class="container">
        <div class="list-topics-content">
            <ul>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-restaurant"></i>
                        </div>
                        <h2><a href="#">Honey moon</a></h2>
                        <p>150 listings</p>
                    </div>
                </li>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-travel"></i>
                        </div>
                        <h2><a href="#">Adventure</a></h2>
                        <p>214 listings</p>
                    </div>
                </li>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-building"></i>
                        </div>
                        <h2><a href="#"></a>Cultural</h2>
                        <p>185 listings</p>
                    </div>
                </li>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-pills"></i>
                        </div>
                        <h2><a href="#">Meditation</a></h2>
                        <p>200 listings</p>
                    </div>
                </li>
                <li>
                    <div class="single-list-topics-content">
                        <div class="single-list-topics-icon">
                            <i class="flaticon-transport"></i>
                        </div>
                        <h2><a href="#">Discovery</a></h2>
                        <p>120 listings</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--/.container-->

</section>
<!--/.list-topics-->
<!--list-topics end-->

<!--works start -->
<section id="works" class="works">
    <div class="container">
        <div class="section-header">
            <h2>how it works</h2>
            <p>Learn More about how our website works</p>
        </div>
        <!--/.section-header-->
        <div class="works-content">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-how-works">
                        <div class="single-how-works-icon">
                            <i class="flaticon-lightbulb-idea"></i>
                        </div>
                        <h2><a href="#">choose <span> what to</span> do</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt
                            ut laboremagna aliqua.
                        </p>
                        <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                            read more
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-how-works">
                        <div class="single-how-works-icon">
                            <i class="flaticon-networking"></i>
                        </div>
                        <h2><a href="#">find <span> what you want</span></a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt
                            ut laboremagna aliqua.
                        </p>
                        <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                            read more
                        </button>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-how-works">
                        <div class="single-how-works-icon">
                            <i class="flaticon-location-on-road"></i>
                        </div>
                        <h2><a href="#">Book <span> your</span> trip</a></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt
                            ut laboremagna aliqua.
                        </p>
                        <button class="welcome-hero-btn how-work-btn" onclick="window.location.href='#'">
                            read more
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.container-->

</section>
<!--/.works-->
<!--works end -->

<!--explore start -->
<section id="explore" class="explore">
    <div class="container">
        <div class="section-header">
            <h2>explore</h2>
            <p>Explore New place, food, culture around the world and many more</p>
        </div>
        <!--/.section-header-->
        <div class="explore-content">
            <div class="row">
                <div class=" col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="assets/images/explore/e1.jpg" alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">best rated</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-1">
                            <h2><a href="#">tommy helfinger bar</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">5.0</span>
                                <a href="#"> 10 ratings</a>
                                <span class="explore-price-box">
                                    form
                                    <span class="explore-price">5$-300$</span>
                                </span>
                                <a href="#">resturent</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="assets/images/explore/person.png" alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incid ut labore et dolore magna aliqua....
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn" onclick="window.location.href='#'">close
                                            now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="assets/images/explore/e2.jpg" alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">featured</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-2">
                            <h2><a href="#">swim and dine resort</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">4.5</span>
                                <a href="#"> 8 ratings</a>
                                <span class="explore-price-box">
                                    form
                                    <span class="explore-price">50$-500$</span>
                                </span>
                                <a href="#">hotel</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="assets/images/explore/person.png" alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incid ut labore et dolore magna aliqua....
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn open-btn" onclick="window.location.href='#'">open
                                            now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="assets/images/explore/e3.jpg" alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">best rated</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-3">
                            <h2><a href="#">europe tour</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">5.0</span>
                                <a href="#"> 15 ratings</a>
                                <span class="explore-price-box">
                                    form
                                    <span class="explore-price">5k$-10k$</span>
                                </span>
                                <a href="#">destination</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="assets/images/explore/person.png" alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incid ut labore et dolore magna aliqua....
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn" onclick="window.location.href='#'">close
                                            now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="assets/images/explore/e4.jpg" alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">most view</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-4">
                            <h2><a href="#">banglow with swiming pool</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">5.0</span>
                                <a href="#"> 10 ratings</a>
                                <span class="explore-price-box">
                                    form
                                    <span class="explore-price">10k$-15k$</span>
                                </span>
                                <a href="#">real estate</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="assets/images/explore/person.png" alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incid ut labore et dolore magna aliqua....
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn" onclick="window.location.href='#'">close
                                            now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="assets/images/explore/e5.jpg" alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">featured</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-2">
                            <h2><a href="#">vintage car expo</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">4.2</span>
                                <a href="#"> 8 ratings</a>
                                <span class="explore-price-box">
                                    form
                                    <span class="explore-price">500$-1200$</span>
                                </span>
                                <a href="#">automotion</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="assets/images/explore/person.png" alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incid ut labore et dolore magna aliqua....
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn open-btn" onclick="window.location.href='#'">open
                                            now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="assets/images/explore/e6.jpg" alt="explore image">
                            <div class="single-explore-img-info">
                                <button onclick="window.location.href='#'">best rated</button>
                                <div class="single-explore-image-icon-box">
                                    <ul>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-arrows-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-explore-image-icon">
                                                <i class="fa fa-bookmark-o"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-explore-txt bg-theme-5">
                            <h2><a href="#">thailand tour</a></h2>
                            <p class="explore-rating-price">
                                <span class="explore-rating">5.0</span>
                                <a href="#"> 15 ratings</a>
                                <span class="explore-price-box">
                                    form
                                    <span class="explore-price">5k$-10k$</span>
                                </span>
                                <a href="#">destination</a>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="assets/images/explore/person.png" alt="explore person">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-10">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incid ut labore et dolore magna aliqua....
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <button class="close-btn" onclick="window.location.href='#'">close
                                            now</button>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="explore-map-icon">
                                            <a href="#"><i data-feather="map-pin"></i></a>
                                            <a href="#"><i data-feather="upload"></i></a>
                                            <a href="#"><i data-feather="heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.container-->

</section>
<!--/.explore-->
<!--explore end -->

<!--reviews start -->
<section id="reviews" class="reviews">
    <div class="section-header">
        <h2>clients reviews</h2>
        <p>What our client say about us</p>
    </div>
    <!--/.section-header-->
    <div class="reviews-content">
        <div class="testimonial-carousel">
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="assets/images/clients/c1.png" alt="clients">
                        </div>
                        <!--/.testimonial-img-->
                        <div class="testimonial-person">
                            <h2>Tom Leakar</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <!--/.testimonial-person-->
                    </div>
                    <!--/.testimonial-info-->
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                    <!--/.testimonial-comment-->
                </div>
                <!--/.testimonial-description-->
            </div>
            <!--/.single-testimonial-box-->
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="assets/images/clients/c2.png" alt="clients">
                        </div>
                        <!--/.testimonial-img-->
                        <div class="testimonial-person">
                            <h2>monirul islam</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <!--/.testimonial-person-->
                    </div>
                    <!--/.testimonial-info-->
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                    <!--/.testimonial-comment-->
                </div>
                <!--/.testimonial-description-->
            </div>
            <!--/.single-testimonial-box-->
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="assets/images/clients/c3.png" alt="clients">
                        </div>
                        <!--/.testimonial-img-->
                        <div class="testimonial-person">
                            <h2>Shohrab Hossain</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <!--/.testimonial-person-->
                    </div>
                    <!--/.testimonial-info-->
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                    <!--/.testimonial-comment-->
                </div>
                <!--/.testimonial-description-->
            </div>
            <!--/.single-testimonial-box-->
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="assets/images/clients/c4.png" alt="clients">
                        </div>
                        <!--/.testimonial-img-->
                        <div class="testimonial-person">
                            <h2>Tom Leakar</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <!--/.testimonial-person-->
                    </div>
                    <!--/.testimonial-info-->
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                    <!--/.testimonial-comment-->
                </div>
                <!--/.testimonial-description-->
            </div>
            <!--/.single-testimonial-box-->
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="assets/images/clients/c1.png" alt="clients">
                        </div>
                        <!--/.testimonial-img-->
                        <div class="testimonial-person">
                            <h2>Tom Leakar</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <!--/.testimonial-person-->
                    </div>
                    <!--/.testimonial-info-->
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                    <!--/.testimonial-comment-->
                </div>
                <!--/.testimonial-description-->
            </div>
            <!--/.single-testimonial-box-->
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="assets/images/clients/c2.png" alt="clients">
                        </div>
                        <!--/.testimonial-img-->
                        <div class="testimonial-person">
                            <h2>monirul islam</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <!--/.testimonial-person-->
                    </div>
                    <!--/.testimonial-info-->
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                    <!--/.testimonial-comment-->
                </div>
                <!--/.testimonial-description-->
            </div>
            <!--/.single-testimonial-box-->
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="assets/images/clients/c3.png" alt="clients">
                        </div>
                        <!--/.testimonial-img-->
                        <div class="testimonial-person">
                            <h2>Shohrab Hossain</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <!--/.testimonial-person-->
                    </div>
                    <!--/.testimonial-info-->
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                    <!--/.testimonial-comment-->
                </div>
                <!--/.testimonial-description-->
            </div>
            <!--/.single-testimonial-box-->
            <div class="single-testimonial-box">
                <div class="testimonial-description">
                    <div class="testimonial-info">
                        <div class="testimonial-img">
                            <img src="assets/images/clients/c4.png" alt="clients">
                        </div>
                        <!--/.testimonial-img-->
                        <div class="testimonial-person">
                            <h2>Tom Leakar</h2>
                            <h4>london, UK</h4>
                            <div class="testimonial-person-star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <!--/.testimonial-person-->
                    </div>
                    <!--/.testimonial-info-->
                    <div class="testimonial-comment">
                        <p>
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis eaque.
                        </p>
                    </div>
                    <!--/.testimonial-comment-->
                </div>
                <!--/.testimonial-description-->
            </div>
            <!--/.single-testimonial-box-->
        </div>
    </div>

</section>
<!--/.reviews-->
<!--reviews end -->

<!-- statistics strat -->

<!-- statistics end -->

<!--blog start -->

<!--blog end -->

<!--subscription strat -->
<section id="contact" class="subscription">
    <div class="container">
        <div class="subscribe-title text-center">
            <h2>
                do you want to add your business listing with us?
            </h2>
            <p>
                Listrace offer you to list your business with us and we very much able to promote your Business.
            </p>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="subscription-input-group">
                    <form action="#">
                        <input type="email" class="subscription-input-form" placeholder="Enter your email here">
                        <button class="appsLand-btn subscribe-btn" onclick="window.location.href='#'">
                            creat account
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<!--/subscription-->
<!--subscription end -->


@endsection