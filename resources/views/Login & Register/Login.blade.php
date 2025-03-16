@extends('Layouts.LoginLayout')

@section('title', 'เข้าสู่ระบบบ้านเป็ด.com')

@section('CssPage')
    <link rel="stylesheet" href="{{ asset('Css_Layouts/Login.css') }}">
@endsection



@section('content')
    <div class="login-screen mt-5">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h5><i class="fa-solid fa-square-pen"></i> เข้าสู่ระบบ บ้านเป็ด.com</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('LoginCheck') }}">
                    @csrf
                    <div class="form-group m-3">
                        <label for="email"> <i class="fa-solid fa-user"></i> อีเมล</label>
                        <input type="email" class="form-control mt-3" name="email" id="email" placeholder="อีเมล">
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                <small class="text-danger">{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group m-3">
                        <label for="password"> <i class="fa-solid fa-lock"></i> รหัสผ่าน</label>
                        <input type="password" class="form-control mt-3" name="password" id="password"
                            placeholder="รหัสผ่าน">
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                <small class="text-danger">{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                    <div class="form-check m-3">
                        <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">จดจำฉัน</label>
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <a href="#">สมัครสมาชิก </a>
            </div>
        </div>
    </div>
@endsection
