<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent {
    // Guarding this way doesn't give us any protection, so it's up to us to remember to only pass the fields that you're 
    // comfortable passing to the server. 
    protected $guarded = [];
}
