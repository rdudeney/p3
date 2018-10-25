<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function processInput()
    {
        return 'Process the input and redirect user back to the form with the results';
    }

}
