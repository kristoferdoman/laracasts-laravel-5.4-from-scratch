<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller {

    // GET /posts
    public function index() {
        return view('posts.index');
    }

    // GET /posts/create
    public function create() {
        return view('posts.create');
    }

    // GET /posts/{id}
    public function show() {
        return view('posts.show');
    }

    // POST /posts
    public function store() {
        // Some commands to dump and die used for debugging.
        // dd(request()->all());
        // dd(request('title'));
        // dd(request(['title', 'body']));

        // Create a new post using the request data.
        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');

        // // Save it to the database.
        // $post->save();

        // Another way to do the above.
        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        // And then redirects to the home page.
        return redirect('/');

    }
}
