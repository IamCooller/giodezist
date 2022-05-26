@extends('layouts.main')
@section('title')   @endsection
@section('description')   @endsection
@section('keywords')  @endsection
@section('content')
<section class="MainPhotos Gallery borderTop bg-img-fix" style="background-image: url('/img/backgorundFix/background12.svg');">
            <div class="container" data-aos="fade-down">

                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Фотогалерея')}}</span></li>
                </ul>
                <div class="Gallery__wrapper">
                    <h2 class="title">{{trans('Фотогалерея')}}</h2>

                    <div class="Gallery__list">
                        @foreach($photos as $photo)
                        <a href="{{ route('photos.show',['id'=>$photo->id]) }}" class="Gallery__list_item">
                            @if($photo->PhotosImg)
                            <img src="/{{$photo->PhotosImg}}" alt="{{$photo->PhotosTitle}}" class="Gallery__list_item-img ibg" />
                            @endif
                            <div class="Gallery__list_item_bottom">
                                <p class="Gallery__list_item-title">
                                    {{$photo->PhotosTitle}}
                                </p>
                                <div class="Gallery__list_item-count">
                                    <i data-svg="/img/photos.svg"></i>  
                                    @if($photo->PhotosContent)
                                    {{count(explode(",", $photo->PhotosContent))}}
                                    @else
                                        0
                                    @endif
                                </div>

                            </div>
                        </a>
                        @endforeach
                       
                    </div>


                        {{ $photos->links() }}
                </div>


            </div>
        </section>
@endsection