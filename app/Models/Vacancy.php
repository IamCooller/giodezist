<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
class Vacancy extends Model
{
    protected $table = 'vacancy';

    /**
     * @var array
     */
    protected $fillable = [

        'title_en',
        'title_ru',
        'title_oz',

        'subtitle_en',
        'subtitle_ru',
        'subtitle_oz',

        'content_en',
        'content_ru',
        'content_oz',



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

    public function getSubtitleAttribute()
    {
        $locale = App::getLocale();
        $column = "subtitle_" . $locale;
        return $this->{$column};
    }

    public function getContentAttribute()
    {
        $locale = App::getLocale();
        $column = "content_" . $locale;
        return $this->{$column};
    }
}
