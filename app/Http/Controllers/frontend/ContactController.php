<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gaugyan_store_data;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

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

        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message,
        ];

        
        Mail::to($req->email)->send(new WelcomeEmail($data));

        return redirect()->route('contact_page')->with('send', 'Your Data sent successfully');
    }
}



