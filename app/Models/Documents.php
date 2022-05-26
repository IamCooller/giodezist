<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TabDocuments;
use App;
class Documents extends Model
{
   /**
     * @var string
     */
    protected $table = 'documents';

    /**
     * @var array
     */
    protected $fillable = [
        'tab_ru',
        'tab_en',
        'tab_oz',
        'title_ru',
        'title_en',
        'title_oz',
        'file_ru',
        'file_en',
        'file_oz',
        'number_ru',
        'number_en',
        'number_oz',

        'regist_ru',
        'regist_en',
        'regist_oz',

        'count',
        'publish_at'
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function getTabAttribute()
    {
        $locale = App::getLocale();
        $column = "tab_" . $locale;
        return $this->{$column};
        }


    public function getTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "title_" . $locale;
        return $this->{$column};
    }
    public function getFileAttribute()
    {
        $locale = App::getLocale();
        $column = "file_" . $locale;
        return $this->{$column};
    }
    public function getNumberAttribute()
    {
        $locale = App::getLocale();
        $column = "number_" . $locale;
        return $this->{$column};
    }
    public function getRegistAttribute()
    {
        $locale = App::getLocale();
        $column = "regist_" . $locale;
        return $this->{$column};
    }
    public function category()
    {

       
     
        return $this->hasOne(TabDocuments::class, 'id', 'service_id');
    }
}
