<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestHomeController extends Controller
{
    public function CalcMoney(Request $request)
    {
        $data = $request->all(); // This will get all the request data.

        dd($data); // This will dump and die
    }
}
