<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PublicController extends Controller
{
    // $posts = Post::limit(24)->offset(24)->get();
    // $posts = Post::take(24)->skip(24)->get();

    public function index() {
        $posts = Post::paginate(16);
        return view('welcome', compact('posts'));
    }

    public function buttons() {
        return view('buttons');
    }

    public function post(Post $post) {
        return view('post', compact('post'));
    }
}