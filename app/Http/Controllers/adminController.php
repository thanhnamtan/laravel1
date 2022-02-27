<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function home()
    {
        # code...
        return view("adminhtml.templates.home");
    }
}
