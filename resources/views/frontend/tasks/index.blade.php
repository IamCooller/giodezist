@extends('layouts.main')
@section('title'){{$Tasks->title}}@endsection
@section('description') {{$Tasks->description}} @endsection
@section('keywords'){{$Tasks->keywords}}  @endsection
@section('content')
<section class="TaskPage bg-img-fix" style="background-image: url('/img/backgorundFix/background21.svg');">
            <div class="container" data-aos="fade-down">
                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Цели и задачи')}}</span></li>
                </ul>
                <h2 class="title">{{$Tasks->tasksTitle}}</h2>
                <div class="TaskPage__wrapper">
                    <div class="TaskPage__wrapper_left">
                            {!! $Tasks->tasksSubTitle !!}
                    </div>
                    @if($Tasks->tasksImg)
                    <div class="TaskPage__wrapper_right">
                        <img src="/{{$Tasks->tasksImg}}" alt="">
                    </div>
                    @endif
                </div>
                <div class="TaskPage__bottom">
                    {!! $Tasks->tasksContent !!}
                </div>
            </div>
        </section>

@endsection