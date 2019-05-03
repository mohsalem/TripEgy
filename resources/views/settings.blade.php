@extends('index')
@section('content')
<h1 class="title">الإعدادات</h1>


 <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-8 col-md-offset-2">

            {{-- for the session messages --}}
            @if (session()->has('message'))
            <div class="alert alert-success" role="alert">{{session()->get('message')}}</div>
            @endif
            {{-- for the validation errors --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <h1 class="text-center login-title"> تعديل البيانات الشخصية </h1>
            <div class="account-wall" style="text-align:center;">
                <img class="profile-img" src="{{auth()->user()->user_image}}" alt="login image">
                <h4 style="margin-bottom:2em;">{{auth()->user()->name}}</h4>
                <div class="settings-inputs col-xs-offset-1 col-md-offset-4">
                    <label>الصورة الشخصية : </label>
                    <form class="form-inline" action="settings/{{auth()->user()->id}}" method="POST" enctype="multipart/form-data">
                        <input type="file" style="display:inline-block" class="form-control" name="user_image">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <button type="submit" class="btn btn-info">تغيير <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    </form>
                    
                    <label>إسم المستخدم : </label>
                    <form class="form-inline" action="settings/{{auth()->user()->id}}" method="POST">
                        <input type="text" style="display:inline-block" class="form-control" name="name" value="{{auth()->user()->name}}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <button type="submit" class="btn btn-info">تغيير <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    </form>
                    <label>البريد الإلكتروني : </label>
                    <form class="form-inline" action="settings/{{auth()->user()->id}}" method="POST">
                        <input type="text" class="form-control" name="email" value="{{auth()->user()->email}}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <button type="submit" class="btn btn-info">تغيير <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    </form>
                    <label>كلمة السر : </label>
                    <form class="form-inline" action="settings/{{auth()->user()->id}}" method="POST">
                        <input type="password" class="form-control" name="password">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <button type="submit" class="btn btn-info">تغيير <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    </form>
                    <label>رقم الهاتف : </label>
                    <form class="form-inline" action="settings/{{auth()->user()->id}}" method="POST">
                        <input type="text" class="form-control" name="phone" value="{{auth()->user()->phone}}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <button type="submit" class="btn btn-info">تغيير <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    </form>
                    <label>تاريخ الميلاد : </label>
                    <form class="form-inline" action="settings/{{auth()->user()->id}}" method="POST">
                        <input type="date" class="form-control" name="birthdate" value="{{auth()->user()->birthdate}}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <button type="submit" class="btn btn-info">تغيير <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    </form>
                    <hr>
                    <form  action="users/{{auth()->user()->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" type="submit"> حذف حسابي نهائيا <i class="fa fa-trash" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


