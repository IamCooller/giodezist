<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
use Carbon\Carbon;

class Photos extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'photos';

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

        'PhotosTitle_en',
        'PhotosTitle_ru',
        'PhotosTitle_oz',


        'PhotosContent_en',
        'PhotosContent_ru',
        'PhotosContent_oz',

        'PhotosImg_ru',
        'PhotosImg_en',
        'PhotosImg_oz',

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

    public function getPhotosTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "PhotosTitle_" . $locale;
        return $this->{$column};
    }

   

    public function getPhotosContentAttribute($value)
    {
        $locale = App::getLocale();
        $column = "PhotosContent_" . $locale;
        return $this->{$column};
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }

    public function getImagesAttribute()
    {
        $locale = App::getLocale();
        $column = "images_" . $locale;
        return $this->{$column};
    }


    public function setFixPhotosContentAttribute($value)
    {
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }

   /*  public function setPhotosContentRuAttribute($images_ru)
    {
        $this->attributes['PhotosContent_ru'] = implode(',', $images_ru);
    }
    public function setPhotosContentOzAttribute($images_oz)
    {
        $this->attributes['PhotosContent_oz'] = implode(',', $images_oz);
    }
    public function setPhotosContentEnAttribute($images_en)
    {
     
        $this->attributes['PhotosContent_en'] = implode(',', $images_en);
    }
 */
    public function getPhotosImgAttribute()
    {
        $locale = App::getLocale();
        $column = "PhotosImg_" . $locale;
        return $this->{$column};
    }

    public function getPublishedAttribute()
    {
        $locale = App::getLocale();
        $column = "published_" . $locale;
        return Carbon::parse($this->{$column})->format('d.m.Y');
    }


}
