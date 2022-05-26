<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
class Structure extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'structure';

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

        'structureTitle_en',
        'structureTitle_ru',
        'structureTitle_oz',

        'structureContent_en',
        'structureContent_ru',
        'structureContent_oz',

        'structureImg_ru',
        'structureImg_en',
        'structureImg_oz',


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

    public function getStructureTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "structureTitle_" . $locale;
        return $this->{$column};
    }

   
  

    public function getStructureContentAttribute($value)
    {
        $locale = App::getLocale();
        $column = "structureContent_" . $locale;
        return $this->{$column};
    }




    public function getStructureImgAttribute()
    {
        $locale = App::getLocale();
        $column = "structureImg_" . $locale;
        return $this->{$column};
        
    }



}
