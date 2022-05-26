@extends('layouts.main')
@section('title') {{$videos->title}} @endsection
@section('description') {{$videos->description}}  @endsection
@section('keywords'){{$videos->keywords}}  @endsection
@section('content')
<section class="SingleVideos SingleGallery borderTop bg-img-fix" style="background-image: url('/img/backgorundFix/background15.svg');">
            <div class="container" data-aos="fade-down">

                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
                    <li><a href="{{route('videos')}}">{{trans('Видеогалерея')}}</a></li>
                    <li><span>{{$videos->VideosTitle}}</span></li>
                </ul>
                <div class="Gallery__wrapper">
                    <h2 class="title">{{$videos->VideosTitle}} </h2>
                    <div class="SingleVideos__list SingleGallery__list Gallery__list">

                    @if($videos->VideosContent)
                        @foreach(explode(",", $videos->VideosContent) as $member)
                        <a href="https://www.youtube.com/watch?v={{trim($member)}}" class="popup-youtube SingleGallery__list_item hoverVideoHref">
                            <iframe src="https://www.youtube.com/embed/{{trim($member)}}" alt="{{$member}}" class="hoverVideo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </a>
                     
                        @endforeach
                    @endif
                    </div>
                </div>

        </section>
@endsection