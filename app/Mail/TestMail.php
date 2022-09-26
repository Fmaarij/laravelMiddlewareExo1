<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class TestMail extends Mailable {
    use Queueable, SerializesModels;

    /**
    * Create a new message instance.
    *
    * @return void
    */

    public function __construct() {
        //
    }

    /**
    * Build the message.
    *
    * @return $this
    */

    public function build() {


        return $this->from( 'maarij_faisal@hotmail.com' )
                    ->subject(Auth::user()->name)
                     ->view( 'emails.test')
                    //  ->attach(public_path('img/html.png'));
                    ->attachFromStorage('img/html.png', 'imagetestattachement');
    }
}
