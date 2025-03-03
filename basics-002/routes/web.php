<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;

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
Route::get('/groups', [GroupController::class, 'index']);
Route::get('/groups/create', [GroupController::class, 'create']);
Route::post('/groups', [GroupController::class, 'store']);
Route::get('/groups/{group}/', [GroupController::class, 'show'])->name("groups.show");
Route::get('/groups/{group}/students/create', [StudentController::class, 'create']);
Route::post('/groups/{group}/students', [StudentController::class, 'store']);
Route::get('/groups/{group}/students/{student}', [StudentController::class, "show"]);
