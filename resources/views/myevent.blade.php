@extends('index')
@section('content')
<section id="explore" class="explore">
        <div class="container">
            <div class="section-header">
                <h2>my events</h2>
                {{-- <p>Explore New place, food, culture around the world and many more</p> --}}
            </div>



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
                                <li><a href="/map/{{$item->location_name}}"><i class="glyphicon glyphicon-map-marker danger"></i><strong class="text-danger"> location</strong><span> {{$item->location}} </span> </a></li>
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
                                <form action="/cancel_event" method="POST">	
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <button type="submit" class="btn close-btn">cancel</button>
                                    {{-- <button type="submit" class="btn close-btn">cancel event</button> --}}
                                    <button  type="button" class="btn close-btn " data-toggle="modal" data-target="#myModal" onclick="getid({{$item->id}})">review us</button>
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




<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Review Event</h4>
        </div>
        <div class="modal-body">
                <table width="100%" >
                <div class="col-md-9 col-md-offset-0">
                    <tr><td width="77%">
                    <div class="">
                    <form class="form-horizontal" action="/review_event" method="POST">
                        @csrf
                    <fieldset>
                <input type="hidden" name="event_id" id="idofeventtoreview" value="">
                        {{-- <!-- photo-->
                        <div class="form-group">
                        <div class="col-md-3 control-label" for="photo"></div>
                        <div class="col-md-9">
                            <span style="margin:0!important ;padding:0!important">
                                <img style="margin:0!important ;padding:0!important" class=" explore-person-img" src="{{auth()->user()->user_image}}" >
                            </span>
                        </div>
                        </div>
                        <!-- Name -->
                        <div class="form-group">
                        <div class="col-md-3 control-label" for="name">Name</div>
                        <div class="col-md-9">
                            <div class="form-control">{{auth()->user()->name}}</div>
                        </div>
                        </div> --}}
                        <!-- Message body -->
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="message">Your review</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="message" name="review" placeholder="Please enter your feedback here..." rows="5"></textarea>
                        </div>
                        </div>
                        <!-- Rating -->
                        <div class="form-group">
                        <label class="col-md-3 control-label" for="message">Stars</label>
                        <div class="col-md-9">
                            <input id="input-21e" placeholder="0" name="stars" value="" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" >
                        </div>
                        </div>
                </td>
                <td  valign="top" width="23%">
                        <!-- Form actions -->
                        <div class="form-group">
                        <div class="col-md-12 text-center">
                            
                            
                        </div>
                        </div>
                    </fieldset>
                    
                    </div>
                </div>
                </td>
                </tr>
                </table>
        </div>
        <div class="modal-footer">
        
            <button type="submit" class="btn btn-primary btn-md">Submit</button>
            <button type="reset" class="btn btn-default btn-md">Clear</button>
        </div>
        </div>
    </form>
    </div>
    </div>


<script>
    function getid(id){
        document.getElementById('idofeventtoreview').value=id;
    }
</script>
@endsection