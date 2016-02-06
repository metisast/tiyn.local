<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected $itemsCount = 10; //items count per page

}
