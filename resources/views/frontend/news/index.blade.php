@extends('layouts.main')
@section('title')   @endsection
@section('description')   @endsection
@section('keywords')  @endsection
@section('content')
<section class="MainNews borderTop bg-img-fix" style="background-image: url('/img/backgorundFix/background10.svg');">
            <div class="container" data-aos="fade-down">

                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Объекты')}}</span></li>
                </ul>
                <div class="MainNews__wrapper">
                    <h2 class="title">{{trans('Новости')}}</h2>
                    <div class="MainNews__wrapper_slider">
                        <div class="MainNews__slider">
                            <div class="swiper-wrapper">
                                @foreach($news as $new)
                                <a href="{{ route('news.show',['id'=>$new->id]) }}" class="MainNews__slider-item swiper-slide">
                                    @if($new->NewsImg)
                                    <img src="/{{$new->NewsImg}}" alt="{{$new->NewsTitle}}" class="MainNews__slider-item_img ibg"/>
                                    @endif
                                    <div class="MainNews__slider-item_content">
                                        <div class="MainNews__slider-item-title">{{$new->NewsTitle}}</div>
                                        <div class="MainNews__slider-item-text">{{$new->NewsSubTitle}}</div>
                                        
                                        <time datetime="{{$new->published}}"><img src="/img/clockNews.svg" />{{$new->published}}</time>
                                    </div>
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
                    <div class="MainNews__list">
                    @foreach($news as $new)
                    <a href="{{ route('news.show',['id'=>$new->id]) }}" class="MainNews__list_item">
                        @if($new->NewsImg)
                             <img src="/{{$new->NewsImg}}" alt="{{$new->NewsTitle}}" class="MainNews__list_item-img ibg"/>
                        @endif
                            <div class="MainNews__list_item_bottom">
                                <p class="MainNews__list_item-title">
                                    {{$new->NewsTitle}}
                                </p>
                                <time datetime="{{$new->published}}"><img src="/img/clockNews.svg" /></i> {{$new->published}}</time>
                            </div>
                        </a>
                    @endforeach

                    </div>
                    {!! $news->links() !!}
                </div>

            </div>
        </section>
@endsection