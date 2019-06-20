@extends('index')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="assets/js/userprofile.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
  
        <div class="row">

            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked admin-menu" >
                    <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
                    <li><a href="" data-target-id="update-information"><i class="glyphicon glyphicon-lock"></i> update information</a></li>
                    <li><a href="" data-target-id="settings"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
                    <li><a href="" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                </ul>
            </div>

            <div class="col-md-9  admin-content" id="profile">

                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Photo</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-12 col-sm-12 col-md-3">
                            <a href="#" title="{{auth()->user()->name}}" class="img-thumbnail"><img src={{auth()->user()->user_image}} alt="{{auth()->user()->name}}" /></a>
                        </div>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Name</h3>
                    </div>
                    <div class="panel-body">
                        {{auth()->user()->name}}
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Email</h3>
                    </div>
                    <div class="panel-body">
                        {{auth()->user()->email}}  {{-- ashishpatel0720@gmail.com --}}
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Phone Number</h3>
                    </div>
                    <div class="panel-body">
                        {{auth()->user()->phone}}
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Date of birth</h3>
                    </div>
                    <div class="panel-body">
                        {{auth()->user()->birthdate}}
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Gender</h3>
                    </div>
                    <div class="panel-body">
                        {{auth()->user()->gender}}
                    </div>
                </div>

            </div>
   <div class="col-md-9  admin-content" id="settings">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Notification</h3>
                    </div>
                    <div class="panel-body">
                        <div class="label label-success">allowed</div>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Newsletter</h3>
                    </div>
                    <div class="panel-body">
                        <div class="badge">Monthly</div>
                    </div>
                </div>
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin</h3>

                    </div>
                    <div class="panel-body">
                         <div class="label label-success">yes</div>
                    </div>
                </div>

            </div>

            <div class="col-md-9  admin-content" id="update-information">
                <form action="/update_user_info" method="post"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-body">
                            <div class="form-group">
                                
                                    <div class="col-xs-12 col-sm-12 col-md-3">
                                        <a href="#" title="{{auth()->user()->name}}" class="thumbnail"><img src={{auth()->user()->user_image}} alt="{{auth()->user()->name}}" /></a>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="user_image" class="control-label panel-title">Chang your profile picture</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="user_image" value={{auth()->user()->user_image}}>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="name" class="control-label panel-title">Chang your name</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" id="name" value={{auth()->user()->name}}  autofocus="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="email" class="control-label panel-title">Chang your Email</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" id="email" value={{auth()->user()->email}} >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="password" class="control-label panel-title">Chang your password</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" id="password" value={{auth()->user()->password }} autofocus="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="gender" class="control-label panel-title">Chang your Gender</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <label for="male" value={{auth()->user()->gender}}>
                                          <input type="radio" name="gender" id="male" value="male" >
                                          male
                                        </label>
                                </div>
                                <div class="radio">
                                        <label for="female">
                                          <input type="radio" name="gender" id="female" value="female">
                                          female
                                        </label>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="phone" class="control-label panel-title">Chang your Phone number</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="phone" id="phone" value={{auth()->user()->phone}}  autofocus="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="birthdate" class="control-label panel-title">Chang your Birth Date</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input id="date" type="date" class="form-control" name="birthdate" value={{auth()->user()->birthdate}} >
                                </div>
                            </div>
                        </div>
                    </div>
                    

           
                    <div class="panel panel-info border" style="margin: 1em;">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="pull-left">
                                    <input type="submit" class="form-control btn btn-primary" name="submit" id="submit">
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{-- for the session messages --}}
                @if (session()->has('message'))
                <div class="alert alert-success" role="alert">{{session()->get('message')}}</div>
                @endif
            </div>

            <div class="col-md-9  admin-content" id="settings"></div>

            <div class="col-md-9  admin-content" id="logout">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Confirm Logout</h3>
                    </div>
                    <div class="panel-body">
                        Do you really want to logout ?  
                        <a href="#" class="label label-danger"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <span >   Yes  </span>
                           <a href= "{{ url('/logout') }}" ></a>
                            
                        </a>    
                        <a 
                        onclick="event.preventDefault();
                        document.getElementById('notlogout-form').submit();"
                        href="/login" class="label label-success"> <span >  No   </span><a  href= "{{ url('/login') }}"></a></a>
                    </div>
                    <form id="logout-form" action="/logout" method="get" style="display: none;"></form>
                    <form id="notlogout-form" action="/login" method="get" style="display: none;"></form>



                </div>
            </div>
        </div>
</div>


@endsection