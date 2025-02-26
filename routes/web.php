<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\FooterLinksController;
use App\Http\Controllers\frontend\RefernEarnController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\FeedbackController; //run view on this controller
use App\Http\Controllers\frontend\FeedbackStoredataController; //store data on this controller

// ======= these all header links are available here
Route::get('/', [HomeController::class, 'homepage'])->name('homepage'); //home page 
Route::get('/abouts_page', [HomeController::class, 'Aboutpage'])->name('about_us');  //abouts  page 
Route::get('/Services_pages', [HomeController::class, 'Services_page'])->name('service_part');
Route::get('/nearestgoshala', [HomeController::class, 'nearestgoshala'])->name("nearest_goshala");  //nearest goshala page 
Route::get('/Contact_page', [HomeController::class, 'Contact_us'])->name('contact_page');  //contacts  page 


// ------=====//
Route::post('storedata', [ContactController::class, 'userdata']); // store user data of contact page at this route
//------///


//====wallet and voucher and refer and earn in for three at homepage
Route::get('/wallet', [HomeController::class, 'wallet'])->name('wallet');  //for wallet page
Route::get('/voucher', [HomeController::class, 'voucher'])->name('voucher');  //for voucher page




// here footer links controller available here
//===== Use full page in footer
Route::get('/Term_and_condition_page', [FooterLinksController::class, 'Term_and_condition'])->name("term_condition");  //term and condition page 


//====== Policies & Terms include in footer part
Route::get('/Privacy_and_policy_page', [FooterLinksController::class, 'Privacy_and_policy'])->name("Privacy_policy");  //privacy and policy 
Route::get('/Disclaimber_page', [FooterLinksController::class, 'Disclaimber'])->name("Disclaimber");  //disclaimber page
Route::get('/Refund_policy_page', [FooterLinksController::class, 'Refund_policy'])->name("refund_policy");  //refund policy
Route::get('/Shipping_policy_page', [FooterLinksController::class, 'Shipping_policy'])->name("shipping_policy");  //shipping policy
Route::get('/Return_policy_page', [FooterLinksController::class, 'Return_policy'])->name("Return_policy");  //shipping policy



//====== Our Services include in footer part
Route::get('/Cow_holistic_page', [FooterLinksController::class, 'Cow_holistic'])->name("cow_holistic_part");  //Cow Holistic View
Route::get('/Healing_part', [FooterLinksController::class, 'Healing_page'])->name("headings");  //Healing page View
Route::get('/Santana_part', [FooterLinksController::class, 'Santana_page'])->name("santana");  //santana page 
Route::get('/geeta_part', [FooterLinksController::class, 'geeta_page'])->name("geeta");  //geeta page 
Route::get('/yoga_part', [FooterLinksController::class, 'yoga_page'])->name("yoga");  //yoga $ fitness page 




// =====Inspiration Hub include all links in footer part ----
Route::get('/Social_walfare', [FooterLinksController::class, 'Social_walfare'])->name("social_walfare");  //Social walfare 
Route::get('/Podcast_part', [FooterLinksController::class, 'Dialogues_Podcast'])->name("podcast");  //Dialogues_Podcast
Route::get('/Interview_part', [FooterLinksController::class, 'Interview_questions'])->name("interview_questions");  //interview questions and etc
Route::get('/great_personalities_part', [FooterLinksController::class, 'great_personalities'])->name("great_persanility");  //interview questions and etc
Route::get('/exam_content_scholarship_part', [FooterLinksController::class, 'exam_content_scholarship'])->name("exam_content");  // exam content for scholarship prizes




//======= this controller define for feedback in our project
Route::get('/feedback', [FeedbackController::class, 'feedback'])->name("feedback");  //this controller define for feedback
Route::post('/feedback_storedata', [FeedbackStoredataController::class, 'feedbackstoredata']);  //this controller define for feedback



//====== this is include refer and earn and concept of gaugyan
Route::get('/Refer_earn', [RefernEarnController::class, 'Refer_and_earn'])->name("refer_and_earn");  //this controller define for feedback
Route::get('/Concept_gaugyan', [RefernEarnController::class, 'Concept_gaugyan'])->name("Concept_gaugyan");  //include concept of gaugyan


Route::get('/mail', function () {
    return view('mail.email');
});
