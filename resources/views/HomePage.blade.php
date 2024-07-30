@extends('Layouts.PageLayout')

@section('title', 'ระบบร้องเรียนปัญหาในชุมชน:บ้านเป็ด')

@section('CssPage')
<link rel="stylesheet" href="{{ asset('Css_Layouts/Page.css') }}">
@endsection


@section('content')

<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://scontent-sin6-3.xx.fbcdn.net/v/t39.30808-6/425677375_786212486885009_8006485030951255416_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeFbTu0DP8cXANMwPSaxgPYAumUkX2-S8OS6ZSRfb5Lw5CrD4Sm53cHVb3ssrx371OG3CAaVeiv_XMRsftEwiiD3&_nc_ohc=MUn6OTfZ0R8Q7kNvgEuNZFT&_nc_ht=scontent-sin6-3.xx&oh=00_AYAyWI9NoequmO_xudNECqhp185FTgbLceuGgh-mmePLHg&oe=66AC4CB4" alt="First slide">
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://scontent-sin6-3.xx.fbcdn.net/v/t39.30808-6/425677375_786212486885009_8006485030951255416_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeFbTu0DP8cXANMwPSaxgPYAumUkX2-S8OS6ZSRfb5Lw5CrD4Sm53cHVb3ssrx371OG3CAaVeiv_XMRsftEwiiD3&_nc_ohc=MUn6OTfZ0R8Q7kNvgEuNZFT&_nc_ht=scontent-sin6-3.xx&oh=00_AYAyWI9NoequmO_xudNECqhp185FTgbLceuGgh-mmePLHg&oe=66AC4CB4" alt="First slide">
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://scontent-sin6-3.xx.fbcdn.net/v/t39.30808-6/425677375_786212486885009_8006485030951255416_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=cc71e4&_nc_eui2=AeFbTu0DP8cXANMwPSaxgPYAumUkX2-S8OS6ZSRfb5Lw5CrD4Sm53cHVb3ssrx371OG3CAaVeiv_XMRsftEwiiD3&_nc_ohc=MUn6OTfZ0R8Q7kNvgEuNZFT&_nc_ht=scontent-sin6-3.xx&oh=00_AYAyWI9NoequmO_xudNECqhp185FTgbLceuGgh-mmePLHg&oe=66AC4CB4" alt="First slide">
            </div>
        </div>
        
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container mt-3 bg-secondary rounded p-5">
    <div class="jumbotron text-white text-center">
        <h1 class="display-4"> <i class="fa-solid fa-pen-to-square"></i> บ้านเป็ด.Com</h1>
        <p class="lead">
            ระบบร้องเรียนปัญหาในชุมชนบ้านเป็ดปัญหา
        </p>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="ค้นหา" aria-label="Search">
            <button class="btn btn-success" type="submit"><i class="fa-solid fa-magnifying-glass"
                    style="color: #FFFF;"></i></button>
        </form>
        <br>
    </div>
    <br>
</div>

@endsection