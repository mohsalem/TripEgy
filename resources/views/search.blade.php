@extends('index')
@section('content')



<!------here goes search filter section ------->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
	.section {
    position: relative;
    
}
.section-inverse-color {
    background-image: url('https://www.helpr.in/images/backgrounds/section-dark-bg.png');
    background-color: #222222;
    color: #5a5a5a;
}
.helpr-section {
    height: 100%;
    background: #655f58 url('https://www.helpr.in/images/backgrounds/helpr-bg1.jpg');
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
}
.helpr-text {
    height: 575px;
}
.webHomeTitle {
    display: block;
}
.home-service {
    width: 600px;
    margin: 40px auto 100px auto;
    border-radius: 8px;
    background: #fff;
    -webkit-box-shadow: 0 4px 8px rgba(2,2,2,0.14);
    -moz-box-shadow: 0 4px 8px rgba(2,2,2,0.14);
    box-shadow: 0 4px 8px rgba(2,2,2,0.14);
    position: relative;
    height: 65px;
}
.wrapper-demo1 {
    width: 200px;
    float: left;
    position: relative;
    margin: 11px 0 0 15px;
}
.wrapper-dropdown-3 {
    position: absolute;
    width: 200px;
    margin: 0 auto;
    padding: 7px 10px 7px 30px;
    border: 1px solid #fff;
    border-right: 1px solid #e5e5e5;
    background: #fff;
    cursor: pointer;
    outline: none;
    font-size: 20px;
    background: url(https://www.helpr.in/images/city-arw.png) no-repeat left 12px;
}
.helpr-title {
    padding: 190px 0 10px;
    font-size: 70px;
    line-height: 80px;
    -webkit-text-shadow: 0 4px 6px rgba(0,0,0,.20);
    -moz-text-shadow: 0 4px 6px rgba(0,0,0,.20);
    text-shadow: 0 4px 6px rgba(0,0,0,.20);
    font-family: 'LatoWebBlack', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    text-align: center;
    color: #ffffff;
    margin: 0;
    position: relative;
}
.helpr-content {
    position: relative;
    display: table;
    height: 100%;
    width: 100%;
}
.wrapper-dropdown-2 span.active, .wrapper-dropdown-3 span.active {
    color: #5a5a5a;
}
@media (max-width: 3000px){
    .helpr-section, .cleaning-section, .pestcontrol-section, .electrical-section, .plumbing-section, .carpentry-section, .ac-section, .geyser-section, .about-section, .career-section, .confirm-section, .contact-section, .deepcleaning-section, .appliances-section, .vehiclecare-section, .subscr-section, .platinum-section, .homespa-section, .homeguard-section, .laundry-section, .painting-section {
        margin: 0 0 0 0;
    }
    .helpr-text {
        width: 100%;
        display: block !important;
    }
    .helpr-content {
        text-align: left;
    }
}
.wrapper-demo {
    width:370px;
	float:left;
	position:relative;
	margin:11px 0 0 0px;
}

.wrapper-demo:after {
    clear: both;
    content: "";
    display: table;
}

.wrapper-demo1 {
    width:200px;
	float:left;
	position:relative;
	margin:11px 0 0 15px;
	
	
}

.wrapper-demo1:after {
    clear: both;
    content: "";
    display: table;
}
/* DEMO 2 */

.wrapper-dropdown-2 {
    /* Size and position */
    position: absolute; /* Enable absolute positionning for children and pseudo elements */
    width: 370px;
    margin: 0 auto;
    padding: 7px 20px;
	border:1px solid #fff;
    /* Styles */
    background: #fff;
    cursor: pointer;
    outline: none;
	font-size:20px;
	
	
}
.wrapper-dropdown-3 {
    /* Size and position */
    position: absolute; /* Enable absolute positionning for children and pseudo elements */
    width: 200px;
    margin: 0 auto;
    padding: 7px 10px 7px 30px;
	border:1px solid #fff;
	border-right:1px solid #e5e5e5;
    /* Styles */
    background: #fff;
    cursor: pointer;
    outline: none;
	font-size:20px;
	background:url(../images/city-arw.png) no-repeat left 12px;
	
	
}
.wrapper-dropdown-2 span.active, .wrapper-dropdown-3 span.active{
	 color: #5a5a5a;
}
.wrapper-dropdown-2:after {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    right: 16px;
    top: 50%;
    margin-top: 0px;
    border-width: 6px 6px 0 6px;
    border-style: solid;
    border-color: grey transparent;
}
.wrapper-dropdown-3:after {
    content: "";
    width: 0;
    height: 0;
    position: absolute;
    right: 16px;
    top: 50%;
    margin-top: 0px;
    border-width: 6px 6px 0 6px;
    border-style: solid;
    border-color: grey transparent;
}

.wrapper-dropdown-2 .dropdown {
  /* Size & position */
    position: absolute;
    top: 110%;
    left: -216px;
    right: 0px;

    /* Styles */
    background: #fafafa;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    list-style: none;

    /* Hiding */
    opacity: 0;
    pointer-events: none;
	margin:0;
	padding:0;
	z-index:99999;
	-webkit-box-shadow: 0 4px 8px rgba(2,2,2,0.14);
	-moz-box-shadow: 0 4px 8px rgba(2,2,2,0.14);
	box-shadow: 0 4px 8px rgba(2,2,2,0.14);
	z-index:999999 !important;
	width:600px;
	border-radius: 0px 0px 8px 8px;
}
.wrapper-dropdown-3 .dropdown {
  /* Size & position */
    position: absolute;
    top: 110%;
    left: -1px;
    right: 0px;

    /* Styles */
    background: #fafafa;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    list-style: none;

    /* Hiding */
    opacity: 0;
    pointer-events: none;
	margin:0;
	padding:0;
	z-index:99999;
	-webkit-box-shadow: 0 4px 8px rgba(2,2,2,0.14);
	-moz-box-shadow: 0 4px 8px rgba(2,2,2,0.14);
	box-shadow: 0 4px 8px rgba(2,2,2,0.14);
	z-index:999999 !important;
	
}

.wrapper-dropdown-2 .dropdown li{
	float:left;
	width:300px;
}
.wrapper-dropdown-2 .dropdown li a {
    display: block;
    text-decoration: none;
    color: #5a5a5a;
    padding: 0px 50px;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
	font-size:18px;
	line-height:50px;
	border-bottom:1px solid #e6e6e6;
	margin:0 7px;
	z-index:999999 !important;
	width:80%;
}

.wrapper-dropdown-3 .dropdown li a {
    display: block;
    text-decoration: none;
    color: #5a5a5a;
    padding: 0px 10px 0 25px;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
	font-size:18px;
	line-height:50px;
	border-bottom:1px solid #e6e6e6;
	margin:0 7px;
	z-index:999999 !important;
}


.wrapper-dropdown-2 .dropdown li i, .wrapper-dropdown-3 .dropdown li i {
    margin-right: 5px;
    color: inherit;
    vertical-align: middle;
}

/* Hover state */

.wrapper-dropdown-2 .dropdown li:hover a, .wrapper-dropdown-3 .dropdown li:hover a  {
    color: #00c6ff;
}

/* Active state */

.wrapper-dropdown-2.active:after, .wrapper-dropdown-3.active:after {
    border-width: 0 6px 6px 6px;
}

.wrapper-dropdown-2.active .dropdown,.wrapper-dropdown-3.active .dropdown {
    opacity: 1;
    pointer-events: auto;
}

/* No CSS3 support */

.no-opacity       .wrapper-dropdown-2 .dropdown,
.no-pointerevents .wrapper-dropdown-2 .dropdown,.no-opacity       .wrapper-dropdown-3 .dropdown,
.no-pointerevents .wrapper-dropdown-3 .dropdown {
    display: none;
    opacity: 1; /* If opacity support but no pointer-events support */
    pointer-events: auto; /* If pointer-events support but no pointer-events support */
}

.no-opacity       .wrapper-dropdown-2.active .dropdown,
.no-pointerevents .wrapper-dropdown-2.active .dropdown,.no-opacity       .wrapper-dropdown-3.active .dropdown,
.no-pointerevents .wrapper-dropdown-3.active .dropdown {
    display: block;
}
.icon-menu{
	background-repeat:no-repeat;
	background-size:30px 30px;
	background-position:10px center;
}
.icon-1{
	background-image:url(https://www.helpr.in/images/cleaning.png);
}
.icon-2{
	background-image:url(https://www.helpr.in/images/pest.png);
}
.icon-3{
	background-image:url(https://www.helpr.in/images/electrical.png);
}

.icon-4{
	background-image:url(https://www.helpr.in/images/plumbing.png);
}
.icon-6{
	background-image:url(https://www.helpr.in/images/carpentry.png);
}

.icon-5{
	background-image:url(https://www.helpr.in/images/appliances.png);
}

.icon-17{
	background-image:url(https://www.helpr.in/images/geyser.png);
}

.icon-15{
	background-image:url(https://www.helpr.in/images/ac.png);
}
.icon-19{
	background-image:url(https://www.helpr.in/images/vehiclecare.png);
}
.icon-20{
	background-image:url(https://www.helpr.in/images/painting.png);
}
.icon-21{
	background-image:url(https://www.helpr.in/images/laundry.png);
}
.icon-22{
	background-image:url(https://www.helpr.in/images/interiordesign.png);
}
.icon-23{
	background-image:url(https://www.helpr.in/images/automation.png);
}
.icon-24{
	background-image:url(https://www.helpr.in/images/computer_repair.png);
}
/* No CSS3 support: none */
</style>

<script>
	$(document).ready(function(){
    $(".wrapper-dropdown-3").on("click",function(){
        $(this).toggleClass("active")
    })
    $(".wrapper-dropdown-2").on("click",function(){
        $(this).toggleClass("active")
    })
})
</script>




<section id="home" class="helpr-section helpr-layout-1 section section-inverse-color" >
  <div class="container">
    <div class="helpr-content" data-stellar-offset-parent="true"> 
      
      <!-- helpr TEXT -->
      
      <div class="helpr-text" data-wow-duration="1s" data-wow-delay="0.5s"> 
        <!-- TAGLINE -->
        <div class="webHomeTitle">
          <h1 class="helpr-title">Let us help</h1>
        </div>
        <div class="home-service clearfix">
          <div class="wrapper-demo1">
            <div id="dd1" class="wrapper-dropdown-3" tabindex="1">
                                                                	<span class="active">Select City</span>
                                                                     <ul class="dropdown">
                                                                                       <li><a href="javascript:;" class="icon-menu " data-id="2" data-value="Bengaluru">Bengaluru</a></li>
                                                                                           
                                            
                                          
                                            
                                        </ul>
                                    </div>
          </div>
          <div class="wrapper-demo">
            <div id="dd" class="wrapper-dropdown-2" tabindex="1"><span>Select a Service</span>
                                        <ul class="dropdown">
						                                            <li><a href="javascript:;" class="icon-2 icon-menu" data-id="2" data-value="Pest Control">Pest Control</a></li>
                                           
					                                            <li><a href="javascript:;" class="icon-1 icon-menu" data-id="1" data-value="Cleaning">Cleaning</a></li>
                                           
					                                            <li><a href="javascript:;" class="icon-4 icon-menu" data-id="4" data-value="Plumbing">Plumbing</a></li>
                                           
					                                            <li><a href="javascript:;" class="icon-5 icon-menu" data-id="5" data-value="Appliances">Appliances</a></li>
                                           
					                                            <li><a href="javascript:;" class="icon-20 icon-menu" data-id="20" data-value="Painting">Painting</a></li>
                                           
					                                            <li><a href="javascript:;" class="icon-6 icon-menu" data-id="6" data-value="Carpentry">Carpentry</a></li>
                                           
					                                            <li><a href="javascript:;" class="icon-3 icon-menu" data-id="3" data-value="Electrical">Electrical</a></li>
                                           
					                                               </ul>
                                    </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<style type="text/css">
	@import "http://fonts.googleapis.com/css?family=Roboto:300,400,500,700";

	.container { margin-top: 20px; }
	.mb20 { margin-bottom: 20px; } 

	hgroup { padding-left: 15px; border-bottom: 1px solid #ccc; }
	hgroup h1 { font: 500 normal 1.625em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin-top: 0; line-height: 1.15; }
	hgroup h2.lead { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; color: #2a3644; margin: 0; padding-bottom: 10px; }

	.search-result .thumbnail { border-radius: 0 !important; }
	.search-result:first-child { margin-top: 0 !important; }
	.search-result { margin-top: 20px; }
	.search-result .col-md-2 { border-right: 1px dotted #ccc; min-height: 140px; }
	.search-result ul { padding-left: 0 !important; list-style: none;  }
	.search-result ul li { font: 400 normal .85em "Roboto",Arial,Verdana,sans-serif;  line-height: 30px; }
	.search-result ul li i { padding-right: 5px; }
	.search-result .col-md-7 { position: relative; }
	.search-result h3 { font: 500 normal 1.375em "Roboto",Arial,Verdana,sans-serif; margin-top: 0 !important; margin-bottom: 10px !important; }
	.search-result h3 > a, .search-result i { color: #248dc1 !important; }
	.search-result p { font: normal normal 1.125em "Roboto",Arial,Verdana,sans-serif; } 
	.search-result span.plus { position: absolute; right: 0; top: 126px; }
	.search-result span.plus a { background-color: #248dc1; padding: 5px 5px 3px 5px; }
	.search-result span.plus a:hover { background-color: #414141; }
	.search-result span.plus a i { color: #fff !important; }
	.search-result span.border { display: block; width: 97%; margin: 0 15px; border-bottom: 1px dotted #ccc; }
</style>

<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!----- here goes search results section ---> 
<div class="container">

    <hgroup class="mb20">
		<h1>Search Results</h1>
		<h2 class="lead"><strong class="text-danger">3</strong> results were found for the search for <strong class="text-danger">Lorem</strong></h2>								
	</hgroup>

    <section class="col-xs-12 col-sm-6 col-md-12">
		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/people" alt="Lorem ipsum" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span>02/15/2014</span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span>4:28 pm</span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span>People</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
				<h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix borda"></span>
		</article>

        <article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/food" alt="Lorem ipsum" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span>02/13/2014</span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span>8:32 pm</span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span>Food</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix borda"></span>
		</article>

		<article class="search-result row">
			<div class="col-xs-12 col-sm-12 col-md-3">
				<a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/sports" alt="Lorem ipsum" /></a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-2">
				<ul class="meta-search">
					<li><i class="glyphicon glyphicon-calendar"></i> <span>01/11/2014</span></li>
					<li><i class="glyphicon glyphicon-time"></i> <span>10:13 am</span></li>
					<li><i class="glyphicon glyphicon-tags"></i> <span>Sport</span></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-7">
				<h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>						
                <span class="plus"><a href="#" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
			</div>
			<span class="clearfix border"></span>
		</article>			

	</section>
</div>


@endsection