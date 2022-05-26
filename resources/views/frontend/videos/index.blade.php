@extends('layouts.main')
@section('title')   @endsection
@section('description')   @endsection
@section('keywords')  @endsection
@section('content')
<section class="MainVideos Gallery borderTop bg-img-fix" style="background-image: url('/img/backgorundFix/background14.svg');">
            <div class="container" data-aos="fade-down">

                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Видеогалерея')}}</span></li>
                </ul>
                <div class="Gallery__wrapper">
                    <h2 class="title">{{trans('Видеогалерея')}}</h2>

                    <div class="Gallery__list">
                        @foreach($videos as $video)
                        <a href="{{ route('videos.show',['id'=>$video->id]) }}" class="Gallery__list_item">
                            @if($video->VideosImg)
                            <img src="/{{$video->VideosImg}}" alt="" class="Gallery__list_item-img ibg"/>
                            @endif
                            <div class="Gallery__list_item_bottom">
                                <p class="Gallery__list_item-title">
                                    {{$video->VideosTitle}}
                                   
                                </p>
                                <div class="Gallery__list_item-count">
                                    <i data-svg="/img/videos.svg"></i> 
                                    @if($video->VideosContent)
                                     {{count(explode(",", $video->VideosContent))}}
                                    @else
                                        0
                                    @endif
                                </div>

                            </div>
                        </a>
                        @endforeach

                    </div>
                    {{ $videos->links() }}

                </div>


            </div>
        </section>
@endsection