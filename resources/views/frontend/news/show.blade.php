@extends('layouts.main')
@section('title')  {{$new->title}}@endsection
@section('description'){{$new->description}} @endsection
@section('keywords')){{$new->keywords}}  @endsection
@section('content')
<div class="SingleNews borderTop bg-img-fix" style="background-image: url('/img/backgorundFix/background10.svg');">

<div class="container " data-aos="fade-down">
    <ul class="breadcrumb">
        <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
        <li><a href="{{route('news')}}">{{trans('Новости')}}</a></li>
        <li><span>{{$new->NewsTitle}}</span></li>
    </ul>
    <div class="conatiner-small">
        <div class="SingleNews__wrapper">

            <h1 class="SingleNews-title title">
            {{$new->NewsTitle}}
            </h1>
            <time class="SingleNews-time" datetime="{{$new->published}}"><i data-svg="/img/clockNews.svg"></i> {{$new->published}}</time>
            @if($new->NewsImg)
            <img class="SingleNews-img" src="/{{$new->NewsImg}}" alt="{{$new->NewsTitle}}" />
            @endif

            @if($new->NewsContent)
            <div class="SingleNews__content">
            {!! $new->NewsContent !!}
            </div>
            @endif

        </div>
        <div class="SingleNews__shear">
            <span>{{trans('Поделиться')}}</span>
            <a href="https://www.facebook.com/sharer.php?src=sp&amp;u={{url()->full()}}&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Facebook"><svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="74" height="74" rx="37" stroke="#101C5A"/>
                <path d="M38.8077 46.2294V38.3702H41.4457L41.8407 35.3074H38.8077V33.3518C38.8077 32.4651 39.054 31.8607 40.3257 31.8607L41.9476 31.8599V29.1206C41.667 29.0834 40.7043 29 39.5842 29C37.2458 29 35.6449 30.4273 35.6449 33.0486V35.3074H33V38.3703H35.6448V46.2295L38.8077 46.2294Z" fill="#101C5A"/>
                </svg>
                </a>
            <a href="https://t.me/share/url?url={{url()->full()}}&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="Telegram"><svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="74" height="74" rx="37" stroke="#101C5A"/>
                    <path d="M31.9624 37.0994C35.7202 35.4277 38.226 34.3257 39.4798 33.7932C43.0596 32.273 43.8034 32.0089 44.2882 32.0001C44.3949 31.9983 44.6333 32.0252 44.7877 32.1532C44.9182 32.2612 44.954 32.4072 44.9712 32.5096C44.9884 32.6121 45.0098 32.8454 44.9928 33.0277C44.7988 35.1089 43.9594 40.1592 43.5323 42.4901C43.3516 43.4764 42.9958 43.8071 42.6514 43.8394C41.9028 43.9098 41.3344 43.3343 40.6094 42.8491C39.4748 42.0897 38.8339 41.6171 37.7327 40.8761C36.46 40.0198 37.285 39.5491 38.0103 38.78C38.2001 38.5787 41.4983 35.5156 41.5622 35.2378C41.5702 35.203 41.5776 35.0735 41.5022 35.0051C41.4268 34.9367 41.3156 34.9601 41.2353 34.9787C41.1215 35.0051 39.3091 36.2282 35.7981 38.648C35.2836 39.0087 34.8176 39.1845 34.4001 39.1753C33.9399 39.1651 33.0545 38.9096 32.3964 38.6911C31.5891 38.4232 30.9475 38.2815 31.0034 37.8265C31.0325 37.5895 31.3521 37.3471 31.9624 37.0994Z" fill="#101C5A"/>
                    </svg>
                    </a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{url()->full()}}&amp;utm_source=share2" rel="nofollow noopener" target="_blank" title="LinkedIn"><svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="74" height="74" rx="37" stroke="#101C5A"/>
                        <path d="M43.8361 43.4655C43.0392 43.4465 42.2614 43.4465 41.4645 43.4655C41.2938 43.4655 41.2558 43.4276 41.2558 43.2568C41.2558 41.8529 41.2558 40.43 41.2558 39.026C41.2558 38.7035 41.2369 38.381 41.142 38.0774C40.8574 37.0909 39.7191 36.7304 38.9033 37.3944C38.4669 37.7359 38.2962 38.2102 38.2962 38.7794C38.2962 40.1074 38.2962 41.4355 38.2962 42.7636C38.2962 42.9343 38.2772 43.1051 38.2962 43.2948C38.3151 43.4465 38.2393 43.4845 38.1064 43.4655C37.2906 43.4655 36.4938 43.4655 35.678 43.4655C35.5262 43.4655 35.4883 43.4276 35.4883 43.2758C35.5073 42.0806 35.5073 40.8853 35.5073 39.6711C35.5073 38.1912 35.5073 36.7114 35.4883 35.2506C35.4883 35.0798 35.5262 35.0419 35.678 35.0419C36.4938 35.0419 37.2906 35.0419 38.1064 35.0419C38.2582 35.0419 38.2962 35.0798 38.2962 35.2316C38.2962 35.5351 38.2962 35.8387 38.2962 36.1992C38.3531 36.1423 38.3721 36.1233 38.391 36.1043C39.1309 35.0229 40.1744 34.7193 41.4076 34.9091C42.8305 35.1367 43.7412 36.1233 43.9689 37.6411C44.0258 38.0015 44.0447 38.362 44.0447 38.7225C44.0447 40.2402 44.0447 41.7391 44.0447 43.2568C44.0447 43.4086 44.0068 43.4655 43.8361 43.4655Z" fill="#101C5A"/>
                        <path d="M33.9686 39.2536C33.9686 40.5816 33.9686 41.9097 33.9686 43.2377C33.9686 43.4085 33.9307 43.4654 33.7599 43.4654C32.9631 43.4464 32.1662 43.4654 31.3694 43.4654C31.2176 43.4654 31.1797 43.4275 31.1797 43.2757C31.1797 40.6006 31.1797 37.9066 31.1797 35.2315C31.1797 35.0987 31.2176 35.0417 31.3694 35.0417C32.1852 35.0417 33.001 35.0417 33.8168 35.0417C33.9876 35.0417 34.0065 35.0987 34.0065 35.2504C33.9686 36.5785 33.9686 37.9066 33.9686 39.2536Z" fill="#101C5A"/>
                        <path d="M34.1015 32.8411C33.9118 33.5999 33.134 34.0363 32.2423 33.8845C31.2936 33.7327 30.7624 32.8031 31.1039 31.8924C31.3316 31.3233 31.8818 30.9818 32.5838 31.0008C33.6462 30.9818 34.3482 31.8355 34.1015 32.8411Z" fill="#101C5A"/>
                        </svg>
                        </a>
        </div>
    </div>
</div>
<div class="SingleNews__more">
    <div class="container">


        <div class="SingleNews__more_top">
            <h2 class="SingleNews__more-title title">{{trans('Другие новости')}}</h2>
            <a href="{{route('news')}}" class="SingleNews__more-linkMore linkMore btn-mobile-none">{{trans('Все проекты')}}</a>
        </div>
        <div class="SingleNews__more_list">
        @foreach($news as $el)
                 
                   
            <a href="{{ route('news.show',['id'=>$el->id]) }}" class="SingleNews__more_list_item">
            @if($el->NewsImg)
                             <img src="/{{$el->NewsImg}}" alt="" class="SingleNews__more_list_item-img ibg"/>
                        @endif
                <div class="SingleNews__more_list_item_bottom">
                    <p class="SingleNews__more_list_item-title">
                    {{$el->NewsTitle}}
                    </p>
                    <time datetime="{{$el->published}}"><i data-svg="/img/clock.svg"></i> {{$el->published}}</time>
                </div>
            </a>
            @endforeach
        </div>
        <a href="{{route('news')}}" class="SingleNews__more-linkMore linkMore btn-mobile-block">{{trans('Все проекты')}}</a>
    </div>
</div>
</div>
@endsection