<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
class Tasks extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'tasks';

    /**
     * @var array
     */
    protected $fillable = [

        'title_en',
        'title_ru',
        'title_oz',

        'description_en',
        'description_ru',
        'description_oz',

        'keywords_en',
        'keywords_ru',
        'keywords_oz',

        'tasksTitle_en',
        'tasksTitle_ru',
        'tasksTitle_oz',

        'tasksSubTitle_en',
        'tasksSubTitle_ru',
        'tasksSubTitle_oz',

        'tasksContent_en',
        'tasksContent_ru',
        'tasksContent_oz',

        'tasksImg_ru',
        'tasksImg_en',
        'tasksImg_oz',



    ];

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function getTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "title_" . $locale;
        return $this->{$column};
    }

    public function getDescriptionAttribute()
    {
        $locale = App::getLocale();
        $column = "description_" . $locale;
        return $this->{$column};
    }

    public function getKeywordsAttribute()
    {
        $locale = App::getLocale();
        $column = "keywords_" . $locale;
        return $this->{$column};
    }

    public function getTasksTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "tasksTitle_" . $locale;
        return $this->{$column};
    }

   
    public function getTasksSubTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "tasksSubTitle_" . $locale;
        return $this->{$column};
    }

    public function getTasksContentAttribute($value)
    {
        $locale = App::getLocale();
        $column = "tasksContent_" . $locale;
        return $this->{$column};
    }




    public function getTasksImgAttribute()
    {
        $locale = App::getLocale();
        $column = "tasksImg_" . $locale;
        return $this->{$column};
        
    }


}
