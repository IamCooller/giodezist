@extends('layouts.main')
@section('title')   @endsection
@section('description')   @endsection
@section('keywords')  @endsection
@section('content')
<section class="SingleDepartaments SingleObjects borderTop">



<div class="SingleDepartaments__main SingleObjects__main" data-aos="fade-down">
    <div class="container">
        <div class="SingleDepartaments__main_wrapper SingleObjects__main_wrapper">
            <div class="SingleDepartaments__main_left SingleObjects__main_left">
                <ul class="breadcrumb breadcrumb-single">
                    <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
                    <li><a href="{{route('departments')}}">{{trans('Отделы')}}</a></li>
                    <li><span>{{$departament->departamentsTitle}}</span></li>
                </ul>
                <h1 class="SingleDepartaments-title SingleObjects-title">{{$departament->departamentsTitle}}
                </h1>
                <h2 class="SingleDepartaments-subtitle SingleObjects-subtitle">{{$departament->departamentsSubTitle}}</h2>
            </div>
            @if($departament->departamentsImg)
                <div class="SingleDepartaments__main_right SingleObjects__main_right">
                    <img src="/{{$departament->departamentsImg}}" alt="{{$departament->departamentsTitle}}" />
                </div>
            @endif
        </div>

    </div>
</div>
@if($departament->departamentsContent)
<div class="SingleDepartaments__one SingleObjects__one bg-img-fix" style="background-image: url('/img/backgorundFix/background17.svg');">
    <div class="container" data-aos="fade-down">
        <div class="SingleDepartaments__one_wrapper SingleObjects__one_wrapper">
            {!! $departament->departamentsContent !!}
        </div>
    </div>
</div>
@endif
@if($departament->departamentsPhotos)
<div class="SingleDepartaments__photos SingleObjects__photos">
    <div class="container" data-aos="fade-down">
        <div class="SingleDepartaments__photos_wrapper SingleObjects__photos_wrapper">
            <h2 class="SingleDepartaments__photos-title SingleObjects__photos-title title">{{trans('фотогалерея')}}</h2>
            <div class="SingleDepartaments__photos_wrapper_slider SingleObjects__photos_wrapper_slider">
                <div class="SingleDepartaments__photos_list SingleObjects__photos_list">
                    <div class="swiper-wrapper">
                        @foreach(explode(",", $departament->departamentsPhotos) as $image)
                            <div class="SingleDepartaments__photos_list-itme SingleObjects__photos_list-item swiper-slide">
                                <img src="/{{$image}}" alt="$image" />
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
@endif
<div class="SingleDepartaments__more SingleObjects__more bg-img-fix" style="background-image: url('/img/backgorundFix/background9.svg');">
    <div class="container" data-aos="fade-down">
        <div class="SingleDepartaments__more_wrapper SingleObjects__more_wrapper">
            <div class="SingleDepartaments__more_top SingleObjects__more_top">
                <h2 class="title">{{trans('Другие Объекты')}}</h2>
                <a href="{{route('departments')}}" class="linkMore btn-mobile-none">{{trans('Все проекты')}}</a>
            </div>
            <div class="SingleDepartaments__more_list MainDepartaments__list">

            @foreach($departments as $el)
            <a class="MainDepartaments__list_item" href="{{ route('departments.show',['id'=>$el->id]) }}">
                @if($el->departamentsImg)
                    <div class="MainDepartaments__list_item-img">
                        <img src="/{{$el->departamentsImg}}" alt="{{$el->departamentsImg}}" />
                    </div>
                @endif
                    <div class="MainDepartaments__list_item-title"> {{$el->departamentsTitle}}</div>
            </a>          
            @endforeach
            
             
               
            </div>
            <a href="{{route('departments')}}" class="linkMore btn-mobile-block">{{trans('Все проекты')}}</a>
        </div>
    </div>

</div>
</section>
@endsection