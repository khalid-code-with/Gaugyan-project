<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeedbackForm;
class FeedbackController extends Controller
{
    function feedback()
    {
        return view("front-end.feedback");
    }
}
