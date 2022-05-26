<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
use Carbon\Carbon;
class Videos extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'Videos';

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

        'VideosTitle_en',
        'VideosTitle_ru',
        'VideosTitle_oz',


        'VideosContent_en',
        'VideosContent_ru',
        'VideosContent_oz',

        'VideosImg_ru',
        'VideosImg_en',
        'VideosImg_oz',

        'published_ru',
        'published_en',
        'published_oz',
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

    public function getVideosTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "VideosTitle_" . $locale;
        return $this->{$column};
    }

   

    public function getVideosContentAttribute($value)
    {
        $locale = App::getLocale();
        $column = "VideosContent_" . $locale;
        return $this->{$column};
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }

    public function getImagesAttribute()
    {
        $locale = App::getLocale();
        $column = "images_" . $locale;
        return $this->{$column};
    }



    public function getVideosImgAttribute()
    {
        $locale = App::getLocale();
        $column = "VideosImg_" . $locale;
        return $this->{$column};
    }

    public function getPublishedAttribute()
    {
        $locale = App::getLocale();
        $column = "published_" . $locale;
        return Carbon::parse($this->{$column})->format('d.m.Y');
    }


}
