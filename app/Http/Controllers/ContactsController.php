<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use App\Models\FormsCallback as FromsCallback;
use App\Models\Options;

class ContactsController extends Controller
{
      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts = Contacts::latest()->first();
        return view('frontend/contacts/index', compact('contacts'));
    }

    public function send(Request $request, FromsCallback $model)
    {

        $result = false;
          // выполнять код, если есть POST-запрос
    if ($request->isMethod('post')) {

        // валидация формы
        $request->validate([
            'tel'  => 'required|max:255',
            'email'   => 'required',
            'message' => 'nullable',
        ]);

        $model->tel = $request->tel;
        $model->email = $request->email;
        $model->subject = $request->message;
        $model->form = 'Форма контактов';

        $result = $model->save();
        
        $name = $request->email;
        $email = $request->email;
        $emailTo = Options::latest()->first()->value('email_form');
       
        $header = 'Форма контактов';
        $message = $request->message;;
        // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
        $mes = "Имя: $name \nE-mail: $email \nТема: $header \nТекст: $message";
        // Пытаемся отправить письмо по заданному адресу
        // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
        $send = mail($emailTo, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
     
    }


    if($result) {
        return back()->with('success','Сообщение было отправлено!');
    }
    }
}
