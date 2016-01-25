<?php

namespace App\Repositories;

use App\User;

class UserRepository extends Repository {

    function model()
    {
        return User::class;
    }
}