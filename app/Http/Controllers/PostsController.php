<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()

    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show()
    {
        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {


        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
//        instead write this we can write
//        Post::create([
//            'title'=> request('title'),
//            'body'=> request('body'),
//
//        ]);
//        or we can write
        Post::create(request(['title', 'body']));
//        redirect to the home page
        return redirect('/posts');
    }


}
