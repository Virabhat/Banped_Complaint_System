@extends('Layouts.LoginLayout')

@section('title', 'เข้าสู่ระบบบ้านเป็ด.com')

@section('CssPage')
<link rel="stylesheet" href="{{ asset('Css_Layouts/Login.css') }}">
@endsection



@section('content')
<div class="container">
    <div class="card card-form">
        <div class="card-header bg-primary text-white text-center">
            <h3> <i class="fa-solid fa-circle-user" style="color: #74C0FC;"></i> Login : เข้าสู่ระบบ</h3>
        </div>
        <div class="card-body">
            <form action="LoginCheck" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                    <label for="email"><i class="fa-solid fa-envelope" style="color: #74C0FC;"></i> : อีเมล</label>
                    <br><br>
                    <input type="email" class="form-control" id="email" name="email" placeholder="อีเมล">
                </div>
                <br>
                <div class="form-group">
                    <label for="password"><i class="fa-solid fa-lock" style="color: #74C0FC;"></i> : รหัสผ่าน</label>
                    <br><br>
                    <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน">
                </div>
                <br>
                <a href="register">ยังไม่มีบัญชี &nbsp; สมัครสมาชิก?</a>
                <br><br>
                <button type="submit" class="btn btn-primary btn-block ms-auto"> <i class="fa-solid fa-right-to-bracket"
                        style="color: #74C0FC;"></i> &nbsp; เข้าสู่ระบบ</button>
            </form>
        </div>
    </div>
</div>
@endsection