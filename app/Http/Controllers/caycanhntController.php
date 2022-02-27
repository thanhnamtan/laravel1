<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class caycanhntController extends Controller
{
    //

    public function home()
    {
        return view("frontend.templates.list");
    }

    public function dialog()
    {
        // return view("frontend.dialog");
    }

    public function list()
    {
        // return view("frontend.list");
    }
}
