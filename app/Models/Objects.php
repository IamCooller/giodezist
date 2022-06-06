<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;

class Objects extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'objects';

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

        'TitleObject_en',
        'TitleObject_ru',
        'TitleObject_oz',

        'SubTitleObject_en',
        'SubTitleObject_ru',
        'SubTitleObject_oz',

        'ObjectImg_ru',
        'ObjectImg_en',
        'ObjectImg_oz',

        'ObjectNumber_ru',
        'ObjectNumber_en',
        'ObjectNumber_oz',

        'ContentObject_en',
        'ContentObject_ru',
        'ContentObject_oz',

        'PhotosObject_en',
        'PhotosObject_ru',
        'PhotosObject_oz',

        'footer_en',
        'footer_ru',
        'footer_oz',
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

    public function getTitleObjectAttribute()
    {
        $locale = App::getLocale();
        $column = "TitleObject_" . $locale;
        return $this->{$column};
    }

    public function getSubTitleObjectAttribute()
    {
        $locale = App::getLocale();
        $column = "SubTitleObject_" . $locale;
        return $this->{$column};
    }

    public function getObjectImgAttribute()
    {
        $locale = App::getLocale();
        $column = "ObjectImg_" . $locale;
        return $this->{$column};
    }

    public function getObjectNumberAttribute()
    {
        $locale = App::getLocale();
        $column = "ObjectNumber_" . $locale;
        return $this->{$column};
    }

    public function getContentObjectAttribute()
    {
        $locale = App::getLocale();
        $column = "ContentObject_" . $locale;
        return $this->{$column};
    }

    public function getPhotosObjectAttribute($value)
    {
        $locale = App::getLocale();
        $column = "PhotosObject_" . $locale;
        return $this->{$column};
    }

    public function getFooterAttribute()
    {
        $locale = App::getLocale();
        $column = "footer_" . $locale;
        return $this->{$column};
    }
  
/*     public function setPhotosObjectRuAttribute($images_ru)
    {
        $this->attributes['PhotosObject_ru'] = implode(',', $images_ru);
    }
    public function setPhotosObjectOzAttribute($images_oz)
    {
        $this->attributes['PhotosObject_oz'] = implode(',', $images_oz);
    }
    public function setPhotosObjectEnAttribute($images_en)
    {
     
        $this->attributes['PhotosObject_en'] = implode(',', $images_en);
    } */
}
