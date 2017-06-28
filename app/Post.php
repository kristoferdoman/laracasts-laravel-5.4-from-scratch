<?php

namespace App;

class Post extends Model {

    // We're gaurding in our parent Model file now so we're referencing that file and using that.
    // Doing this will ensure that every model we create from here on out will do the same thing. 
    // This isn't always the best way, but it's one way to have all our models gaurding or doing things similarly. 

    // This is basically a list of fields we are ok with being mass assigned using something like the following:
    // Post::create([
    //     'title' => request('title'),
    //     'body' => request('body')
    // ]);
    // protected $fillable = ['title', 'body'];

    // This is the same as above except it's the inverse. So it's fields we are not ok with being mass assigned too.
    // Properties you want to gaurd against being mass updated.
    // Note: If you set this to an empty array, then you're not gaurding anything.
    // protected $gaurded = ['user_id'];
    // One other thing you could do instead of doing this for every single class is create a parent class @ App/Model.php
    // protected $guarded = [];

    // Relationship to comments.
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body) {

        // There's another way to do this, rather then manually specifying the post id. 
        // Comment::create([
        //     'body' => $body,
        //     'post_id' => $this->id
        // ]);

        // Behind the scene, this will also set the post_id for the comment because of the relationship we've created.
        $this->comments()->create(compact('body'));
    }

}
