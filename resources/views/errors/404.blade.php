@extends('layouts.main')

@section('content')

<section class="ErrorPage" data-aos="fade-down">
            <div class="container">
                <div class="ErrorPage__wrapper">
                    <img src="/img/404.svg" class="ErrorPage__wrapper-img" />
                    <div class="ErrorPage__wrapper_text">
                        <h1>404</h1>
                        <p>{{trans('Страница которую вы ищите не существует, перейдите на главную страницу!')}}</p>
                        <a href="{{route('home')}}">{{trans('Главная')}}</a>
                    </div>
                </div>
            </div>
        </section>

@endsection
