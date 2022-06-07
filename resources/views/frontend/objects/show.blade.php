@extends('layouts.main')
@section('title') {{$object->title}}@endsection
@section('description'){{$object->description}} @endsection
@section('keywords'){{$object->keywords}}@endsection
@section('content')

<section class="SingleObjects borderTop">



<div class="SingleObjects__main" data-aos="fade-down">
    <div class="container">
        <div class="SingleObjects__main_wrapper">
            <div class="SingleObjects__main_left">
                <ul class="breadcrumb breadcrumb-single">
                    <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
                    <li><a href="{{route('objects')}}">{{trans('Объекты')}}</a></li>
                    <li><span>{{$object->TitleObject}}</span></li>
                </ul>
                <h1 class="SingleObjects-title">{{$object->TitleObject}}
                </h1>
                <h2 class="SingleObjects-subtitle">{{$object->SubTitleObject}}</h2>
            </div>
            @if($object->ObjectImg)
            <div class="SingleObjects__main_right">
                <img src="/{{$object->ObjectImg}}" alt="{{$object->TitleObject}}">
            </div>
            @endif
        </div>

    </div>
</div>
@if($object->ContentObject)
<div class="SingleObjects__one bg-img-fix" style="background-image: url('/img/backgorundFix/background8.svg');">
    <div class="container" data-aos="fade-down">
        <div class="SingleObjects__one_wrapper">
            {!! $object->ContentObject !!}
        </div>
    </div>
</div>
@endif
@if(json_decode($object->PhotosObject))

<div class="SingleObjects__photos">
    <div class="container" data-aos="fade-down">
        <div class="SingleObjects__photos_wrapper">
            <h2 class="SingleObjects__photos-title title">{{trans('фотогалерея')}}</h2>
            <div class="SingleObjects__photos_wrapper_slider">
                <div class="SingleObjects__photos_list MainLicense__list">
                    <div class="swiper-wrapper">
                        @foreach(json_decode($object->PhotosObject) as $member)
                       <a href="/{{$member->url}}" title="{{ $member->title }}" data-description="{{ $member->desc }}" class="SingleObjects__photos_list-item swiper-slide">
                            <img src="/{{$member->url}}" alt="/{{$member->title}}">
                        </a>
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

<div class="SingleObjects__more bg-img-fix" style="background-image: url('/img/backgorundFix/background9.svg');">
    <div class="container" data-aos="fade-down">
        <div class="SingleObjects__more_wrapper">
            <div class="SingleObjects__more_top">
                <h2 class="title">{{trans('Другие Объекты')}} </h2>
                <a href="{{route('objects')}}" class="linkMore btn-mobile-none">{{trans('Все проекты')}}</a>
            </div>
            <div class="SingleObjects__more_list objects__list ">


                @foreach($objects as $objectsing)
                <a href="{{ route('objects.show',['id'=>$objectsing->id]) }}" class="objects__item">
                    @if($objectsing->ObjectImg)
                    <img src="/{{$objectsing->ObjectImg}}" alt="{{$objectsing->TitleObject}}" class="objects__item-img ibg"/>
                    @endif
                    <div class="objects__item_content">
                        <div class="objects__item_content_text">
                            <p class="objects__item-title">{{$objectsing->TitleObject}}</p>
                            <p class="objects__item-years">{{$objectsing->SubTitleObject}}</p>
                        </div>

                    </div>
                </a>
                @endforeach
            


            </div>
            <a href="{{route('objects')}}" class="linkMore btn-mobile-block">{{trans('Все проекты')}}</a>
        </div>
    </div>

</div>
</section>
@endsection