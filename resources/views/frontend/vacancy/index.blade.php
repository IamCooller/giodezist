@extends('layouts.main')
@section('title')   @endsection
@section('description')   @endsection
@section('keywords')  @endsection
@section('content')
<section class="vacancy borderTop  bg-img-fix" style="background-image: url('/img/backgorundFix/background19.svg');">
            <div class="container" data-aos="fade-down">

                <ul class="breadcrumb">
                    <li><a href="route('home')">{{trans('Главная')}}</a></li>
                    <li><span>{{trans('Вакансии')}}</span></li>
                </ul>
                <div class="vacancy__wrapper">
                    <div class="title">{{trans('Вакансии')}}</div>
                    <div class="vacancy__list">
                        @foreach($vacancy as $el)
                        <div class="vacancy__list_item">
                            <button class="accordion">
                            <h2>{{$el->title}}</h2>
                            <div class="accordion__text">
                               <p>{{$el->subtitle}}</p>
                            </button>
                            <div class="panel" style="margin-top: -1px;">
                               {!! $el->content !!}
                                
                                <form method="POST" class="vacancy__form" id="contactform" name="myForm" enctype="multipart/form-data" onsubmit="return validate()">
                             @csrf
                                    <div class="vacancy__form-title">{{trans('Отправить свое резюме')}}</div>
                                    <div class="vacancy__form_wrapper">
                                    <div class="vacancy__form_wrapper_input">
                                            <input  type="hidden" name="vacancy" id="vacancy" value="{{$el->title}}"  />
                            
                                        </div>

                                        <div class="vacancy__form_wrapper_input">
                                            <input type="text" name="name" id="name" placeholder="{{trans('Ваше ФИО')}}" class="focus"/>
                                            <span class="error"></span>
                                        </div>

                                        <div class="vacancy__form_wrapper_input">
                                            <input type="email" name="email" id="email" placeholder="{{trans('Ваш e-mail')}}" class="focus"/>
                                            <span class="error"></span>
                                        </div>
                                        <div class="vacancy__form_wrapper_input">
                                            <input type="tel" name="tel" id="tel" placeholder="{{trans('Ваш телефон')}}" class="focus"/>
                                            <span class="error"></span>
                                        </div>



                                        <div class="file_upload" id="file">
                                            <button type="button"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M7.5 18C4.46 18 2 15.535 2 12.5C2 9.465 4.46 7 7.5 7H18C20.21 7 22 8.79 22 11C22 13.21 20.21 15 18 15H9.5C8.12 15 7 13.88 7 12.5C7 11.12 8.12 10 9.5 10H17V11.5H9.5C8.95 11.5 8.5 11.945 8.5 12.5C8.5 13.055 8.95 13.5 9.5 13.5H18C19.38 13.5 20.5 12.38 20.5 11C20.5 9.62 19.38 8.5 18 8.5H7.5C5.29 8.5 3.5 10.29 3.5 12.5C3.5 14.71 5.29 16.5 7.5 16.5H17V18H7.5Z" fill="#263475"></path>
                                                   </svg>
                                                   </button>
                                            <div>{{trans('Файл')}}</div>
                                            <p>{{trans('Максимальный размер файла 3.00мб')}}</p>
                                            <input type="file" name="file" id="file" class="focus">
                                            <span class="error"></span>
                                        </div>
                                        <div class="vacancy__form_wrapper_textarea">
                                            <textarea placeholder="Сообщение" type="text" name="subject" id="subject" class="focus"></textarea>
                                            <span class="error"></span>
                                        </div>

                                    </div>

                                    <button class="vacancy__form-button button" type="submit">{{trans('Отправить')}}</button>

                                </form>
                            </div>
                        </div>
                        @endforeach


                    </div>
                    {{$vacancy->links()}}
                </div>
            </div>
        </section>

        <script>
            function validate() {
   
   let a = document.forms["myForm"]["name"];
 if (a.value == "") {
     a.classList.add("errorInput");
     a.parentElement.querySelector('.error').innerText = "{{trans('Укажите ваше ФИО')}}";
   return false;
 }else{
     a.classList.remove('errorInput');
     a.parentElement.querySelector('.error').innerText='';
 }
 let c = document.forms["myForm"]["email"];
 if (c.value == "") {
     c.classList.add("errorInput");
     c.parentElement.querySelector('.error').innerText ="{{trans('Укажите ваш Email')}}";
   return false;
 }else{
     c.classList.remove('errorInput');
     c.parentElement.querySelector('.error').innerText='';
 }



 let j = document.forms["myForm"]["file"];
 if (j.value == "") {
     j.classList.add("errorInput");
     j.parentElement.querySelector('.error').innerText ="{{trans('Добавьте резюме')}}";
   return false;
 }else{
     j.classList.remove('errorInput');
     j.parentElement.querySelector('.error').innerText='';
 }

 if(j.files[0].size > 3145728 ){
     j.classList.add("errorInput");
     j.parentElement.querySelector('.error').innerText ="{{trans('Слишком большой файл')}}";
   return false;
 }else{
     j.classList.remove('errorInput');
     j.parentElement.querySelector('.error').innerText='';
 }
 
 let d = document.forms["myForm"]["tel"];
 document.getElementById("surname").oninput = trimSurname;
 

    d.value = d.value.replace(/ /g,'');

 let regex = /^((8|\+7|\+3)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;
 if ((d.value == "") || (!regex.test(d.value))) {

   d.classList.add("errorInput");
     d.parentElement.querySelector('.error').innerText ="{{trans('Укажите ваш телефон')}}";
   return false;
 }else{
     d.classList.remove('errorInput');
     d.parentElement.querySelector('.error').innerText='';
 }

 let x = document.forms["myForm"]["subject"];
 if (x.value == "") {

   x.classList.add("errorInput");
     x.parentElement.querySelector('.error').innerText ="{{trans('Введите сообщение')}}";
   return false;
 }else{
     x.classList.remove('errorInput');
     x.parentElement.querySelector('.error').innerText='';
 }


 
 }

        </script>
@endsection