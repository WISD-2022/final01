@extends('layouts.master')
@section('title', '美甲預約網站')
@section('page-content')
    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if (exist) {
            alert(msg);
        }
    </script>
    <!-- Page Content-->
    <div class="container px-4 px-lg-5">
        <!-- Heading Row-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/nail.svg" alt="..."/>
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">美甲預約</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <!-- <div class="divider-custom-icon"><i class="fas fa-star"></i></div>-->
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">營業時間</p>
                <h2 class="page-section-heading text-center text-uppercase text-white">
                    <p>星期一 10:00~21:00</p>
                    <p>星期二 10:00~21:00</p>
                    <p>星期四 10:00~21:00</p>
                    <p>星期五 10:00~21:00</p>
                    <p>星期六 10:00~17:00</p>
                </h2>
            </div>
        </header>
        <!-- Call to Action-->
        <!--<div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body"><p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p></div>
        </div>-->
        <!-- Content Row-->
        <div class="container">
            <!-- About Section Heading-->
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>

                <div class="divider-custom-line"></div>
            </div>
        </div>
    </div>

@endsection
