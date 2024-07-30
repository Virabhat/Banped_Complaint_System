@extends('Layouts.LoginLayout')

@section('title', 'เข้าสู่ระบบบ้านเป็ด.com')

@section('CssPage')
<link rel="stylesheet" href="{{ asset('Css_Layouts/Login.css') }}">
@endsection



@section('content')
<div class="container d-flex justify-content-center p-5">
    <div class="card border border-secondary w-75">
        <div class="card-header">
            <h4> <i class="fa-solid fa-circle-user" style="color: #74C0FC;"></i> Login &nbsp; : &nbsp;เข้าสู่ระบบ</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection