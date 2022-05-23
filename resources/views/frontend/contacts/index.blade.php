@extends('layouts.main')
@section('title')   @endsection
@section('description')   @endsection
@section('keywords')  @endsection
@section('content')
<section class="MainContacts" data-aos="fade-down">
            <div class="container">
                <div class="MainContacts__wrapper">
                    <div class="MainContacts__wrapper_left">
                        <ul class="breadcrumb">
                            <li><a href="http://127.0.0.1:8000">Главная</a></li>
                            <li><span>Контакты</span></li>
                            <div class="MainContacts__informations">
                                <h1 class="title">Контакты</h1>
                                <div class="MainContacts__informations_tels">
                                    <a href="tel:+99893 200 25 63">+99893 200 25 63</a>
                                    <a href="tel:+99890 957 32 33">+99890 957 32 33</a>
                                </div>
                                <div class="MainContacts__informations_graphs">
                                    <p>График работы: Пн / Вт / Ср / Чт / Пт</p>
                                    <p> Рабочее время: с 9.00 до 18.00</p>
                                    <p> Перерыв: с 13.00 до 14.00</p>
                                    <p> Выходные дни: Сб / Вс</p>
                                </div>
                                <address>г.Ташкент, Яккасарайский район, Кичик халка йули, д.5</address>
                            </div>

                        </ul>
                    </div>

                    <div class="MainContacts__wrapper_rihgt">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1498.8888763218183!2d69.24947727201366!3d41.2919411909921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8afa9fa300a9%3A0x349455741394ce58!2z0JDQniAi0JPQuNC00YDQvtC_0YDQvtC10LrRgiI!5e0!3m2!1sru!2sge!4v1636987209094!5m2!1sru!2sge"
                            width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                </div>
            </div>


        </section>
        <section class="MainContactsFormSection bg-img-fix" style="background-image: url('img/backgorundFix/background20.svg');">
            <div class="container" data-aos="fade-down">
                <div class="MainContactsFormSection__wrapper">
                    <form method="POST" class="MainContactsForm">
                        <div class="MainContactsForm-title">Напишите нам</div>
                        <div class="MainContactsForm-subtitle">Если у вас остались вопросы, на которые мы сможем вам ответить в процессе разговора - напишите нам. Мы открыты для диалога!</div>
                        <div class="MainContactsForm__form_wrapper">

                            <div class="MainContactsForm__form_wrapper_input">
                                <input type="tel" name="tel" id="tel" placeholder="Ваш телефон" class="focus">
                                <span class="error"></span>
                            </div>
                            <div class="MainContactsForm__form_wrapper_input">
                                <input type="email" name="email" id="email" placeholder="Ваш e-mail" class="focus">
                                <span class="error"></span>
                            </div>
                            <div class="MainContactsForm__form_wrapper_textarea">
                                <textarea placeholder="Сообщение" type="text" name="subject" id="subject" class="focus"></textarea>
                                <span class="error"></span>
                            </div>

                        </div>

                        <button class="MainContactsForm__form-button button" type="submit">Отправить</button>

                    </form>
                </div>
            </div>
        </section>
@endsection