<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
php artisan
make:magration create-posts-table --create=posts

class PostController extends Controller
{
    public function index() {
        $posts = DB::table('posts')->get();

        return view('posts.index');
    }
}
