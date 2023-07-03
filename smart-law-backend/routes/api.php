<?php

use App\Http\Controllers\StepController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::middleware('auth:sanctum')->group(function () {

Route::get('steps', [StepController::class, 'getAllSteps']);
Route::get('step/{step_id}', [StepController::class, 'getStep']);
Route::post('step/{step_id}/completed', [StepController::class, 'updateStepCompleted']);
Route::get('tasks/{step_id}', [TaskController::class, 'getTasks']);
Route::post('task-check/{task_id}', [TaskController::class, 'updateTaskCheck']);
Route::post('task-urgent/{task_id}', [TaskController::class, 'updateTaskUrgent']);
// });