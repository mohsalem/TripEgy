
@extends('index')
@section('content')




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
                    <form action="/search_event" method="POST">
                        @csrf
                        <input type="text" name="user_input" placeholder="Ex: london, newyork, rome" />                    
                    <div class="welcome-hero-form-icon">
                        <i class="flaticon-gps-fixed-indicator"></i>
                    </div>
                </div>
            </div>
            <div class="welcome-hero-serch">
                <button class="welcome-hero-btn"  type="submit" onclick=" "> 
                    search <i data-feather="search"></i>
                </button>
            </form>
            </div>
        </div>
    </div>
{{-- for the session messages --}}
@if (session()->has('message'))
<div class="alert alert-success" role="alert">{{session()->get('message')}}</div>
@endif
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
                @foreach ($array1 as $item)
            <div class="row">
                <div class=" col-md-4 col-sm-6">
                    <div class="single-explore-item">
                        <div class="single-explore-img">
                            <img src="{{$item->photo}}" alt="{{$item->name}}" style="width:400px;height:300px">
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
                            <h3><a href="#">{{$item->name}}</a></h3>
                            <br>
                                {{-- <a href="#"> 10 ratings</a> --}}
                                <ul class="meta-search">
                                        <li><a href="/map/{{$item->location_name}}"><i class="glyphicon glyphicon-map-marker danger"></i><strong class="text-danger"> location</strong><span> {{$item->location}} </span></a></li>
                                        <li><i class="glyphicon glyphicon-calendar danger"></i><strong class="text-danger"> From </strong><span>{{$item->from}}</span></li>
                                        <li><i class="glyphicon glyphicon-calendar danger"></i><strong class="text-danger"> To </strong><span>{{$item->to}} </span></li>
                                        <li><i class="glyphicon glyphicon-calendar danger"></i><strong class="text-danger"> Deadline </strong><span>{{$item->deadline_date}} </span></li>
                                        <li><i class="glyphicon glyphicon-user danger"></i><strong class="text-danger"> maximum travellers</strong><span> {{$item->max_bookings}} </span></li>
                                    </ul>
                            </p>
                            <div class="explore-person">
                                <div class="row">
                                    {{-- <div class="col-sm-2">
                                        <div class="explore-person-img">
                                            <a href="#">
                                                <img src="assets/images/explore/person.png" alt="explore person">
                                            </a>
                                        </div>
                                    </div> --}}
                                    <div class="explore-open-close-part">
                                    <div class="col-sm-10">
                                        <p>
                                            <strong class="text-danger"><B>Event Description : </B></strong><span> {{$item->description}} </span>
                                            {{-- <B>Event Description: </B>{{$item->description}} --}}
                                        </p>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="explore-open-close-part">
                                <div class="row">
                                    <div class="col-sm-5">
                                    <a>
                                        {{-- <button class="close-btn" onclick="window.location.href='#'">Book now</button> --}}
                                        <form action="/book_event" method="POST">	
                                            @csrf
                                            <input type="hidden" name="id" value="{{$item->id}}">
                                            <button type="submit" class="btn close-btn">Book now</button>
                                        </form>				
                                    </a> 
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
                        @endforeach
</section>
<!--/.explore-->
<!--explore end -->

<!--reviews start -->
<section id="reviews" class="reviews">
    <div class="section-header">
        <h2>Travellers Reviews</h2>
        <p>What our Travellers say about events</p>
    </div>
    <!--/.section-header-->
    <div class="reviews-content">
        {{-- {{dd($item)}} --}}
        <div class="testimonial-carousel">
                @foreach ($reviews as $item)
                <div class="single-testimonial-box">
                    <div class="testimonial-description">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="{{$item->user_image}}" alt="{{$item->name}}"style='height:80px;width:80px;border-radius:50%'>
                            </div>
                            <!--/.testimonial-img-->
                            <div class="testimonial-person">
                                <h2>{{$item->name}}</h2>
                                <h4>{{$item->gender}} , EGY</h4>
                                <div class="testimonial-person-star">
                                    @if($item->stars > 0)
                                    <i class="fa fa-star"></i>
                                    @endif
                                    @if($item->stars > 1)
                                    <i class="fa fa-star"></i>
                                    @endif
                                    @if($item->stars > 2)
                                    <i class="fa fa-star"></i>
                                    @endif
                                    @if($item->stars > 3)
                                    <i class="fa fa-star"></i>
                                    @endif
                                    @if($item->stars > 4)
                                    <i class="fa fa-star"></i>
                                    @endif
                                </div>
                            </div>
                            <!--/.testimonial-person-->
                        </div>
                        <!--/.testimonial-info-->
                        <div class="testimonial-comment">
                            <p>
                                 Review :{{$item->review}}
                            </p>
                        </div>
                        <!--/.testimonial-comment-->
                    </div>
                    <!--/.testimonial-description-->
                </div>

                @endforeach
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