@extends('index')
@section('content')

    <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <h1 class="text-center login-title"> التسجيل </h1>
                    <div class="account-wall">
                        <img class="profile-img" src="imgs/login.png"
                            alt="login image">
                        <form action="/register" method="POST" enctype="multipart/form-data" class="form-signin">
                            <input type="text" class="form-control" name="name" value="{{old('username')}}" autofocus placeholder="اسم المستخدم">
                            <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="البريد الإلكتروني">
                            <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="كلمة المرور">
                            <input type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="تاكيد كلمة المرور">
                            <label>النوع : </label>
                            <div class="radio">
                                    <label for="male">
                                      <input type="radio" name="gender" id="male" value="ذكر" checked>
                                        ذكر
                                    </label>
                            </div>
                            <div class="radio">
                                    <label for="female">
                                      <input type="radio" name="gender" id="female" value="انثى">
                                        انثى
                                    </label>
                            </div>
                            <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder="رقم الهاتف">
                            <label for="date">تاريخ الميلاد : </label><input id="date" type="date" class="form-control" name="birthdate" value="{{old('birthdate')}}">
                            <label>الصورة الشخصية : </label><input type="file" class="form-control" name="user_image" value="{{old('user_image')}}" >                        
                             {{ csrf_field() }}
                            <button class="btn btn-lg btn-block" type="submit"> التسجيل </button>
                        </form>
    
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
    
                    </div>
                </div>
            </div>
        </div>
        






@endsection
