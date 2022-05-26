<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
class About extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'about';

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

        'aboutTitle_en',
        'aboutTitle_ru',
        'aboutTitle_oz',

        'aboutSubTitle_en',
        'aboutSubTitle_ru',
        'aboutSubTitle_oz',

        'aboutContent_en',
        'aboutContent_ru',
        'aboutContent_oz',

        'aboutImg_ru',
        'aboutImg_en',
        'aboutImg_oz',

        'aboutPhotos_en',
        'aboutPhotos_ru',
        'aboutPhotos_oz',

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

    public function getAboutTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "aboutTitle_" . $locale;
        return $this->{$column};
    }

   
    public function getAboutSubTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "aboutSubTitle_" . $locale;
        return $this->{$column};
    }

    public function getAboutContentAttribute($value)
    {
        $locale = App::getLocale();
        $column = "aboutContent_" . $locale;
        return $this->{$column};
    }




    public function getAboutImgAttribute()
    {
        $locale = App::getLocale();
        $column = "aboutImg_" . $locale;
        return $this->{$column};
        
    }

    public function getAboutPhotosAttribute($value)
    {
        $locale = App::getLocale();
        $column = "aboutPhotos_" . $locale;
        return $this->{$column};
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }


   
    public function setAboutPhotosRuAttribute($images_ru)
    {
        $this->attributes['aboutPhotos_ru'] = implode(',', $images_ru);
    }
    public function setAboutPhotosOzAttribute($images_oz)
    {
        $this->attributes['aboutPhotos_oz'] = implode(',', $images_oz);
    }
    public function setAboutPhotosEnAttribute($images_en)
    {
     
        $this->attributes['aboutPhotos_en'] = implode(',', $images_en);
    }

}
