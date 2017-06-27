<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {
    
    // public static function incomplete() {
    //     return static::where('completed', 0)->get();
    // }

    // Allows us to do Task::incomplete() when prefixed with scope. 
    // Because of this, Laravel knows to treat this as a query scope.
    // So, it will accept the existing query.
    // This will allow you to change this method: $Task:incomplete()->where() (etc);
    public function scopeIncomplete($query) { 
        return $query->where('completed', 0);
    }

}
