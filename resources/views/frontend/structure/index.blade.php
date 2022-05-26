@extends('layouts.main')
@section('title') {{$Structure->title}}@endsection
@section('description')  {{$Structure->description}} @endsection
@section('keywords')  {{$Structure->keywords}}@endsection
@section('content')
<section class="MainStructure" data-aos="fade-down">
            <div class="container">
                <div class="MainStructure__wrapper">
                    <h1 class="title">{{$Structure->structureTitle}}</h1>
                    <div class="MainStructure__wrapper_inner">
                        <img src="/{{$Structure->structureImg}}" class="MainStructure-img" alt="{{$Structure->structureTitle}}" />
                    </div>

                    <div class="MainStructure_text">
                    {!! $Structure->structureContent !!}
                    </div>
                </div>
            </div>
        </section>

@endsection