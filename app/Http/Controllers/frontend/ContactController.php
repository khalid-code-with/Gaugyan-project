<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gaugyan_store_data;

class ContactController extends Controller
{
    public function userdata(Request $req)
    {
        $table = new Gaugyan_store_data();
        $table->name = $req->name;
        $table->email = $req->email;
        $table->subject = $req->subject;
        $table->message = $req->message;
        $table->save();   
        return redirect()->route('contact_page')->with('send', ' Your Data  sent is successfully');
    }
    
}


