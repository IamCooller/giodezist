<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Services;
use App;
class ServicesSingle extends Model
{
   
       /**
     * @var string
     */
    protected $table = 'servicesingle';

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

        'ServiceNumber_ru',
        'ServiceNumber_en',
        'ServiceNumber_oz',

        'MainService_en',
        'MainService_ru',
        'MainService_oz',

        'ServiceImg_ru',
        'ServiceImg_en',
        'ServiceImg_oz',

        'TitleService_en',
        'TitleService_ru',
        'TitleService_oz',

        'SubTitleService_ru',
        'SubTitleService_en',
        'SubTitleService_oz',

        'BlockOneService_en',
        'BlockOneService_ru',
        'BlockOneService_oz',

        'BlockTwoService_ru',
        'BlockTwoService_en',
        'BlockTwoService_oz',

        'BlockTwoImgService_en',
        'BlockTwoImgService_ru',
        'BlockTwoImgService_oz',


        'BlockThreeService_ru',
        'BlockThreeService_en',
        'BlockThreeService_oz',



    ];

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function category()
    {
        return $this->hasOne(Services::class, 'id', 'service_id');
    }
    
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
   
    public function getServiceNumberAttribute()
    {
        $locale = App::getLocale();
        $column = "ServiceNumber_" . $locale;
        return $this->{$column};
    }

    public function getMainServiceAttribute()
    {
        $locale = App::getLocale();
        $column = "MainService_" . $locale;
        return $this->{$column};
    }

    public function getServiceImgAttribute()
    {
        $locale = App::getLocale();
        $column = "ServiceImg_" . $locale;
        return $this->{$column};
    }

    public function getTitleServiceAttribute()
    {
        $locale = App::getLocale();
        $column = "TitleService_" . $locale;
        return $this->{$column};
    }

    public function getSubTitleServiceAttribute()
    {
        $locale = App::getLocale();
        $column = "SubTitleService_" . $locale;
        return $this->{$column};
    }

    public function getBlockOneServiceAttribute()
    {
        $locale = App::getLocale();
        $column = "BlockOneService_" . $locale;
        return $this->{$column};
    }

    public function getBlockTwoServiceAttribute()
    {
        $locale = App::getLocale();
        $column = "BlockTwoService_" . $locale;
        return $this->{$column};
    }

    public function getBlockTwoImgServiceAttribute()
    {
        $locale = App::getLocale();
        $column = "BlockTwoImgService_" . $locale;
        return $this->{$column};
    }

    public function getBlockThreeServiceAttribute()
    {
        $locale = App::getLocale();
        $column = "BlockThreeService_" . $locale;
        return $this->{$column};
    }


}

