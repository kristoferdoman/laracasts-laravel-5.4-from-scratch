<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller {

    // GET /posts
    public function index() {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    // GET /posts/create
    public function create() {
        return view('posts.create');
    }

    // GET /posts/{id}
    public function show(Post $post) {
        return view('posts.show', compact('post'));
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

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        // Another way to do the above.
        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        // And then redirects to the home page.
        return redirect('/');

    }
}
