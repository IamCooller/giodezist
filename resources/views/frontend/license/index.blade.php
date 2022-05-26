@extends('layouts.main')
@section('title') {{$license->title}}  @endsection
@section('description') {{$license->description}}  @endsection
@section('keywords'){{$license->keywords}}  @endsection
@section('content')
<section class="MainLicense Gallery borderTop bg-img-fix" style="background-image: url('/img/backgorundFix/background12.svg');">
            <div class="container" data-aos="fade-down">

                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Лицензии и Сертификаты')}}</span></li>
                </ul>
                <div class="MainLicense__wrapper Gallery__wrapper">
                    <h2 class="title">{{$license->licenseTitle}}</h2>

                    <div class="MainLicense__list Gallery__list">
                       @if($data)
                        @foreach($data as $member)
              

                <a href="/{{$member->url}}" title="{{ $member->title }}" data-description="{{ $member->desc }}" class="MainLicense__list_item Gallery__list_item ">
                            <div class="MainLicense__list_item-img hoverImgHref">
                                <img src="/{{$member->url}}" alt="{{ $member->title }}" class="hoverImg">
                            </div>
                            <div class="MainLicense__list_item_bottom Gallery__list_item_bottom">
                                <p class="MainLicense__list_item-title Gallery__list_item-title">
                                {{ $member->title }}
                                </p>

                            </div>
                        </a>
                @endforeach
                @endif

                    </div>
                    {{ $data->links() }}
                </div>


            </div>
        </section>
@endsection