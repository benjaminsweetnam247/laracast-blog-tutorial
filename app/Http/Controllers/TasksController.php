<?php

namespace Blog\Http\Controllers;

use Blog\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
	public function index()
	{
		$tasks = Task::all();
    	return view('tasks.index', compact('tasks'));
	}

	public function show(Task $task)
	{
		return view('tasks.show', compact('task'));
	}
}
