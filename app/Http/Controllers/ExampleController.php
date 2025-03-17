<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Example;

class ExampleController extends Controller
{

    
    public function index()
    {
        // Retrieve all records from the examples table.
        $data = Example::all();

        // Pass the data to the view using with()
        return view('Example')->with([
            'data' => $data
        ]);
    }
}
