<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        //pass data to view 
        $title = "Welcome to my Laravel 8 course";
        $description = "Created by Ryannnnnn";
        $data = [
            'productOne' => 'iPhone',
            'productTwo' => 'Samsung'
        ];

        //1.compact function method = creating an array of the variable with its value
        // return view(
        //     'products.index',
        //     compact('title', 'description')
        // ); // the . is basically a \, like products\index 

        //2. with method
        //return view('products.index') ->with('title', $title);
        //return view('products.index')->with('data', $data);

        //Directly in view
        return view('products.index', [
            'data' => $data
        ]);
    }

    public function about()
    {
        return 'About page';
    }
}
