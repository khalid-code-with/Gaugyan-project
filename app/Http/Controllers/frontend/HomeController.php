<?php

namespace App\Http\Controllers\Frontend; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage() 
    {
      
        return view("front-end.index");   // home page
    }

     function Aboutpage() 
    {
        return view("front-end.about_us");   // abouts page
    }

    function Services_page() 
    {

        // return "your services is return is successfully";
        return view("front-end.services");   // services page page
    }

    function nearestgoshala() 
    {
        return view("front-end.nearest_gaushala");   // nearest goshala
    }

    function Contact_us() 
    {
        return view("front-end.contact");   // contacts page
    }
   
    

    //wallet and voucher and refer and earn in for three at homepage
    
    function wallet() 
    {
        return view("front-end.wallet");   // for wallet view
       
    }

    function voucher() 
    {
        return view("front-end.vouchers");   //for voucher
    }
   
}
