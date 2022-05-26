@extends('layouts.main')
@section('title')   @endsection
@section('description')   @endsection
@section('keywords')  @endsection
@section('content')
<section class="MainDepartaments borderTop  bg-img-fix" style="background-image: url('/img/backgorundFix/background16.svg');">
            <div class="container" data-aos="fade-down">

                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Отделы')}}</span></li>
                </ul>
                <div class="MainDepartaments__wrapper">
                    <div class="title">{{trans('Отделы')}}</div>
                    <div class="MainDepartaments__list">
                        @foreach($departments as $department)
                        <a href="{{ route('departments.show',['id'=>$department->id]) }}" class="MainDepartaments__list_item">
                        @if($department->departamentsImg)
                            <div class="MainDepartaments__list_item-img">
                                <img src="/{{$department->departamentsImg}}" alt="{{$department->departamentsTitle}}" />
                            </div>
                        @endif
                            <div class="MainDepartaments__list_item-title">{{$department->departamentsTitle}}</div>
                        </a>
                        @endforeach
                    </div>
                    {!! $departments->links() !!}
                </div>
            </div>
        </section>

@endsection