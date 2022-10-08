<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $names = ['Ryan', 'John', 'Micheal'];
        //return view('about')->with('name', $name); //pass in variable name to view
        return view('about', ['names' => $names]); //pass in array to view
    }
}
