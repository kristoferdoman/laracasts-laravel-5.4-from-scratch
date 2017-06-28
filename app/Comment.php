<?php

namespace App;

class Comment extends Model {
    
    // This allows us to do this: $comment->post 
    // This setup also allows us to do things like this: $comment->post->user
    public function post() {
        return $this->belongsTo(Post::class);
    }

    // To grab the user associated with a comment, now you can just do: $comment->user->name
    public function user() {
        return $this->belongsTo(User::class);
    }
}
