<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
class HomePage extends Model
{
   /**
     * @var string
     */
    protected $table = 'homepage';

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

        'MainTitle_en',
        'MainTitle_ru',
        'MainTitle_oz',

        'achievement_ru',
        'achievement_en',
        'achievement_oz',

        'servicesTitle_ru',
        'servicesTitle_en',
        'servicesTitle_oz',

        'about_ru',
        'about_en',
        'about_oz',

        'aboutImg_ru',
        'aboutImg_en',
        'aboutImg_oz',

        'ProjectsTitle_en',
        'ProjectsTitle_ru',
        'ProjectsTitle_oz',

        'NewsTitle_en',
        'NewsTitle_ru',
        'NewsTitle_oz',

        'ContactTitle_en',
        'ContactTitle_ru',
        'ContactTitle_oz',

        'ContactPhone_en',
        'ContactPhone_ru',
        'ContactPhone_oz',

        'ContactGraph_ru',
        'ContactGraph_en',
        'ContactGraph_oz',
        
        'ContactAddress_ru',
        'ContactAddress_en',
        'ContactAddress_oz',

        'ContactMap_ru',
        'ContactMap_en',
        'ContactMap_oz',
        'background_ru',
        'background_en',
        'background_oz',
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
   
    public function getMainTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "MainTitle_" . $locale;
        return $this->{$column};
    }
   
    public function getAboutAttribute()
    {
        $locale = App::getLocale();
        $column = "about_" . $locale;
        return $this->{$column};
    }

    public function getAboutImgAttribute()
    {
        $locale = App::getLocale();
        $column = "aboutImg_" . $locale;
        return $this->{$column};
    }
    
    public function getProjectsTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "ProjectsTitle_" . $locale;
        return $this->{$column};
    }

    public function getNewsTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "NewsTitle_" . $locale;
        return $this->{$column};
    }

    public function getContactTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "ContactTitle_" . $locale;
        return $this->{$column};
    }

    public function getContactPhoneAttribute()
    {
        $locale = App::getLocale();
        $column = "ContactPhone_" . $locale;
        return $this->{$column};
    }

    public function getContactGraphAttribute()
    {
        $locale = App::getLocale();
        $column = "ContactGraph_" . $locale;
        return $this->{$column};
    }

    public function getContactAddressAttribute()
    {
        $locale = App::getLocale();
        $column = "ContactAddress_" . $locale;
        return $this->{$column};
    }

    public function getContactMapAttribute()
    {
        $locale = App::getLocale();
        $column = "ContactMap_" . $locale;
        return $this->{$column};
    }

    public function getAchievementAttribute()
    {
        $locale = App::getLocale();
        $column = "achievement_" . $locale;
        return $this->{$column};
    }

    public function getServicesTitleAttribute()
    {
        $locale = App::getLocale();
        $column = "servicesTitle_" . $locale;
        return $this->{$column};
    }

    public function getBackgroundAttribute()
    {
        $locale = App::getLocale();
        $column = "background_" . $locale;
        return $this->{$column};
    }

   

}


