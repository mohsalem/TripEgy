@extends('index')
@section('content')

<div class="container-fuild">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
    
                <div class="card hovercard">
                    <div class="cardheader">
    
                    </div>
                    <div class="avatar">
                        <img alt="" src="{{$user->user_image}}">
                    </div>
                    <div class="info">
                        <div class="title">
                         {{$user->name}}
                        </div>
                        <div class="desc">{{$user->account_type}}</div>
                        <div class="desc">تاريخ التسجيل : {{$user->created_at}} </div>
                        <div class="desc">النوع : {{$user->gender}}</div>
                        <div class="desc">تاريخ الميلاد :  {{$user->birthdate}}</div>
                    </div>
                    <div class="bottom">
                        <a href="../CreateMessage/{{$user->id}}" class="btn btn-primary"> إرسال رسالة <i class="fa fa-paper-plane"></i></a>
                    </div>
                </div>
    
            </div>
    
        </div>
    </div>

      
@endsection
