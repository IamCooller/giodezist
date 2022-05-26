<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App;
use App\Models\FormsCallback as FromsCallback;
use App\Models\Options;
use Illuminate\Support\Facades\Storage;
class VacancyController extends Controller
{
      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locale = App::getLocale();
        $title = 'title_' . $locale;
        $vacancy = Vacancy::latest()->where( $title ,'!=',NULL)->paginate(
            $perPage = 4, $columns = ['*'], $pageName = 'vacancy', $onFirstPage = 0
        );
        return view('frontend/vacancy/index', compact('vacancy'));
    }
    public function send(Request $request, FromsCallback $model)
    {

        $result = false;
          // выполнять код, если есть POST-запрос
           // валидация формы
        $request->validate([
            'tel'  => 'required|max:255',
            'email'   => 'required',
            'name' =>'required|max:255',
            'file'=>'max:3000',
            'subject' => 'nullable',
        ]);

    if ($request->isMethod('post')) {

       
        $model->tel = $request->tel;
        $model->email = $request->email;
        $model->subject = $request->subject;
        $model->name = $request->name;
        $model->vacancy = $request->vacancy;
        
        

        $file = $request->file('file');
        $upload_folder = 'public/rezume/';

  
        $filename = $file->getClientOriginalName(); // image.jpg

        Storage::putFileAs($upload_folder, $file, $filename);
        
        $model->file = '/storage/rezume/'.$filename;
        

     
        $model->form = 'Форма Вакансии';

        $result = $model->save();
        
        $name = $request->email;
        $email = $request->email;
        $tel = $request->tel;
        $vacancy = $request->vacancy;
        $file = $request->file;
        $emailTo = Options::latest()->first()->value('email_form');
       
        $header = 'Форма Вакансии';
        $message = $request->subject;;
        // Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
        $mes = "ФИО: $name \nE-mail: $email\nТелефон: $tel\nВакансия: $vacancy\nРезюме: $file \nТема: $header \nТекст: $message";
        // Пытаемся отправить письмо по заданному адресу
        // Если нужно, чтобы письма всё время уходили на ваш адрес — замените первую переменную $email на свой адрес электронной почты
        $send = mail($emailTo, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
     
    }


    if($result) {
        return back()->with('success','Сообщение было отправлено!');
    }else{
        return back()->with('error','Произошла ошибка!');
    }
    }

}
