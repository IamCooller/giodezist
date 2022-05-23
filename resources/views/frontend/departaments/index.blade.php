@extends('layouts.main')
@section('title')   @endsection
@section('description')   @endsection
@section('keywords')  @endsection
@section('content')
<section class="MainDepartaments borderTop  bg-img-fix" style="background-image: url('img/backgorundFix/background16.svg');">
            <div class="container" data-aos="fade-down">

                <ul class="breadcrumb">
                    <li><a href="http://127.0.0.1:8000">Главная</a></li>
                    <li><span>Отделы</span></li>
                </ul>
                <div class="MainDepartaments__wrapper">
                    <div class="title">Отделы</div>
                    <div class="MainDepartaments__list">
                        <a class="MainDepartaments__list_item" href="single-departaments.html">
                            <div class="MainDepartaments__list_item-img">
                                <img src="img/gallery/1.png" alt="">
                            </div>

                            <div class="MainDepartaments__list_item-title">Отдел инженерии</div>
                        </a>
                        <a class="MainDepartaments__list_item" href="single-departaments.html">
                            <div class="MainDepartaments__list_item-img">
                                <img src="img/gallery/2.png" alt="">
                            </div>
                            <div class="MainDepartaments__list_item-title">Отдел геодезии</div>
                        </a>
                        <a class="MainDepartaments__list_item" href="single-departaments.html">
                            <div class="MainDepartaments__list_item-img">
                                <img src="img/gallery/3.png" alt="">
                            </div>
                            <div class="MainDepartaments__list_item-title">Отдел лаборатории</div>
                        </a>
                        <a class="MainDepartaments__list_item" href="single-departaments.html">
                            <div class="MainDepartaments__list_item-img">
                                <img src="img/gallery/4.png" alt="">
                            </div>
                            <div class="MainDepartaments__list_item-title">Отдел канцелярии</div>
                        </a>
                        <a class="MainDepartaments__list_item" href="single-departaments.html">
                            <div class="MainDepartaments__list_item-img">
                                <img src="img/gallery/1.png" alt="">
                            </div>
                            <div class="MainDepartaments__list_item-title">Отдел буxгалтерии</div>
                        </a>
                        <a class="MainDepartaments__list_item" href="single-departaments.html">
                            <div class="MainDepartaments__list_item-img">
                                <img src="img/gallery/3.png" alt="">
                            </div>
                            <div class="MainDepartaments__list_item-title">Отдел инженерии</div>
                        </a>
                        <a class="MainDepartaments__list_item">
                            <div class="MainDepartaments__list_item-img">
                                <img src="img/gallery/2.png" alt="">
                            </div>
                            <div class="MainDepartaments__list_item-title">Отдел инженерии</div>
                        </a>
                        <a class="MainDepartaments__list_item" href="single-departaments.html">
                            <div class="MainDepartaments__list_item-img">
                                <img src="img/gallery/5.png" alt="">
                            </div>
                            <div class="MainDepartaments__list_item-title">Отдел буxгалтерии</div>
                        </a>
                        <a class="MainDepartaments__list_item" href="single-departaments.html">
                            <div class="MainDepartaments__list_item-img">
                                <img src="img/gallery/6.png" alt="">
                            </div>
                            <div class="MainDepartaments__list_item-title">Отдел буxгалтерии</div>
                        </a>
                    </div>
                    <ul class="paggination">
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="32" cy="32" r="32" fill="#F4F5F9"/>
                            <path d="M35.129 31.25L31.106 27.227L32.1665 26.1665L38 32L32.1665 37.8335L31.106 36.773L35.129 32.75H26V31.25H35.129Z" fill="#101C5A"/>
                            </svg>
                            </a></li>
                    </ul>
                </div>
            </div>
        </section>

@endsection