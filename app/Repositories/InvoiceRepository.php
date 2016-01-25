<?php

namespace App\Repositories;


/**
 * Class InvoiceRepository
 * @package App\Repositories
 */
class InvoiceRepository extends Repository
{

    function model()
    {
        return \App\Invoices::class;
    }
}

