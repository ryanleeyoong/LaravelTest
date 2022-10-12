<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')
            ->whereIn('id', [1, 10])
            ->get();

        dd($posts);
        return view('posts.index');
    }
}
