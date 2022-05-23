@extends('layouts.main')
@section('title')   @endsection
@section('description')   @endsection
@section('keywords')  @endsection
@section('content')
<section class="MainServices borderTop bg-img-fix" style="background-image: url('img/backgorundFix/background4.svg');">
            <div class="container" data-aos="fade-down">
                <ul class="breadcrumb">
                    <li><a href="http://127.0.0.1:8000">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Услуги')}}</span></li>
                </ul>
                <div class="MainServices__wrapper">
                    <div class="title">{{trans('УСЛУГИ')}}</div>
                    <div class="MainServices__wrapper_list">
                        @foreach($categories as $service)
                        <div class="MainServices__item">
                            @if($service->ServiceImg)
                            <div class="MainServices__item_img">
                                <img src="/{{$service->ServiceImg}}" />
                            </div>
                            @endif
                            <div class="MainServices__item_content">
                                @if($service->TitleService)
                                <div class="MainServices__item-title">{{$service->ServiceTitle}}</div>
                                @endif
                                <nav>
                                @foreach($service->service as $service_single)
                                    <a href="single-services.html">{{$service_single->title}}</a>
                                    @endforeach
                                </nav>
                            </div>
                        </div>
                        @endforeach
                    
                    </div>
                </div>
            </div>
        </section>
@endsection