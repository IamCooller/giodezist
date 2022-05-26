<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
class Options extends Model
{
    /**
     * @var string
     */
    protected $table = 'options';

    /**
     * @var array
     */
    protected $fillable = [
     
        'address_en',
        'address_ru',
        'address_oz',

        'tel1_en',
        'tel1_ru',
        'tel1_oz',

        'tel2_en',
        'tel2_ru',
        'tel2_oz',

        'email_en',
        'email_ru',
        'email_oz',

        'email2_en',
        'email2_ru',
        'email2_oz',

        'email_form',
        'logo_en',
        'logo_ru',
        'logo_oz',
        
        'google_analyt',
        'yandex_met',
        'nip',
        'favicon',
        'publish_at',

    ];

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function getlogoAttribute()
    {
        $locale = App::getLocale();
        $column = "logo_" . $locale;
        return $this->{$column};
    }
  


    public function getAddressAttribute()
    {
        $locale = App::getLocale();
        $column = "address_" . $locale;
        return $this->{$column};
    }

    public function getTel1Attribute()
    {
        $locale = App::getLocale();
        $column = "tel1_" . $locale;
        return $this->{$column};
    }

    public function getTel2Attribute()
    {
        $locale = App::getLocale();
        $column = "tel2_" . $locale;
        return $this->{$column};
    }

    public function getEmailAttribute()
    {
        $locale = App::getLocale();
        $column = "email_" . $locale;
        return $this->{$column};
    }

    public function getEmail2Attribute()
    {
        $locale = App::getLocale();
        $column = "email2_" . $locale;
        return $this->{$column};
    }


   


   

}
