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

        <section class="services bg-img-fix" style="background-image: url('img/backgorundFix/background1.svg');">

            <div class="container" data-aos="fade-down">
                <div class="services__wrapper">
                    <div class="services__top">
                        <div class="title">{{$homePage->servicesTitle}}</div>
                        <a href="{{route('services')}}" class="linkMore btn-mobile-none">{{trans('Все услуги')}}</a>
                    </div>
                    <div class="services__list">
                        <a href="services.html" class="services__list_item">
                            <img class="services__list_item-img" src="img/MainPage/services1.svg" alt="service" />
                            <p class="services__list_item-title">Инженерная геология
                            </p>
                        </a>
                        <a href="services.html" class="services__list_item">
                            <img class="services__list_item-img" src="img/MainPage/services2.svg" alt="service" />
                            <p class="services__list_item-title">Инженерная геодезия
                            </p>
                        </a>
                        <a href="services.html" class="services__list_item">
                            <img class="services__list_item-img" src="img/MainPage/services3.svg" alt="service" />
                            <p class="services__list_item-title">Геофизические исследования
                            </p>
                        </a>
                        <a href="services.html" class="services__list_item">
                            <img class="services__list_item-img" src="img/MainPage/services4.svg" alt="service" />
                            <p class="services__list_item-title">Лабораторные исследования
                            </p>
                        </a>
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
        <section class="projects bg-img-fix" style="background-image: url('img/backgorundFix/background2.svg');">
            <div class="container" data-aos="fade-down">
                <div class="projects__wrapper">
                    <div class="projects__wrapper_left">
                        <h2 class="projects-title title">{{$homePage->ProjectsTitle}}</h2>
                        <a href="{{route('objects')}}" class="projects-link linkMore btn-mobile-none">{{trans('Все проекты')}}</a>
                        <a href="single-objects.html" class="projects__item projects__item_big">
                            <div style="background-image: url('img/MainPage/projects1.png')" alt="" class="projects__item-img ibg"> </div>
                            <div class="projects__item_content">
                                <p class="projects__item-title">Атбашинская ГЭС</p>
                                <p class="projects__item-years">1963-1977 годы</p>
                            </div>

                        </a>
                    </div>
                    <div class="projects__wrapper_right">
                        <div class="projects__list">
                            <a href="single-objects.html" class="projects__item">
                                <div style="background-image: url('img/MainPage/projects2.png');" alt="" class="projects__item-img ibg"></div>
                                <div class="projects__item_content">
                                    <p class="projects__item-title">Атбашинская ГЭС</p>
                                    <p class="projects__item-years">1963-1977 годы</p>
                                </div>
                            </a>
                            <a href="single-objects.html" class="projects__item">
                                <div style="background-image: url('img/MainPage/projects3.png')" alt="" class="projects__item-img ibg"></div>
                                <div class="projects__item_content">
                                    <p class="projects__item-title">Атбашинская ГЭС</p>
                                    <p class="projects__item-years">1963-1977 годы</p>
                                </div>
                            </a>
                            <a href="single-objects.html" class="projects__item">
                                <div style="background-image: url('img/MainPage/projects4.png');" alt="" class="projects__item-img ibg"></div>
                                <div class="projects__item_content">
                                    <p class="projects__item-title">Атбашинская ГЭС</p>
                                    <p class="projects__item-years">1963-1977 годы</p>
                                </div>
                            </a>
                            <a href="single-objects.html" class="projects__item">
                                <div style="background-image: url('img/MainPage/projects5.png')" alt="" class="projects__item-img ibg"></div>
                                <div class="projects__item_content">
                                    <p class="projects__item-title">Атбашинская ГЭС</p>
                                    <p class="projects__item-years">1963-1977 годы</p>
                                </div>
                            </a>
                        </div>
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
                        <a href="single-news.html" class="news__wrapper_list_item">
                            <div style="background-image: url('img/MainPage/projects1.png')" alt="" class="news__wrapper_list_item-img ibg"></div>
                            <div class="news__wrapper_list_item_bottom">
                                <p class="news__wrapper_list_item-title">
                                    Геодезист делает замеры определенной местности
                                </p>
                                <time datetime="04.11.2021"><i data-svg="img/clock.svg"></i> 04.11.2021</time>
                            </div>

                        </a>
                        <a href="single-news.html" class="news__wrapper_list_item">
                            <div style="background-image: url('img/MainPage/projects1.png')" alt="" class="news__wrapper_list_item-img ibg"></div>
                            <div class="news__wrapper_list_item_bottom">
                                <p class="news__wrapper_list_item-title">
                                    Геодезист делает замеры определенной местности
                                </p>
                                <time datetime="04.11.2021"><i data-svg="img/clock.svg"></i> 04.11.2021</time>
                            </div>
                        </a>
                        <a href="single-news.html" class="news__wrapper_list_item">
                            <div style="background-image: url('img/MainPage/projects1.png')" alt="" class="news__wrapper_list_item-img ibg"></div>
                            <div class="news__wrapper_list_item_bottom">
                                <p class="news__wrapper_list_item-title">
                                    Геодезист делает замеры определенной местности
                                </p>
                                <time datetime="04.11.2021"><i data-svg="img/clock.svg"></i> 04.11.2021</time>
                            </div>
                        </a>
                    </div>
                    <a href="news.html" class="news-link linkMore btn-mobile-block">Все новости</a>
                </div>
            </div>
        </section>
        <section class="contacts bg-img-fix" style="background-image: url('img/backgorundFix/background3.svg');">
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