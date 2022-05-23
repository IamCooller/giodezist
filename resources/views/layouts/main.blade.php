<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','“Гидропроект”')</title>
    <meta name="keywords" content="@yield('keywords','Гидропроект')">
    <meta name="description" content="@yield('description','Гидропроект')">
    <link rel="canonical" href="{{url()->current()}}"/>
    <!-- Scripts -->
    <script src="{{ asset('js/custom.js') }}" defer></script>







<!-- fontawesome -->
<script async defer src="https://kit.fontawesome.com/55e0136003.js" crossorigin="anonymous"></script>

<!-- reset css -->
<link rel="stylesheet" href="{{ asset('scss/reset.css') }}" />

<!-- libs css -->

<link rel="stylesheet" href="{{ asset('libs/aos/aos.css') }}" />
<link rel="stylesheet" href="{{ asset('libs/custom-scrollbar/mCustomScrollbar.min.css') }}" />
<link rel="stylesheet" href="{{ asset('libs/magnific-popup/magnific-popup.css') }}" />
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />




<!-- jQeury -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- libs js -->
<script src="{{ asset('libs/custom-scrollbar/mCustomScrollbar.js') }}"></script>
<script src="{{ asset('libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>
      <!-- header -->

      <header class="header">
        <div class="container">
            <div class="header__body">
                <div class="header__body_left">
             
                    <a href="{{route('home')}}" class="header__logo">
                        @if($options->logo)
                        <img src="/{{$options->logo}}" alt="Logo">
                        @else
                            <p>{{trans('Геодезисты')}}</p>
                        @endif
                    </a>
                    <ul class="header__menu">
                        <li><a href="{{route('services')}}">{{trans('Услуги')}}</a>
                            <li><a href="{{route('objects')}}">{{trans('Объекты')}}</a></li>
                            <li class="has-childs press_link"><a>{{trans('Пресс-центр')}}</a>
                                <div class="labgvidg-header__icon">
                                    <svg width="9" height="4" viewBox="0 0 9 4" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M4.5 4L0.5 0H8.5L4.5 4Z" fill="#101C5A"></path>
								</svg>
                                </div>
                                <div class="childs">
                                    <ul>
                                        <li><a href="{{route('news')}}">{{trans('Новости')}}</a></li>
                                        <li><a href="{{route('photos')}}">{{trans('Фотогалереи')}}</a></li>
                                        <li><a href="{{route('videos')}}">{{trans('Видеогалереи')}}</a></li>
                                    </ul>

                                </div>
                            </li>
                            <li class="has-childs about_link">
                                <a>{{trans('О нас')}}</a>
                                <div class="labgvidg-header__icon">
                                    <svg width="9" height="4" viewBox="0 0 9 4" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M4.5 4L0.5 0H8.5L4.5 4Z" fill="#101C5A"></path>
								</svg>
                                </div>
                                <div class="childs">
                                    <ul>
                                        <li><a href="{{route('about')}}">{{trans('О компании')}}</a></li>
                                        <li><a href="{{route('tasks')}}">{{trans('Цели и задачи')}}</a></li>
                                        <li><a href="{{route('structure')}}">{{trans('Структура')}}</a></li>
                                        <li><a href="{{route('departments')}}">{{trans('Отделы')}}</a></li>
                                        <li><a href="{{route('license')}}">{{trans('Лицензии и сертификаты')}}</a></li>
                                        <li><a href="{{route('documents')}}">{{trans('Документация')}}</a></li>
                                        <li><a href="{{route('vacancy')}}">{{trans('Вакансии')}}</a></li>
                                    </ul>

                                </div>
                            </li>
                            <li><a href="{{route('contacts')}}">{{trans('Контакты')}}</a></li>
                    </ul>
                    <div class="header__options">
                        <a href="mailto:{{$options->email}}" class="header__options-email">{{$options->email}}</a>
                        <a href="tel:{{$options->tel1}}" class="header__options-tel">{{$options->tel1}}</a>
                        <div class="header__options-lang labgvidg-header">

                            <div class="labgvidg-header__text">
                            @if (str_replace('_', '-', app()->getLocale()) == 'ru')
                                    RU
                                @elseif (str_replace('_', '-', app()->getLocale()) == 'en')
                                    EN
                                @elseif (str_replace('_', '-', app()->getLocale()) == 'oz')
                                    O'Z
                               @endif
                                <div class="labgvidg-header__icon">
                                    <svg width="9" height="4" viewBox="0 0 9 4" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M4.5 4L0.5 0H8.5L4.5 4Z" fill="#101C5A"/>
									</svg>
                                </div>
                            </div>

                            <div class="labgvidg-header__dropdown" style="display: none;">
                                <div class="labgvidg-header__dropdown-inner">
                                <a href="{{route('newlocale', ['newlang' => 'oz'])}}" class="labgvidg-header__dropdown-item">O’z</a>
                                    <a href="{{route('newlocale', ['newlang' => 'ru'])}}" class="labgvidg-header__dropdown-item">RU</a>
                                    <a href="{{route('newlocale', ['newlang' => 'en'])}}" class="labgvidg-header__dropdown-item">EN</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="header__body_right">
                    <a href="#callback__form" class="popup-modal header__button">
                        <img src="/img/telhead.svg" alt="tel"> {{trans('ЗАКАЗАТЬ ЗВОНОК')}}
                    </a>
                </div>


            </div>
            <div class="header__menu_mobile">

                <a href="{{route('home')}}" class="header__menu_mobile__logo">
                @if($options->logo)
                        <img src="/{{$options->logo}}" alt="Logo">
                        @else
                            <p>{{trans('Геодезисты')}}</p>
                        @endif
                </a>
                <div class="menu__icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M3 4H21V6H3V4ZM9 11H21V13H9V11ZM3 18H21V20H3V18Z" fill="#101C5A"/>
						</svg>
                </div>

                <div class="hamburger-menu">
                    <div class="hamburger-menu_wrapper">
                        <div class="hamburger-menu_top">
                            <a href="{{route('home')}}" class="header__menu_mobile__logo">
                            @if($options->logo)
                        <img src="/{{$options->logo}}" alt="Logo">
                        @else
                            <p>{{trans('Геодезисты')}}</p>
                        @endif
                            </a>
                            <button class="hamburger-menu__close">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.0002 10.586L16.9502 5.63599L18.3642 7.04999L13.4142 12L18.3642 16.95L16.9502 18.364L12.0002 13.414L7.05023 18.364L5.63623 16.95L10.5862 12L5.63623 7.04999L7.05023 5.63599L12.0002 10.586Z" fill="#101C5A"/>
									</svg>
										
								</button>
                        </div>

                        <div class="hamburger-menu__content">
                            <ul class="hamburger-menu__nav">
                                <li><a href="{{route('services')}}">{{trans('Услуги')}}</a>
                                    <li><a href="{{route('objects')}}">{{trans('Объекты')}}</a></li>
                                    <li class="has-childs press_link"><a>{{trans('Пресс-центр')}}</a>
                                        <div class="labgvidg-header__icon">
                                            <svg width="9" height="4" viewBox="0 0 9 4" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.5 4L0.5 0H8.5L4.5 4Z" fill="#101C5A"></path>
										</svg>
                                        </div>
                                        <div class="childs">
                                            <ul>
                                                <li><a href="{{route('news')}}">{{trans('Новости')}}</a></li>
                                                <li><a href="{{route('photos')}}">{{trans('Фотогалереи')}}</a></li>
                                                <li><a href="{{route('videos')}}">{{trans('Видеогалереи')}}</a></li>
                                            </ul>

                                        </div>
                                    </li>

                                    <li class="has-childs about_link">
                                        <a>{{trans('О нас')}}</a>
                                        <div class="labgvidg-header__icon">
                                            <svg width="9" height="4" viewBox="0 0 9 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.5 4L0.5 0H8.5L4.5 4Z" fill="#101C5A"></path>
                                        </svg>
                                        </div>
                                        <div class="childs">
                                            <ul>
                                                <li><a href="{{route('about')}}">{{trans('О компании')}}</a></li>
                                                <li><a href="{{route('tasks')}}">{{trans('Цели и задачи')}}</a></li>
                                                <li><a href="{{route('structure')}}">{{trans('Структура')}}</a></li>
                                                <li><a href="{{route('departments')}}">{{trans('Отделы')}}</a></li>
                                                <li><a href="{{route('license')}}">{{trans('Лицензии и сертификаты')}}</a></li>
                                                <li><a href="{{route('documents')}}">{{trans('Документация')}}</a></li>
                                                <li><a href="{{route('vacancy')}}">{{trans('Вакансии')}}</a></li>
                                            </ul>

                                        </div>
                                    </li>
                                    <li><a href="{{route('contacts')}}">{{trans('Контакты')}}</a></li>
                            </ul>
                            <div class="hamburger-menu__options">
                                <a href="tel:{{$options->tel1}}" class="hamburger-menu__options-tel">{{$options->tel1}}</a>
                                <a href="mailto:{{$options->email}}" class="hamburger-menu__options-email">{{$options->email}}</a>
                                <div class="header__options-lang labgvidg-header">

                                    <div class="labgvidg-header__text active">
                                    @if (str_replace('_', '-', app()->getLocale()) == 'ru')
                                    RU
                                @elseif (str_replace('_', '-', app()->getLocale()) == 'en')
                                    EN
                                @elseif (str_replace('_', '-', app()->getLocale()) == 'oz')
                                    O'Z
                               @endif
                                        <div class="labgvidg-header__icon">
                                            <svg width="9" height="4" viewBox="0 0 9 4" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M4.5 4L0.5 0H8.5L4.5 4Z" fill="#101C5A"/>
											</svg>
                                        </div>
                                    </div>

                                    <div class="labgvidg-header__dropdown" style="display: none;">
                                        <div class="labgvidg-header__dropdown-inner">
                                        <a href="{{route('newlocale', ['newlang' => 'oz'])}}" class="labgvidg-header__dropdown-item">O’z</a>
                                    <a href="{{route('newlocale', ['newlang' => 'ru'])}}" class="labgvidg-header__dropdown-item">RU</a>
                                    <a href="{{route('newlocale', ['newlang' => 'en'])}}" class="labgvidg-header__dropdown-item">EN</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <a href="#callback__form" class="popup-modal header__button hamburger-menu__button">
                            <img src="/img/telhead.svg" alt="tel"> {{trans('ЗАКАЗАТЬ ЗВОНОК')}}
                        </a>
                    </div>



                </div>
            </div>
        </div>


    </header>

    <main class="content">
            @yield('content')
        </main>
        <footer class="footer" data-aos="fade-down">
        <div class="container">
            <div class="footer__wrapper">
                <div class="footer__wrapper_col footer__projects">
                    <div class="footer-title">{{trans('Объекты')}}</div>
                    <ul class="footer__projects_list">
                        @foreach($objects as $object)
                        <li>
                            <a href="{{ route('objects.show',['id'=>$object->id]) }}" class="footer__projects_list-item"><img src="/{{$object->ObjectImg}}" alt="{{$object->TitleObject}}" /></a>
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{route('objects')}}" class="footer__projects-link">{{trans('Все Объекты')}}</a>
                </div>
                <div class="footer__wrapper_col footer__services">
                    <div class="footer-title">{{trans('УСЛУГИ')}}</div>
                    <nav class="footer-menu">
                        <a href="{{route('services')}}">{{trans('Инженерная геодезия')}}</a>
                        <a href="{{route('services')}}">{{trans('Лабораторные исследования')}}</a>
                        <a href="{{route('services')}}">{{trans('Инженерная геология')}}</a>
                        <a href="{{route('services')}}">{{trans('Геофизические исследования')}}</a>
                    </nav>

                </div>
                <div class="footer__wrapper_col footer__presscenter">
                    <div class="footer-title">{{trans('ПРЕСС-ЦЕНТР')}}</div>
                    <nav class="footer-menu">
                        <a href="{{route('news')}}">{{trans('Новости')}}</a>
                        <a href="{{route('photos')}}">{{trans('Фотогалерея')}}</a>
                        <a href="{{route('videos')}}">{{trans('Видеогалерея')}}</a>
                    </nav>
                </div>
                <div class="footer__wrapper_col footer__aboutcenter">
                    <div class="footer-title">{{trans('О НАС')}}</div>
                    <nav class="footer-menu">
                        <a href="{{route('about')}}">{{trans('О компании')}}</a>
                        <a href="{{route('tasks')}}">{{trans('Цели и задачи')}}</a>
                        <a href="{{route('structure')}}">{{trans('Структура')}}</a>
                        <a href="{{route('departments')}}">{{trans('Отделы')}}</a>
                        <a href="{{route('license')}}">{{trans('Лицензии и сертификаты')}}</a>
                        <a href="{{route('documents')}}">{{trans('Документация')}}</a>
                        <a href="{{route('vacancy')}}">{{trans('Вакансии')}}</a>
                    </nav>
                </div>
                <div class="footer__wrapper_col footer__contacts">
                    <div class="footer-title">{{trans('КОНТАКТЫ')}}</div>
                    <div class="footer__contacts_phone">
                    {!! $options->tel2 !!}
                    </div>
                    <a class="footer__contacts-email" href="emailto:{{$options->email2}}">{{$options->email2}}</a>
                    <div class="footer__contacts-address">
                    {!! $options->address !!}
                    </div>

                </div>

            </div>
            <div class="footer__bottom">
                <p>{{trans('Все права защищены 2022 ©')}}</p>
                <div class="footer__bottom_dev">
                    Developed by GoldenMinds
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<mask id="mask0_301_2659" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
						<rect width="28" height="28" fill="url(#pattern0)"/>
						</mask>
						<g mask="url(#mask0_301_2659)">
						<rect y="-2.21045" width="28" height="33.1579" fill="#3243A0"/>
						</g>
						<defs>
						<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
						<use xlink:href="#image0_301_2659" transform="scale(0.00740741)"/>
						</pattern>
						<image id="image0_301_2659" width="135" height="135" xlink:href="data:image/png;base64,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"/>
						</defs>
						</svg>

                </div>
            </div>
        </div>
    </footer>
    <form id="callback__form" class="callback mfp-hide">
        <div class="callback-title">
        {{trans('Заказать звонок')}}
        </div>
        <div class="callback-form">
            <div class="callback-form__input">
                <input type="text" name="name" placeholder="{{trans('Ваше имя')}}">
            </div>
            <div class="callback-form__input">
                <input type="text" name="phone" placeholder="{{trans('Ваш телефон')}}">
            </div>

            <input type="submit" class="callback-form__submit" value="{{trans('Отправить')}}">

            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
    </form>

    <script src="{{ asset('libs/aos/aos.js')}}"></script>
</body>
</html>