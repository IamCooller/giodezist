@extends('layouts.main')
@section('title')   @endsection
@section('description')   @endsection
@section('keywords')  @endsection
@section('content')
<section class="SinglePhotos SingleGallery borderTop bg-img-fix" style="background-image: url('/img/backgorundFix/background13.svg');">
            <div class="container" data-aos="fade-down">

                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
                    <li><a href="{{route('photos')}}">{{trans('Фотогалерея')}}</a></li>
                    <li><span>{{$photo->PhotosTitle}} </span></li>
                </ul>
                <div class="Gallery__wrapper">
                    <h2 class="title">{{$photo->PhotosTitle}}</h2>
                    <div class="SingleGallery__list popup-gallery Gallery__list">
                       @if($photo->PhotosContent)
                        @foreach(explode(",", $photo->PhotosContent) as $member)
                        <a href="/{{$member}}" class="SingleGallery__list_item hoverImgHref">
                            <img src="/{{$member}}" alt="/{{$member}}" class="hoverImg">
                        </a>
                @endforeach
                    @endif
                    </div>
                </div>

        </section>
@endsection