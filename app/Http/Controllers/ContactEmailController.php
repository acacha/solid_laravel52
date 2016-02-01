<?php

namespace App\Http\Controllers;

use App\Facades\Flash;
use App\Jobs\SendSubscriptionEmail;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;

class ContactEmailController extends Controller
{


//    public function send(Request $request,Flash $flash){
    protected $user;

    /**
     * ContactEmailController constructor.
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }


    public function send(Request $request){

        //dd(Input::all());

        //TODO: SEND EMAIL
        //$this->email->send();
        $this->sendEmail();

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

    public function sendEmail()
    {
        $this->user->email = "sergiturbadenas@gmail.com";
        $this->dispatch(new SendSubscriptionEmail($this->user));
        echo "Done!";
    }
}
