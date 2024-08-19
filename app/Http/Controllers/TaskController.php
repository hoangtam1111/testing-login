<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        // $tasks=Task::factory()->count(100)->create();
        // dd($tasks);
    }
}
