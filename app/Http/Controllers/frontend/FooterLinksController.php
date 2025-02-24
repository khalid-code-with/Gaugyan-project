<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//this controller include all footer link pages
class FooterLinksController extends Controller
{ 
    //use full links include in footer part

    function Term_and_condition()  //term and condion 
    {
     return view("front-end.terms_and_conditions");
} 

// Policies & Terms include in footer part

function Privacy_and_policy()  //privacy and policy
{
 return view("front-end.privacy_policy");
} 

function Disclaimber()  //disclaimber
{
 return view("front-end.disclaimer");
} 

function Refund_policy()  //refund policy
{
 return view("front-end.refund_policy");
} 

function Shipping_policy()  //Shipping policy
{
 return view("front-end.shipping_policy");
} 

function Return_policy()  //refund policy
{
  return view("front-end.return_policy");
} 




//------ Our Services include in footer part-------

function Cow_holistic()  //Cow Holistic View
{
  return view("front-end.cow_holistic_view");
} 

function Healing_page()  //Healing page View
{
  return view("front-end.Healing");
} 

function Santana_page()  //santana  page
{
  return view("front-end.sanatan");
} 

function geeta_page()  //geeta page
{
  return view("front-end.geeta");
} 

function yoga_page()  //geeta & fitness page
{
  return view("front-end.yoga");
} 


// =====Inspiration Hub include all links in footer part ----

function Social_walfare()  //geeta & fitness page
{
  return view("front-end.social");
} 


function Dialogues_Podcast()  // Dialogues_Podcast
{
  return view("front-end.podcast");
} 


function Interview_questions()  // interview questions
{
  return view("front-end.interview");
} 

function great_personalities()  // great personalities
{
  return view("front-end.great_personalities_and_places");
} 


function exam_content_scholarship()  // exam content for scholarship prizes
{
  return view("front-end.cow_holistic_view");
} 

}