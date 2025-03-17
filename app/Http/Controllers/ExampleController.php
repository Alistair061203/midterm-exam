<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Features;

class ExampleController extends Controller
{

    
    public function index()
    {

        $data = Features::all();

        return view('Features')->with([
            'data' => $data
        ]);
    }
}
