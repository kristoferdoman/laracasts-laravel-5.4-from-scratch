<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller {
    
    public function index() {
        // The code that's not commented out is using Laravel's built in active record
        // tool called Eloquent. 
        // $tasks = DB::table('tasks')->get();
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));

        // Displaying different ways of passing data to views.

        // 1.)
        // $name = 'Kristofer';
        // $age = 31;

        // return view('welcome', compact('name', 'age'));

        // 2.)
        // return view('welcome', [
        //     'name' => 'Laracasts',
        // ]);

        // 3.)
        // return view('welcome')->with('name', 'World');

        // 4.)
        // $tasks = [
        //     'Go to the store',
        //     'Finish my screencast',
        //     'Go shopping'
        // ];

        // return view('welcome', compact('tasks'));
    }

    public function show($id) {
        // $task = DB::table('tasks')->find($id); 
        $task = Task::find($id);

        return view('tasks.show', compact('task'));
    }
}
