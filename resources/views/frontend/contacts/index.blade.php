@extends('layouts.main')
@section('title') {{$contacts->title}}  @endsection
@section('description') {{$contacts->description}}  @endsection
@section('keywords') {{$contacts->keywords}}  @endsection
@section('content')
<section class="MainContacts" data-aos="fade-down">
            <div class="container">
                <div class="MainContacts__wrapper">
                    <div class="MainContacts__wrapper_left">
                        <ul class="breadcrumb">
                            <li><a href="{{route('home')}}">{{trans('Главная')}}</a></li>
                            <li><span>{{trans('Контакты')}}</span></li>
                            <div class="MainContacts__informations">
                                <h1 class="title">{{$contacts->Contacttitle}}</h1>
                                <div class="MainContacts__informations_tels">
                                    {!! $contacts->Contacttel !!}
                                </div>
                                <div class="MainContacts__informations_graphs">
                                    {!! $contacts->Contactgraphs !!}
                                </div>
                                @if($contacts->Contactaddress)
                                <address>{{$contacts->Contactaddress}}</address>
                                @endif
                            </div>

                        </ul>
                    </div>
            
                    @if($contacts->Contactmap)
                    <div class="MainContacts__wrapper_rihgt">
                      
                            {!! $contacts->Contactmap !!}
                        
                    </div>
                    @endif
                </div>
            </div>


        </section>
        <section class="MainContactsFormSection bg-img-fix" style="background-image: url('/img/backgorundFix/background20.svg');">
            <div class="container" data-aos="fade-down">
                <div class="MainContactsFormSection__wrapper">
         
                    <form method="POST" class="MainContactsForm" id="contactform" name="myForm" onsubmit="return validate()">
                    
                    {{ csrf_field() }}
                        <div class="MainContactsForm-title">{{trans('Напишите нам')}}</div>
                        <div class="MainContactsForm-subtitle">{{trans('Если у вас остались вопросы, на которые мы сможем вам ответить в процессе разговора - напишите нам. Мы открыты для диалога!')}}</div>
                        <div class="MainContactsForm__form_wrapper">

                            <div class="MainContactsForm__form_wrapper_input">
                                <input type="tel" name="tel" id="tel" placeholder="{{trans('Ваш телефон')}}" class="focus">
                                <span class="error"></span>
                            </div>
                            <div class="MainContactsForm__form_wrapper_input">
                                <input type="email" name="email" id="email" placeholder="{{trans('Ваш e-mail')}}" class="focus">
                                <span class="error"></span>
                            </div>
                            <div class="MainContactsForm__form_wrapper_textarea">
                                <textarea placeholder="{{trans('Сообщение')}}" type="text" name="message" id="message" class="focus"></textarea>
                                <span class="error"></span>
                            </div>

                        </div>

                        <button class="MainContactsForm__form-button button" type="submit">{{trans('Отправить')}}</button>

                    </form>
                </div>
            </div>
        </section>


        <script>
  function validate() {

    let c = document.forms["myForm"]["email"];
    if (c.value == "") {
        c.classList.add("errorInput");
        c.parentElement.querySelector('.error').innerText ="{{trans('Укажите ваш Email')}}";
      return false;
    }else{
        c.classList.remove('errorInput');
        c.parentElement.querySelector('.error').innerText='';
    }
    let d = document.forms["myForm"]["tel"];
    let regex = /^((8|\+7|\+3)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/;



    if ((d.value == "") || (!regex.test(d.value))) {

      d.classList.add("errorInput");
        d.parentElement.querySelector('.error').innerText ="{{trans('Укажите ваш телефон')}}";
      return false;
    }else{
        d.classList.remove('errorInput');
        d.parentElement.querySelector('.error').innerText='';
    }

    let x = document.forms["myForm"]["message"];
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