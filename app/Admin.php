<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Options;
class Admin extends Model
{
    use Notifiable;
 
    protected $admin;
    protected $email;
     
    public function __construct() {
        $this->admin = 'Admin';
        $this->email =  Options::latest()->first()->value('email_form');
        
    }
}

?>