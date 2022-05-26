@extends('layouts.main')
@section('title')   @endsection
@section('description')   @endsection
@section('keywords')  @endsection
@section('content')
<section class="documents borderTop  bg-img-fix" style="background-image: url('/img/backgorundFix/background18.svg');">
            <div class="container" data-aos="fade-down">

                <ul class="breadcrumb">
                    <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Документы')}}</span></li>
                </ul>
                <h2 class="title">{{trans('Документы')}}</h2>
                <div class="documents__wrapper">
                    <ul class="sidebar">
                    
  
                    @foreach($tabDocuments as $service)
                    <li><a href="#{{$service->id}}">{{$service->TablicenseTitle}}</a></li>
                    @endforeach
                  
                    </ul>
                    </ul>
                    <div class="documents__list">

                    @foreach($tabDocuments as $service)
                        <div class="documents__list_item" id="{{$service->id}}">
                          
                    @foreach($service->service as $document_single)
                            @if( $document_single->title)
                            <div class="documents__list_item_downloand">
                                <div class="documents__list_item_downloand-img">
                                    <img src="/img/file.svg" alt="download">
                                </div>
                                <div class="documents__list_item_downloand_text">
                                    <p class="documents__list_item_downloand-title">
                                    {{$document_single->title}}
                                    </p>
                                    <ul class="documents__list_item_downloand_options">
                                        <li><span>{{trans('Дата регистрации')}}:</span> {{$document_single->regist}}
                                        </li>
                                        <li><span>{{trans('Номер')}}:</span> {{$document_single->number}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="documents__list_item_downloand_file">
                                    <a href="/{{$document_single->file}}" class="documents__list_item_downloand-button" download="">
                                        {{trans('Скачать')}}
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.25 14.25H15.75V15.75H2.25V14.25ZM9.75 6.75H15L9 12.75L3 6.75H8.25V0.75H9.75V6.75Z" fill="#101C5A"/>
                                            </svg>
                                            
                                        </a>
                                    <div class="documents__list_item_downloand-size">
                                        <span>{{trans('Размер')}}:</span> {{round(filesize($document_single->file)/ 1024 / 1024, 2)}} МБ
                                    </div>
                                </div>
                            </div>
                            @endif
                           @endforeach
                        </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </section>
@endsection