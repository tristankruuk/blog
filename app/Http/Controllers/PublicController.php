<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    // $posts = Post::limit(24)->offset(24)->get();
    // $posts = Post::take(24)->skip(24)->get();

    public function index() {
        $posts = Post::simplePaginate(16);
        return view('welcome', compact('posts'));
    }

    public function buttons() {
        return view('buttons');
    }
}