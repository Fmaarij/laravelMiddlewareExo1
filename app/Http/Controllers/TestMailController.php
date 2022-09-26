<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function index(){

        Mail::to('test@gmail.test')->send(new TestMail());
        return view('emails.test');
    }

}
