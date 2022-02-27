<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsermodelController extends Controller
{
    //

    public function detail()
    {
        # code...
        return response([121, 22, 453, 643, 800, "a" => 123], 200); // return json
        // return json_encode([121, 22, 453, 643, 800]);
    }
}
