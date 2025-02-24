<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gaugyan_store_data extends Model  
{  
    protected $table = 'gaugyan_contacts';  

    protected $fillable = [
        'name',  
        'email',  
        'subject',  
        'message',  
        
    ];  
}  
