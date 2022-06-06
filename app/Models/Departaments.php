<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
class Departaments extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'departaments';

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

        'departamentsTitle_en',
        'departamentsTitle_ru',
        'departamentsTitle_oz',

        'departamentsSubTitle_en',
        'departamentsSubTitle_ru',
        'departamentsSubTitle_oz',

        'departamentsContent_en',
        'departamentsContent_ru',
        'departamentsContent_oz',

        'departamentsImg_ru',
        'departamentsImg_en',
        'departamentsImg_oz',

        'departamentsPhotos_en',
        'departamentsPhotos_ru',
        'departamentsPhotos_oz',

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

    public function getDepartamentsTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "departamentsTitle_" . $locale;
        return $this->{$column};
    }

   
    public function getDepartamentsSubTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "departamentsSubTitle_" . $locale;
        return $this->{$column};
    }

    public function getDepartamentsContentAttribute($value)
    {
        $locale = App::getLocale();
        $column = "departamentsContent_" . $locale;
        return $this->{$column};
    }




    public function getDepartamentsImgAttribute()
    {
        $locale = App::getLocale();
        $column = "departamentsImg_" . $locale;
        return $this->{$column};
        
    }

    public function getDepartamentsPhotosAttribute($value)
    {
        $locale = App::getLocale();
        $column = "departamentsPhotos_" . $locale;
        return $this->{$column};
        return preg_split('/,/', $value, -1, PREG_SPLIT_NO_EMPTY);
    }


   
   /*  public function setDepartamentsPhotosRuAttribute($images_ru)
    {
        $this->attributes['departamentsPhotos_ru'] = implode(',', $images_ru);
    }
    public function setDepartamentsPhotosOzAttribute($images_oz)
    {
        $this->attributes['departamentsPhotos_oz'] = implode(',', $images_oz);
    }
    public function setDepartamentsPhotosEnAttribute($images_en)
    {
     
        $this->attributes['departamentsPhotos_en'] = implode(',', $images_en);
    }
 */
}
