<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;

class ContactEmailController extends Controller
{
    public function send(Request $request){

        //dd(Input::all());

        //TODO: SEND EMAIL
        //$this->email->send();

        //FLASH NOTIFICATION
//        $request->session()->flash(
//            'notification',
//            'Email sent!'
//        );
        Flash::message("Ok!");

        //REDIRECT WELCOME
        return redirect()->route('welcome');
        //Redirect::to('/');
    }
}
