@extends('layouts.main')
@section('title')   @endsection
@section('description')   @endsection
@section('keywords')  @endsection
@section('content')
<section class="objects borderTop bg-img-fix" style="background-image: url('/img/backgorundFix/background7.svg');">

<div class="container" data-aos="fade-down">
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
        <li><span>{{trans('Объекты')}}</span></li>
    </ul>
    <div class="objects__wrapper">
        <div class="title">{{trans('Объекты')}}</div>
        <div class="objects__list">
            @foreach($objects as $object)
            <a href="{{ route('objects.show',['id'=>$object->id]) }}" class="objects__item">
                @if($object->ObjectImg)
                <img src="/{{$object->ObjectImg}}" alt="" class="objects__item-img ibg"/>
                @endif
                <div class="objects__item_content">
                    <div class="objects__item_content_text">
                        <p class="objects__item-title">{{$object->TitleObject}}</p>
                        <p class="objects__item-years">{{$object->SubTitleObject}}</p>
                    </div>

                </div>
            </a>
            @endforeach
        </div>


        {!! $objects->links() !!}
    </div>
</div>

</section>
@endsection