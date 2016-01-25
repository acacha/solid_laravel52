<?php

namespace App\Http;


class Flash
{

    public function message($message) {
        echo "MISSATGE";
        //session->flash('flash_message',$message);
    }
}