<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
use Carbon\Carbon;
class News extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'news';

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

        'NewsTitle_en',
        'NewsTitle_ru',
        'NewsTitle_oz',

        'NewsSubTitle_en',
        'NewsSubTitle_ru',
        'NewsSubTitle_oz',

        'NewsContent_en',
        'NewsContent_ru',
        'NewsContent_oz',

        'NewsImg_ru',
        'NewsImg_en',
        'NewsImg_oz',

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

    public function getNewsTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "NewsTitle_" . $locale;
        return $this->{$column};
    }

    public function getNewsSubTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "NewsSubTitle_" . $locale;
        return $this->{$column};
    }

    public function getNewsContentAttribute()
    {
        $locale = App::getLocale();
        $column = "NewsContent_" . $locale;
        return $this->{$column};
    }

    public function getNewsImgAttribute()
    {
        $locale = App::getLocale();
        $column = "NewsImg_" . $locale;
        return $this->{$column};
    }

    public function getPublishedAttribute()
    {
        $locale = App::getLocale();
        $column = "published_" . $locale;
        return Carbon::parse($this->{$column})->format('d.m.Y');
    }


}
