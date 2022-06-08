<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function() {

  Route::get('sitemap.xml','\App\Http\Controllers\SitemapController@index');


  Route::get('/sitemap', '\App\Http\Controllers\SitemapController@sitemap')->name('sitemap');

  Route::get('newlocale/{newlang}', function ($lang) {

    $referer = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
    $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

    //разбиваем на массив по разделителю
    $segments = explode('/', $parse_url);
  
    //Если URL (где нажали на переключение языка) содержал корректную метку языка
    if (in_array($segments[1], App\Http\Middleware\LocaleMiddleware::$languages)) {

        unset($segments[1]); //удаляем метку
    } 
    
    //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
    if ($lang != App\Http\Middleware\LocaleMiddleware::$mainLanguage){ 
        array_splice($segments, 1, 0, $lang); 
    }

    //формируем полный URL
    $url = env('APP_URL').implode("/", $segments);
    
    //если были еще GET-параметры - добавляем их
    if(parse_url($referer, PHP_URL_QUERY)){    
        $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
    }
    return redirect($url); //Перенаправляем назад на ту же страницу                            

  })->name('newlocale');

      Route::get('/', '\App\Http\Controllers\HomeController@index')->name('home');
      Route::post('/send', '\App\Http\Controllers\MainController@send')->name('send');
      Route::get('/about', '\App\Http\Controllers\AboutController@index')->name('about');
      Route::get('/contacts', '\App\Http\Controllers\ContactsController@index')->name('contacts');
      Route::post('/contacts', '\App\Http\Controllers\ContactsController@send');

      Route::get('/services', '\App\Http\Controllers\ServicesController@index')->name('services');
      Route::get('/services/{id}', '\App\Http\Controllers\ServicesController@show')->name('services.show');
      Route::get('/departments', '\App\Http\Controllers\DepartmentsController@index')->name('departments');
      Route::get('/departments/{id}', '\App\Http\Controllers\DepartmentsController@show')->name('departments.show');
      Route::get('/news', '\App\Http\Controllers\NewsController@index')->name('news');
      Route::get('/news/{id}', '\App\Http\Controllers\NewsController@show')->name('news.show');
      Route::get('/documents', '\App\Http\Controllers\DocumentsController@index')->name('documents');
      Route::get('/license', '\App\Http\Controllers\LicenseController@index')->name('license');
      Route::get('/objects', '\App\Http\Controllers\ObjectsController@index')->name('objects');
      Route::get('/objects/{id}', '\App\Http\Controllers\ObjectsController@show')->name('objects.show');
      Route::get('/photos', '\App\Http\Controllers\PhotosController@index')->name('photos');
      Route::get('/photos/{id}', '\App\Http\Controllers\PhotosController@show')->name('photos.show');
      Route::get('/videos', '\App\Http\Controllers\VideosController@index')->name('videos');
      Route::get('/videos/{id}', '\App\Http\Controllers\VideosController@show')->name('videos.show');
      Route::get('/structure', '\App\Http\Controllers\StructureController@index')->name('structure');
      Route::get('/tasks', '\App\Http\Controllers\TasksController@index')->name('tasks');
      Route::get('/vacancy', '\App\Http\Controllers\VacancyController@index')->name('vacancy');
      Route::post('/vacancy', '\App\Http\Controllers\VacancyController@send');
      
    });

    Route::get('/admin', function () {
      return view('auth');
    });
  Auth::routes(['register' => false]);




