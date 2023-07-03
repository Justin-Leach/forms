<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //

    public function getTasks(Request $request, $stepID)
    {
        return Task::where('step_id', '=', $stepID)
            ->get();
    }

    public function updateTaskCheck(Request $request, $taskID)
    {
        $task = Task::find($taskID);
        $task->checked = $request->input('checked');
        $task->save();
        return $task->save();
    }

    public function updateTaskUrgent(Request $request, $taskID)
    {
        $task = Task::find($taskID);
        $task->urgent = $request->input('urgent');
        return $task->save();
    }
}
