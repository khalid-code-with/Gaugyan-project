<?php
// namespace App\Mail;

// use Illuminate\Bus\Queueable;
// use Illuminate\Mail\Mailable;
// use Illuminate\Queue\SerializesModels;

// class WelcomeEmail extends Mailable
// {
//     use Queueable, SerializesModels;

//     public $data; 

//     /**
//      * Create a new message instance.
//      */
//     public function __construct($data)
//     {
//         $this->data = $data;
//     }

//     /**
//      * Build the message.
//      */
//     public function build()
//     {
//         return $this->subject($this->data['subject']) 
//                     ->html('
//                         <h2>New Ragistraction Form Submission</h2>
//                        <p><strong>Name:</strong> ' . ucfirst(strtolower($this->data['name'])) . '</p>
//                         <p><strong>Email:</strong> ' . $this->data['email'] . '</p>
//                         <p><strong>Subject:</strong> ' . $this->data['subject'] . '</p>
//                         <p><strong>Message:</strong> ' . $this->data['message'] . '</p>
//                     ');
//     }
// }

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; 

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject($this->data['subject']) 
                    ->view('mail.email') // it include email design from this view
                    ->with('data', $this->data);
    }
}

