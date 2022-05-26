<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;
class TasksController extends Controller
{
      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Tasks = Tasks::latest()->first();
        return view('frontend/tasks/index', compact('Tasks'));
    }
}
