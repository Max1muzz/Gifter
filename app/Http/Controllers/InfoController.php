<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InfoController extends Controller
{
    public function __invoke(){
//        Mail::send(['text' => 'mail'], ['name', 'Maximilian'], function ($message){
//            $message->to('maxtar.work@gmail.com', 'To Maximilian')->subject('My Test');
//            $message->from('max1mka986@gmail.com', 'Maximilian');
//        });
//           return inertia('Auth/ForgotPassword', [
//               'status' => session('status'),
//           ]);
        //ok
        return inertia('Info/Index');
    }
}
