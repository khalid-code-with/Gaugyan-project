<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackForm extends Model
{
    protected $table = 'feedback_form'; 
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
    ];
}
