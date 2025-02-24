<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gaugyan_store_data;

class ContactController extends Controller
{
    function userdata(Request $req)
    {
        $table = new Gaugyan_store_data();
        $table->name = $req->name;
        $table->email = $req->email;
        $table->subject = $req->subject;
        $table->message = $req->message;
        $table->save();   
        return redirect('/'); // after submit the data again redirct on home page
    }
}


