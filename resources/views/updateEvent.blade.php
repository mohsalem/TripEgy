@extends('index')
@section('content')




<form action="/update_event" method="post"  enctype="multipart/form-data">
    
    {{ csrf_field() }}
<input type="hidden" name="id" value="{{$event->id}}">
    
    <div class="row">
        <div class="col-md-3"></div>
          <div  class="panel panel-info col-md-6  panel-heading" > <h1 ><B>          update Event</B></h1></div>
        </div>
    </div>
    
    <div class="row">
      <div class="col-md-3"></div>
      <div class="panel panel-info col-md-6" >
        <div class="panel-heading">
              <h3 class="panel-title"><label for="user_image" class="control-label panel-title"> Update Event picture</label></h3>
          </div>
          <div class="panel-body">
              <div class="form-group">
                  <div class="col-sm-10">
                      <input type="file" class="form-control" name="photo" id="photo">
                      <img src="{{$event->photo}}" class="w3-circle" alt="{{$event->name}}">
                      
                    </div>
              </div>
            </div>
          </div> 
          <div class="col-md-3"></div>
        </div> 
        <div class="row">
            <div class="col-md-3"></div>
      <div class="panel panel-info col-md-6" >
          <div class="panel-heading">
              <h3 class="panel-title"><label for="name" class="control-label panel-title">Update Event name</label></h3>
          </div>
          <div class="panel-body">
              <div class="form-group">
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" id="name" value="{{$event->name}}">
                  </div>
              </div>
          </div>
      </div>
      </div>
      <div class="row">
          <div class="col-md-3"></div>
      <div class="panel panel-info col-md-6" >
          <div class="panel-heading">
              <h3 class="panel-title"><label for="name" class="control-label panel-title">Update Event Category</label></h3>
          </div>
          <div class="panel-body">
              <div class="form-group">
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="category" id="name" value="{{$event->category}}">
                  </div>
              </div>
          </div>
      </div>
      </div>
      <div class="row">
          <div class="col-md-3"></div>
      <div class="panel panel-info col-md-6" >
          <div class="panel-heading">
              <h3 class="panel-title"><label for="description" class="control-label panel-title">Update Event description</label></h3>
          </div>
          <div class="panel-body">
              <div class="form-group">
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="description" id="description"  value="{{$event->description}}" >
                  </div>
              </div>
          </div>
      </div>
      </div>
      <div class="row">
          <div class="col-md-3"></div>
      <div class="panel panel-info col-md-6" >
          <div class="panel-heading">
              <h3 class="panel-title"><label for="from" class="control-label panel-title">Update Start Time For Event </label></h3>
          </div>
          <div class="panel-body">
              <div class="form-group">
                  <div class="col-sm-10">
                      <input type="date" class="form-control" name="from" id="from"  value="{{$event->from}}">
                  </div>
              </div>
          </div>
      </div>
      </div>
      <div class="row">
          <div class="col-md-3"></div>
      <div class="panel panel-info col-md-6" >
          <div class="panel-heading">
              <h3 class="panel-title"><label for="to" class="control-label panel-title">Update End Time For Event </label></h3>
          </div>
          <div class="panel-body">
              <div class="form-group">
                  <div class="col-sm-10">
                      <input type="date" class="form-control" name="to"  id="to" value="{{$event->to}}">
                  </div>
              </div>
          </div>
      </div>
      </div>
      <div class="row">
          <div class="col-md-3"></div>
      <div class="panel panel-info col-md-6" >
          <div class="panel-heading">
              <h3 class="panel-title"><label for="deadline_date" class="control-label panel-title">Update Deadline Date For Event </label></h3>
          </div>
          <div class="panel-body">
              <div class="form-group">
                  <div class="col-sm-10">
                      <input type="date" class="form-control" name="deadline_date"  id="deadline_date" value="{{$event->deadline_date}}" >
                  </div>
              </div>
          </div>
      </div>
      </div>
      <div class="row">
          <div class="col-md-3"></div>
      <div class="panel panel-info col-md-6" >
          <div class="panel-heading">
              <h3 class="panel-title"><label for="location" class="control-label panel-title">Update location for Event</label></h3>
          </div>
          <div class="panel-body">
              <div class="form-group">
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="location"  id="location" value="{{$event->location}}">
                  </div>
              </div>
          </div>
      </div>
      </div>
      <div class="row">
          <div class="col-md-3"></div>
      <div class="panel panel-info col-md-6" >
          <div class="panel-heading">
              <h3 class="panel-title"><label for="birthdate" class="control-label panel-title">Update location name for Event</label></h3>
          </div>
          <div class="panel-body">
              <div class="form-group">
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="location_name" id="location_name" value="{{$event->location_name}}" >
                  </div>
              </div>
          </div>
      </div>
      </div>
      <div class="row">
          <div class="col-md-3"></div>
      <div class="panel panel-info col-md-6" >
          <div class="panel-heading">
              <h3 class="panel-title"><label for="facility" class="control-label panel-title">Update facility of Event</label></h3>
          </div>
          <div class="panel-body">
              <div class="form-group">
                  <div class="col-sm-10">
                      <input type="text" class="form-control" name="facility"  id="facility" value="{{$event->facility}}">
                  </div>
              </div>
          </div>
      </div>
      </div>
      <div class="row">
          <div class="col-md-3"></div>
      <div class="panel panel-info col-md-6" >
          <div class="panel-heading">
              <h3 class="panel-title"><label for="max_bookings" class="control-label panel-title">Update maximum number of travellers</label></h3>
          </div>
          <div class="panel-body">
              <div class="form-group">
                  <div class="col-sm-10">
                      <input type="" class="form-control" name="max_bookings"  id="max_bookings" value="{{$event->max_bookings}}" >
                  </div>
              </div>
          </div>
      </div>
      </div>
      <div class="row">
          <div class="col-md-3"></div>
      <div class=" col-md-6 border" >
          
              <div class="form-group">
                  <div class=" ">
                      <input type="submit" class="form-control btn btn-primary" name="submit" id="submit">
                  </div>
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

























@endsection