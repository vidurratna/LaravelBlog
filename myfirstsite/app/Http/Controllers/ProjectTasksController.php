<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{

    public function store(Project $project)
    {

        request()->validate(['description' => 'required']);

        $project->addTask(request('description'));

        // Task::create([
        //     'project_id' => $project->id,
        //     'description' => request('description'),
        // ]);

        return back();

    }
    public function update(Task $task)
    {
        $task->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }
}
