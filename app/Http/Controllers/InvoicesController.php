<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\RepositoryInterface;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class InvoicesController extends Controller
{
    //

    protected $repo;

    /**
     * InvoicesController constructor.
     * @param $repo
     *
     * DEPENDENCY INJECTION
     */
    public function __construct(RepositoryInterface $repo)
    {

        $this->repo = $repo;
    }


    public function index()
    {

        if ( !Auth::check() ) {
            return "Forbidden!";
        }

        $invoices = $this->repo->all();

        $invoices = $this->transform($invoices);

        return view('invoices',compact('invoices'));
//        $data['invoices'] = $invoices;
//        return view('invoices',$data);
    }

    private function transform($database_invoices)
    {
        //Nothing here -> no transformations example
        return $database_invoices;
    }
}
