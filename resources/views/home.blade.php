@extends('index')
@section('content')

<div class="cover">
    @if (session()->has('message'))
    <div class="alert alert-success" style="text-align:center" role="alert">{{session()->get('message')}}</div>
    @endif
    <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12 col-sm-12">
            <p>Welcome to #VDUBZUAE , the leading Volkswagen Enthusiast club in the UAE. With over 200 members and supporting organizer for the famous Dub Drive GCC annual event. </p>
            <p>Use this website to know more about our events and to join the club!</p>
          </div>
          <div class="col-md-6 col-xs-12 col-sm-12">
                <img src="/imgs/homeimg.jpg" alt="home vdubzuae" class="img-thumbnail">
          </div>
        </div>
    </div>
</div>
      
@endsection
