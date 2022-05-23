@extends('layouts.main')
@section('title') {{$service->title}}  @endsection
@section('description')  {{$service->desctiption}} @endsection
@section('keywords') {{$service->keywords}} @endsection
@section('content')
<section class="SingleServices">
<div class="SingleServices__main" data-aos="fade-down">
    <div class="container">
        <div class="SingleServices__main_wrapper">
            <div class="SingleServices__main_left">
                <ul class="breadcrumb breadcrumb-single">
                    <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
                    <li><a href="{{route('service')}}">Услуги</a></li>
                    <li><span>{{$service->TitleService}}</span></li>
                </ul>

                <h1 class="SingleServices-title">{{$service->TitleService}}</h1>
                <h2 class="SingleServices-subtitle">{{$service->SubTitleService}}</h2>
            </div>
            @if($service->ServiceImg)
            <div class="SingleServices__main_right">
                <img src="/{{$service->ServiceImg}}" alt="{{$service->TitleService}}">
            </div>
            @endif
        </div>

    </div>
</div>
@if($service->BlockOneService)
<div class="SingleServices__one bg-img-fix" style="background-image: url('img/backgorundFix/background5.svg');">
    <div class="container" data-aos="fade-down">
        <div class="SingleServices__one_wrapper">
            {!! $service->BlockOneService !!}
        </div>
    </div>
</div>
@endif
@if($service->BlockTwoService)
<div class="SingleServices__two">
    <div class="container" data-aos="fade-down">
        <div class="SingleServices__two_wrapper">
            @if($service->BlockTwoImgService)
            <div class="SingleServices__two_wrapper_left">
                <img src="/{{$service->BlockTwoImgService}}" alt="{{$service->TitleService}}" />
            </div>
            @endif
            <div class="SingleServices__two_wrapper_right">
               {!! $service->BlockTwoService !!}
            </div>
        </div>
    </div>
</div>
@endif
@if($service->BlockThreeService)
<div class="SingleServices__three bg-img-fix" style="background-image: url('img/backgorundFix/background6.svg');">
    <div class="container" data-aos="fade-down">
        <div class="SingleServices__three_wrapper">
            {!! $service->BlockThreeService !!}
        </div>
    </div>
</div>
@endif
</section>
<section class="RemainQuestion" data-aos="fade-down">
<div class="container">
    <div class="RemainQuestion__wrapper">
        <h3>{{trans('Остались вопросы?')}}</h3>
        <div class="RemainQuestion__wrapper_btns">
            <a href="#callback__form" class="popup-modal RemainQuestion__wrapper_btns-const">{{trans('Получить консультацию')}}</a>
            <a href="#callback__form" class="popup-modal RemainQuestion__wrapper_btns-tel">{{trans('Заказать звонок')}}<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.366 7.682C7.30434 9.33048 8.66952 10.6957 10.318 11.634L11.202 10.396C11.3442 10.1969 11.5543 10.0569 11.7928 10.0023C12.0313 9.94779 12.2814 9.98254 12.496 10.1C13.9103 10.8729 15.4722 11.3378 17.079 11.464C17.3298 11.4839 17.5638 11.5975 17.7345 11.7823C17.9052 11.9671 18 12.2094 18 12.461L18 16.923C18.0001 17.1706 17.9083 17.4094 17.7424 17.5932C17.5765 17.777 17.3483 17.8927 17.102 17.918C16.572 17.973 16.038 18 15.5 18C6.94 18 0 11.06 0 2.5C0 1.962 0.027 1.428 0.082 0.898C0.107255 0.651697 0.222984 0.423521 0.40679 0.257634C0.590595 0.0917472 0.829406 -5.33578e-05 1.077 2.32673e-08L5.539 2.32673e-08C5.79056 -3.15185e-05 6.0329 0.0947515 6.21768 0.265451C6.40247 0.43615 6.51613 0.670224 6.536 0.921C6.66222 2.52779 7.12708 4.08968 7.9 5.504C8.01746 5.71856 8.05221 5.96874 7.99767 6.2072C7.94312 6.44565 7.80306 6.65584 7.604 6.798L6.366 7.682ZM3.844 7.025L5.744 5.668C5.20478 4.50409 4.83535 3.26884 4.647 2L2.01 2C2.004 2.166 2.001 2.333 2.001 2.5C2 9.956 8.044 16 15.5 16C15.667 16 15.834 15.997 16 15.99L16 13.353C14.7312 13.1646 13.4959 12.7952 12.332 12.256L10.975 14.156C10.4287 13.9437 9.89801 13.6931 9.387 13.406L9.329 13.373C7.36758 12.2567 5.74328 10.6324 4.627 8.671L4.594 8.613C4.30691 8.10199 4.05628 7.57134 3.844 7.025Z" fill="white"/>
                </svg>
                </a>
        </div>
    </div>
</div>
</section>
@endsection