@extends('layouts.main')
@section('title')   @endsection
@section('description')   @endsection
@section('keywords')  @endsection
@section('content')
<section class="SingleDepartaments SingleObjects ">



<div class="SingleDepartaments__main SingleObjects__main" data-aos="fade-down">
    <div class="container">
        <div class="SingleDepartaments__main_wrapper SingleObjects__main_wrapper">
            <div class="SingleDepartaments__main_left SingleObjects__main_left">
                <ul class="breadcrumb breadcrumb-single">
                    <li><a href="http://127.0.0.1:8000">Главная</a></li>

                    <li><span>О компании</span></li>
                </ul>
                <h1 class="SingleDepartaments-title SingleObjects-title">О компании
                </h1>
                <h2 class="SingleDepartaments-subtitle SingleObjects-subtitle">23 сотрудника</h2>
            </div>
            <div class="SingleDepartaments__main_right SingleObjects__main_right">
                <img src="img/objects/1.png" alt="">
            </div>
        </div>

    </div>
</div>
<div class="SingleDepartaments__one SingleObjects__one bg-img-fix" style="background-image: url('img/backgorundFix/background17.svg');">
    <div class="container" data-aos="fade-down">
        <div class="SingleDepartaments__one_wrapper SingleObjects__one_wrapper">

            <p>В работах философа Конфуция, которые были написаны в 600 г. до н. э., были описаны китайские скважины для добычи воды и соляных рассолов. Такие скважины сооружались с помощью метода ударного бурения. Время от времени китайцы в
                ходе бурения натыкались на нефть или газ, как, например, в Сычуане из скважин глубиной около 240 м добывали газ, который использовался для выпаривания соли[источник не указан 139 дней].
            </p>
            <ul>
                <li>В работах философа Конфуция, которые были написаны в 600 г. до н. э.</li>
                <li>До середины XIX века нефть добывалась</li>
                <li>В работах философа Конфуция, которые были написаны в 600 г. до н. э.</li>
            </ul>
        </div>
    </div>
</div>
<div class="AboutPhotos SingleDepartaments__photos SingleObjects__photos">
    <div class="container" data-aos="fade-down">
        <div class="SingleDepartaments__photos_wrapper SingleObjects__photos_wrapper">
            <h2 class="SingleDepartaments__photos-title SingleObjects__photos-title title">фотогалерея</h2>
            <div class="SingleDepartaments__photos_wrapper_slider SingleObjects__photos_wrapper_slider">
                <div class="SingleDepartaments__photos_list SingleObjects__photos_list">
                    <div class="swiper-wrapper">
                        <div class="SingleDepartaments__photos_list-itme SingleObjects__photos_list-item swiper-slide">
                            <img src="img/objects/Каневская ГЭС 2.png" alt="">
                        </div>
                        <div class="SingleDepartaments__photos_list-itme SingleObjects__photos_list-item swiper-slide">
                            <img src="img/objects/Каневская ГЭС 3.png" alt="">
                        </div>
                        <div class="SingleDepartaments__photos_list-itme SingleObjects__photos_list-item swiper-slide">
                            <img src="img/objects/Каневская ГЭС 4.png" alt="">
                        </div>
                        <div class="SingleDepartaments__photos_list-itme SingleObjects__photos_list-item swiper-slide">
                            <img src="img/objects/Каневская ГЭС 2.png" alt="">
                        </div>
                        <div class="SingleDepartaments__photos_list-itme SingleObjects__photos_list-item swiper-slide">
                            <img src="img/objects/Каневская ГЭС 3.png" alt="">
                        </div>
                        <div class="SingleDepartaments__photos_list-itme SingleObjects__photos_list-item swiper-slide">
                            <img src="img/objects/Каневская ГЭС 4.png" alt="">
                        </div>
                    </div>
                    <div class="slaider__buttons buttons-slaider">
                        <div class="buttons-slaider__reght reght-buttons">
                            <div class="reght-buttons__button reght-buttons__button-prev">
                                <i class="fas fa-arrow-left"></i>
                            </div>
                            <div class="reght-buttons__button reght-buttons__button-next">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                        <div class="buttons-slaider__line"></div>
                        <div class="buttons-slaider__numbers">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

</section>
@endsection