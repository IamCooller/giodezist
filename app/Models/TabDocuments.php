<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Documents;
use App;
class TabDocuments extends Model
{
           /**
     * @var string
     */
    protected $table = 'tablicense';

    /**
     * @var array
     */
    protected $fillable = [

        'TablicenseNumber_ru',
        'TablicenseNumber_en',
        'TablicenseNumber_oz',

        'TablicenseTitle_ru',
        'TablicenseTitle_en',
        'TablicenseTitle_oz',



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
   
    public function getTablicenseNumberAttribute()
    {
        $locale = App::getLocale();
        $column = "TablicenseNumber_" . $locale;
        return $this->{$column};
    }

    public function getTablicenseTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "TablicenseTitle_" . $locale;
        return $this->{$column};
    }



    public function service()
    {
        return $this->hasMany(Documents::class, 'service_id', 'id')->orderBy('count', 'desc');
        
    }

}
