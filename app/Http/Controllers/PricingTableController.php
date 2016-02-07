<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PricingTableController extends Controller
{
    public function index()
    {
        return view('pricingtable.pricingtable');
    }

    public function index2()
    {
        return view('pricingtable.pricingtable2');
    }
}
