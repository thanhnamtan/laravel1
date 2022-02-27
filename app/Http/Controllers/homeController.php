<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //

    function home()
    {
        # code...
        return view("frontend/templates/list");
    }
}
