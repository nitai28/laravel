<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }


    public function index()
    {
        $posts = Post::all();
        $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at)desc')
            ->get()
            ->toArray();
        return view('posts.index', compact('posts', 'archives'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
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
//        Post::create([
//            'title' => request('title'),
//            'body' => request('body'),
//            'user_id' => auth()->id()
//        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );
//        redirect to the home page
        return redirect('/posts');
    }


}
