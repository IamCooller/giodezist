<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;

class Contacts extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'contacts';

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


        'Contacttitle_en',
        'Contacttitle_oz',
        'Contacttitle_ru',
        'Contacttel_en',
        'Contacttel_oz',
        'Contacttel_ru',
        'Contactgraphs_en',
        'Contactgraphs_ru',
        'Contactgraphs_oz',
        'Contactaddress_en',
        'Contactaddress_ru',
        'Contactaddress_oz',
        'Contactmap_en',
        'Contactmap_ru',
        'Contactmap_oz',
        'publish_at',

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

    public function getContacttitleAttribute()
    {
        $locale = App::getLocale();
        $column = "Contacttitle_" . $locale;
        return $this->{$column};
    }

    public function getContacttelAttribute()
    {
        $locale = App::getLocale();
        $column = "Contacttel_" . $locale;
        return $this->{$column};
    }

    public function getContactgraphsAttribute()
    {
        $locale = App::getLocale();
        $column = "Contactgraphs_" . $locale;
        return $this->{$column};
    }

    public function getContactaddressAttribute()
    {
        $locale = App::getLocale();
        $column = "Contactaddress_" . $locale;
        return $this->{$column};
    }

    public function getContactmapAttribute()
    {
        $locale = App::getLocale();
        $column = "Contactmap_" . $locale;
        return $this->{$column};
    }
}
