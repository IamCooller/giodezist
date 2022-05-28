<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function isOptionsAdmin()
    {
        return $this->hasRole('options');
    }
    public function isObjectsAdmin()
    {
        return $this->hasRole('objects');
    }
    public function isContactsAdmin(){
        return $this->hasRole('contacts');
    }
    public function isFormsAdmin()
    {
        return $this->hasRole('forms_callbacks');
    }
    public function isHomeAdmin()
    {
        return $this->hasRole('home_pages');
    }
    public function isAboutAdmin()
    {
        return $this->hasRole('abouts');
    }
    public function isTasksAdmin()
    {
        return $this->hasRole('tasks');
    }
    public function isStructureAdmin()
    {
        return $this->hasRole('structures');
    }
    public function isDepartsAdmin()
    {
        return $this->hasRole('departaments');
    }
  
    public function isLicensesAdmin()
    {
        return $this->hasRole('licenses');
    }
    public function isDocsAdmin()
    {
        return $this->hasRole('documents');
    }
    public function isVacancyAdmin()
    {
        return $this->hasRole('vacancies');
    }
    public function isNewsAdmin()
    {
        return $this->hasRole('news');
    }
    public function isPhotosAdmin()
    {
        return $this->hasRole('photos');
    }
    public function isVideoAdmin()
    {
        return $this->hasRole('videos');
    }
    public function isSuperAdmin()
    {    
        return $this->hasRole('admin');
    }

    public function isServiceAdmin()
    {
        return $this->hasRole('services');
    }
    
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
