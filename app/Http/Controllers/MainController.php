<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\FormsCallback as FromsCallback;
use App\Models\Options;
use App\Notifications\InboxMessage;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use App\Admin;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, FromsCallback $model)
    {
               $result = false;
          // выполнять код, если есть POST-запрос
    if ($request->isMethod('post')) {

        // валидация формы
        $request->validate([
            'email'   => 'required',
        ]);

        $model->email = $request->email;
        $model->form = 'Форма Подписки';

        $result = $model->save();
        

        $email = $request->email;
        $emailTo = Options::latest()->first()->value('email_form');
       
        $header = 'Форма Подписки';
        // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
        $mes = " \nE-mail: $email \nТема: $header \nТекст: $email";
        // Пытаемся отправить письмо по заданному адресу
        // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
        $send = mail($emailTo, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
     
    }


    if($result) {
        return back()->with('success','Подписка оформлена!');
    }
    }

    public function send(Request $request, FromsCallback $model)
    {
       
               $result = false;
          // выполнять код, если есть POST-запрос
    if ($request->isMethod('post')) {
        
        // валидация формы
        $request->validate([
            'phone'   => 'required',
            'name'   => 'required',
        ]);
     
        $model->name = $request->name;
        $model->tel = $request->phone;
        $model->form = 'Форма Заказать звонок';
    
        $result = $model->save();
        

        $name = $request->name;
        $tel = $request->phone;
        $emailTo = Options::latest()->first()->value('email_form');
       
        $header = 'Форма Заказать звонок';
        // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
        $mes = " \nИмя: $name \nТема: $header  \nТелефон: $tel";
        // Пытаемся отправить письмо по заданному адресу
        // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
        $send = mail($emailTo, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$name");
     
    }


    if($result) {
       //send the admin an notification
    
        return back()->with('success','Сообщение отправлено!');
    }else{
        return back()->with('error','Произошла ошибка!');
    }

    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
