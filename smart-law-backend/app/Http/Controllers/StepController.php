<?php

namespace App\Http\Controllers;

use App\Models\Step;
use Illuminate\Http\Request;

class StepController extends Controller
{
    //

    public function getAllSteps(Request $request)
    {
        return Step::withCount('tasks')
            ->withCount(['tasks as checked_task_count' => function ($query) {
                $query->where('checked', true);
            }])
            ->get();
    }

    public function getStep(Request $request, $stepID)
    {
        return Step::find($stepID);
    }

    public function updateStepCompleted(Request $request, $stepID)
    {
        $step = Step::find($stepID);
        $step->completed = $request->input('completed');
        return $step->save();
    }
}
