<?php

namespace App\Http\Controllers;

use App\Facades\Flash;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;

class ContactEmailController extends Controller
{
//    public function send(Request $request,Flash $flash){
    public function send(Request $request){

        //dd(Input::all());

        //TODO: SEND EMAIL
        //$this->email->send();

        //FLASH NOTIFICATION
//        $request->session()->flash(
//            'flash_message',
//            'Email sent!'
//        );
        Flash::message('Email sent PP!');

//        $flash = app('\App\Http\Flash');
//
//        $flash->message("ok");

        //REDIRECT WELCOME
        return redirect()->route('welcome');
        //Redirect::to('/');
    }
}
