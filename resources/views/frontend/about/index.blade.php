@extends('layouts.main')
@section('title')  {{$About->title}} @endsection
@section('description') {{$About->description}}@endsection
@section('keywords') {{$About->keywords}}@endsection
@section('content')
<section class="SingleDepartaments SingleObjects ">



<div class="SingleDepartaments__main SingleObjects__main" data-aos="fade-down">
    <div class="container">
        <div class="SingleDepartaments__main_wrapper SingleObjects__main_wrapper">
            <div class="SingleDepartaments__main_left SingleObjects__main_left">
                <ul class="breadcrumb breadcrumb-single">
                    <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>

                    <li><span>{{trans('О компании')}}</span></li>
                </ul>
                <h1 class="SingleDepartaments-title SingleObjects-title">{{$About->aboutTitle}}
                </h1>
                <h2 class="SingleDepartaments-subtitle SingleObjects-subtitle">{{$About->aboutSubTitle}}</h2>
            </div>
            @if($About->aboutImg)
            <div class="SingleDepartaments__main_right SingleObjects__main_right">
                <img src="/{{$About->aboutImg}}" alt="{{$About->aboutTitle}}"/>
            </div>
            @endif
        </div>

    </div>
</div>
@if($About->aboutContent)
<div class="SingleDepartaments__one SingleObjects__one bg-img-fix" style="background-image: url('/img/backgorundFix/background17.svg');">
    <div class="container" data-aos="fade-down">
        <div class="SingleDepartaments__one_wrapper SingleObjects__one_wrapper">
            {!! $About->aboutContent !!}
        </div>
    </div>
</div>
@endif
<div class="AboutPhotos SingleDepartaments__photos SingleObjects__photos">
    <div class="container" data-aos="fade-down">
        <div class="SingleDepartaments__photos_wrapper SingleObjects__photos_wrapper">
            <h2 class="SingleDepartaments__photos-title SingleObjects__photos-title title">{{trans('фотогалерея')}}</h2>
            <div class="SingleDepartaments__photos_wrapper_slider SingleObjects__photos_wrapper_slider">
                <div class="SingleDepartaments__photos_list SingleObjects__photos_list">
                    <div class="swiper-wrapper">
                        @foreach(explode(",", $About->aboutPhotos) as $photo)
                        <div class="SingleDepartaments__photos_list-itme SingleObjects__photos_list-item swiper-slide">
                            <img src="/{{$photo}}" alt="{{$photo}}"/>
                        </div>
                        @endforeach
                    </div>
                    <div class="slaider__buttons buttons-slaider">
                        <div class="buttons-slaider__reght reght-buttons">
                            <div class="reght-buttons__button reght-buttons__button-prev">
                                <i class="fas fa-arrow-left"></i>
                            </div>
                            <div class="reght-buttons__button reght-buttons__button-next">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="buttons-slaider__line"></div>
                        <div class="buttons-slaider__numbers">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

</section>
@endsection