<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeedbackForm;
class FeedbackStoredataController extends Controller
{
    public function feedbackstoredata(Request $req)
    {
        
        $table = new FeedbackForm();
        $table->name = $req->name;
        $table->email = $req->email;
        $table->phone = $req->phone;
        $table->message = $req->message;
        $table->save();   
        return redirect('feedback')->with('success', 'Feedback send is successfully');; 
    }
}
