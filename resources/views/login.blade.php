@extends('index')
@section('content')

 <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
                <h1 class="text-center login-title">تسجيل الدخول</h1>
                <div class="account-wall">
                    <img class="profile-img" src="imgs/login.png"
                        alt="login image">
                    <form action="/login" method="POST" class="form-signin">
                        <input type="text" class="form-control" name="email" autofocus value="{{old('email')}}" placeholder="البريد الإلكتروني">
                        <input type="password" class="form-control" name="password" value="{{old('password')}}" placeholder="كلمة المرور">
                         {{ csrf_field() }}
                        <button class="btn btn-lg btn-block" type="submit">تسجيل الدخول</button>
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
