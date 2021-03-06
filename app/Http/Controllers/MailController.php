<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\modelEmail;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send()
    {
        $objModel = new \stdClass();
        $objModel->demo_one = 'Demo One Value';
        $objModel->demo_two = 'Demo Two Value';
        $objModel->sender = 'LS';
        $objModel->receiver = 'ReceiverUserName';
 
        Mail::to("correo@destino.com")->send(new modelEmail ($objModel));
    }
}
