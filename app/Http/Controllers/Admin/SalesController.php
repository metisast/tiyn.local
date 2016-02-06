<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;

class SalesController extends BaseController
{
    /**
     * Sales controller
     *
     */
    public function index()
    {
        return view('admin.sales.index');
    }
}