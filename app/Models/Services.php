<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServicesSingle;
use App;
class Services extends Model
{
       /**
     * @var string
     */
    protected $table = 'services';

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

        'ServiceTitle_ru',
        'ServiceTitle_en',
        'ServiceTitle_oz',

        'ServiceImg_ru',
        'ServiceImg_en',
        'ServiceImg_oz',

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
   
    public function getServiceNumberAttribute()
    {
        $locale = App::getLocale();
        $column = "ServiceNumber_" . $locale;
        return $this->{$column};
    }

    public function getServiceTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "ServiceTitle_" . $locale;
        return $this->{$column};
    }

    public function getServiceImgAttribute()
    {
        $locale = App::getLocale();
        $column = "ServiceImg_" . $locale;
        return $this->{$column};
    }

    public function service()
    {
        return $this->hasMany(ServicesSingle::class, 'service_id', 'id');
        
    }

   

}
