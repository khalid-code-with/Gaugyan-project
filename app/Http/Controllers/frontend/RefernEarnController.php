<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RefernEarnController extends Controller
{
    function Refer_and_earn() //this is include refer and earn
    {
        return view("front-end.refer_and_earn");
    }

    function Concept_gaugyan() //this is include file concept fo gaugyan
    {
        return view("front-end.concept");
    }

}