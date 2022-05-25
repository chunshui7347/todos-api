<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GitHubController;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('auth/github', [GitHubController::class, 'gitRedirect']);
Route::get('auth/github/callback', [GitHubController::class, 'gitCallback']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:api')->group(function () {
    Route::get('/tasks', [TodoController::class, 'index']);

    Route::post('/task', [TodoController::class, 'create']);

    Route::delete('/task/{task}', [TodoController::class, 'delete']);

    Route::post('/task/update', [TodoController::class, 'update']);

    Route::match(['put', 'patch'], '/task/{task}/completed', [TodoController::class, 'completed']);
});
