<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create', ['title' => 'Criar Publicação']);
    }

    public function store(Request $request)
    {
        // $data = $request->all();

        $post = Post::create([
            'title' => $request->get('title'),
            'slug' => $request->get('slug'),
            'content' => $request->get('content'),
        ]);

        return redirect()->route('posts.index');
    }
}
