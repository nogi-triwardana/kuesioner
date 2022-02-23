<?php

use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\AnswerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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


Route::get('/questions', [QuestionsController::class, 'index']);
Route::get('/questions/{id}', [QuestionsController::class, 'detail']);
Route::post('/questions/{id}/answers', [AnswerController::class, 'store']);