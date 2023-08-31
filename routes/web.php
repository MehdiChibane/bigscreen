<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/save-survey', [App\Http\Controllers\SurveyController::class, 'saveSurvey'])->name('saveSurvey');
Route::get('/reponse/{survey_id}/{customer_uiid}', [App\Http\Controllers\SurveyController::class, 'getSurvey'])->name('response.details');


Route::get('/administration', function () {
    return view('auth.login');
});
Route::get('/admin/answers', [App\Http\Controllers\AdminController::class, 'answer'])
    ->name('admin.answer')
    ->middleware('auth');
Route::get('/admin/questions', [App\Http\Controllers\AdminController::class, 'question'])
    ->name('admin.question')
    ->middleware('auth');

