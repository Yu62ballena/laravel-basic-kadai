<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = DB::table()

        return view('posts.index');
    }
}
