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
Route::get('/quiz',[QuestionController::class, 'quiz'])->name('questions.index')->middleware('auth');
Route::get('/users', [UserController::class, 'index'])->name('users.index');

#管理者ページのルーティング
/*Route::middleware(['auth','admin'])->group(function(){
    Route::get('/admin',[QuestionController::class,'admin'])->name('admin.index');
    Route::get('/admin/create',[QuestionController::class,'create'])->name('questions.create');
    Route::post('admin/store',[QuestionController::class,'store'])->name('questions.store');
    Route::get('/admin',[QuestionController::class,'admin'])->name('admin.index');
    Route::get('/admin/{question}/edit',[QuestionController::class,'edit'])->name('questions.edit');
    Route::patch('/admin/{question}',[QuestionController::class,'update'])->name('questions.update');
    Route::delete('/admin/{question}',[QuestionController::class,'destroy'])->name('questions.destroy');
});*/

Route::middleware(['auth','admin'])->group(function(){
    Route::resource('admin', QuestionController::class)->parameters([
        'admin'=>'question'

    ]);

});


