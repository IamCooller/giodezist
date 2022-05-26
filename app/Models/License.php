<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
class License extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'license';

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

        'licenseTitle_en',
        'licenseTitle_ru',
        'licenseTitle_oz',


        'licensePhotos_en',
        'licensePhotos_ru',
        'licensePhotos_oz',

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

    public function getlicenseTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "licenseTitle_" . $locale;
        return $this->{$column};
    }

   
    public function getlicensePhotosAttribute($value)
    {
        $locale = App::getLocale();
        $column = "licensePhotos_" . $locale;
        return $this->{$column};
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }



}
