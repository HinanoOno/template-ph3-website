<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/top',function() {
    return view('toppage');
})->name('top');
Route::get('/quiz',[QuestionController::class, 'index'])->name('questions.index')->middleware('auth');
Route::get('/users', [UserController::class, 'index'])->name('users.index');

#管理者ページのルーティング
Route::middleware(['auth','admin'])->group(function(){
    Route::get('/admin',[QuestionController::class,'admin'])->name('admin.index');
    Route::get('/admin/{quesiton}/edit',[QuestionController::class,'edit'])->name('questions.edit');
    Route::patch('/admin/{quesiton}',[QuestionController::class,'update'])->name('questions.update');
});