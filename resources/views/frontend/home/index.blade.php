@extends('layouts.main')
@section('title'){{$homePage->title}}@endsection
@section('description') {{$homePage->description}}  @endsection
@section('keywords')  {{$homePage->keywords}}@endsection
@section('content')

      
<section class="main" data-aos="fade-down"
@if($homePage->background)
 style="background-image: url(/{{$homePage->background}});"
 @endif>
            <div class="container">
                <div class="main__wrapper">
                    <h1 class="main-title">{{$homePage->MainTitle}}</h1>
                    <div class="main__achievement">
                        {!! $homePage->achievement !!}
                    </div>
                </div>
            </div>
        </section>

        <section class="services bg-img-fix" style="background-image: url('/img/backgorundFix/background1.svg');">

            <div class="container" data-aos="fade-down">
                <div class="services__wrapper">
                    <div class="services__top">
                        <div class="title">{{$homePage->servicesTitle}}</div>
                        <a href="{{route('services')}}" class="linkMore btn-mobile-none">{{trans('Все услуги')}}</a>
                    </div>
                    <div class="services__list">
                        @foreach($categories as $service)
                        <a href="{{route('services')}}" class="services__list_item">
                        @if($service->ServiceImg)
                            <img class="services__list_item-img" src="/{{$service->ServiceImg}}" alt="service" />
                            @endif
                            @if($service->ServiceTitle)
                            <p class="services__list_item-title">{{$service->ServiceTitle}}</p>
                            @endif
                         
                        </a>
                    @endforeach

                    </div>
                    <a href="{{route('services')}}" class="linkMore btn-mobile-block">{{trans('Все услуги')}}</a>
                </div>

            </div>
        </section>
        <section class="about" data-aos="fade-down">
            <div class="container">
                <div class="about__wrapper">
                    @if($homePage->aboutImg)
                    <div class="about__wrapper_left">
                        <img src="/{{$homePage->aboutImg}}" alt="about">
                    </div>
                    @endif
                    <div class="about__wrapper_right">
                        {!!$homePage->about!!}
                        <a href="{{route('about')}}" class="about-link">{{trans('Подробнее')}}</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="projects bg-img-fix" style="background-image: url('/img/backgorundFix/background2.svg');">
            <div class="container" data-aos="fade-down">
                <div class="projects__wrapper">
                    <div class="projects__wrapper_left">
                        <h2 class="projects-title title">{{$homePage->ProjectsTitle}}</h2>
                        <a href="{{route('objects')}}" class="projects-link linkMore btn-mobile-none">{{trans('Все проекты')}}</a> 
                        @if($objectsM[0])      
                        <a 
                        href="{{ route('objects.show',['id'=>$objectsM[0]->id]) }}" 
                        class="projects__item projects__item_big">
                        @if($objectsM[0]->ObjectImg)    
                        <img src="/{{$objectsM[0]->ObjectImg}}" alt="{{$objectsM[0]->TitleObject}}" class="projects__item-img ibg" />
                        @endif
                            <div class="projects__item_content">
                                <p class="projects__item-title">{{$objectsM[0]->TitleObject}}</p>
                                <p class="projects__item-years">{{$objectsM[0]->SubTitleObject}}</p>
                            </div>

                        </a>
                        @endif
                       
                      
                    </div>
                    <div class="projects__wrapper_right">
                    @if($objectsM)      
                        <div class="projects__list">
                        @for($i = 1; $i < count($objectsM); $i++)

                            <a href="{{ route('objects.show',['id'=>$objectsM[$i]->id]) }}" class="projects__item">
                            @if($objectsM[0]->ObjectImg)    
                            <img src="/{{$objectsM[$i]->ObjectImg}}" alt="{{$objectsM[$i]->TitleObject}}" class="projects__item-img ibg" />
                                @endif
                                <div class="projects__item_content">
                                    <p class="projects__item-title">{{$objectsM[$i]->TitleObject}}</p>
                                    <p class="projects__item-years">{{$objectsM[$i]->SubTitleObject}}</p>
                                </div>
                            </a>
                            @endfor
                        </div>
                        @endif
                    </div>
                    <a href="{{route('objects')}}" class="projects-link linkMore btn-mobile-block">{{trans('Все проекты')}}</a>
                </div>
            </div>
        </section>
        <section class="news" data-aos="fade-down">
            <div class="container">
                <div class="news__wrapper">
                    <div class="news__wrapper_top">
                        <h2 class="news-title title">{{$homePage->NewsTitle}}</h2>
                        <a href="{{route('news')}}" class="news-link linkMore btn-mobile-none">{{trans('Все новости')}}</a>
                    </div>
                    <div class="news__wrapper_list">
                        @foreach($news as $new)
                        <a href="{{ route('news.show',['id'=>$new->id]) }}" class="news__wrapper_list_item">
                        @if($new->NewsImg)
                            <img src="/{{$new->NewsImg}}" alt="{{$new->NewsTitle}}" class="news__wrapper_list_item-img ibg" />
                            @endif
                            <div class="news__wrapper_list_item_bottom">
                                <p class="news__wrapper_list_item-title">
                                {{$new->NewsTitle}}
                                </p>
                                <time datetime="{{$new->published}}"><i data-svg="/img/clock.svg"></i>{{$new->published}}</time>
                            </div>
                        </a>
                     @endforeach
                    </div>
                    <a href="{{route('news')}}" class="news-link linkMore btn-mobile-block">{{trans('Все новости')}}</a>
                </div>
            </div>
        </section>
        <section class="contacts bg-img-fix" style="background-image: url('/img/backgorundFix/background3.svg');">
            <div class="container" data-aos="fade-down">
                <div class="contacts__wrapper">
                    <div class="contacts__wrapper_left">

                        <h3 class="contacts-title">{{$homePage->ContactTitle}}</h3>
                        <ul class="contacts_telephones">
                           {!! $homePage->ContactPhone !!}
                        </ul>
                        <ul class="contacts__graph">
                          {!! $homePage->ContactGraph !!}
                        </ul>
                        <address>{{$homePage->ContactAddress}}</address>
                    </div>
                    <div class="contacts__wrapper_right">
                      {!! $homePage->ContactMap !!}
                    </div>
                </div>
            </div>
        </section>
@endsection