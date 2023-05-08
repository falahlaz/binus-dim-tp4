<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DimensionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'index'])->name('index');

Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/template', [TemplateController::class, 'template'])->name('template');

Route::get('/dimension', [DimensionController::class, 'index'])->name('dimension.index');
Route::get('/dimension/create', [DimensionController::class, 'create'])->name('dimension.create');
Route::post('/dimension', [DimensionController::class, 'store'])->name('dimension.store');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::get('/question', [QuestionController::class, 'index'])->name('question.index');
Route::get('/question/create', [QuestionController::class, 'create'])->name('question.create');
Route::get('/question/questionnaire', [QuestionController::class, 'questionnaire'])->name('question.questionnaire');
Route::post('/question', [QuestionController::class, 'store'])->name('question.store');
Route::post('/question/questionnaire', [QuestionController::class, 'questionnaireStore'])->name('question.questionnaire.store');