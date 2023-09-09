<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ExamController;
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


// admin routes


Route::get('/admin/add/student',[StudentController::class,'index'])->name('student.create');
Route::any('admin/student/store',[StudentController::class,'store'])->name('student.store');
Route::any('admin/student',[StudentController::class,'list'])->name('student.list');
Route::any('admin/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
Route::any('admin/student/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::any('admin/student/delete/{id}',[StudentController::class,'destroy'])->name('student.delete');
Route::any('admin/student/block/{id}',[StudentController::class,'block'])->name('student.block');


Route::get('admin/exams/new',[ExamController::class,'index'])->name('exam.register');
Route::post('admin/exams/new', [ExamController::class,'store'])->name('exam.register.submit');
Route::any('admin/exams', [ExamController::class,'list'])->name('exam.list');


Route::get('admin/examhall/new',[ ExamController::class,'indexhall' ])->name('examhall.register');
Route::post('admin/examhall/new', [ ExamController::class,'store' ])->name('examhall.register.submit');
Route::any('admin/examhalls', [ ExamController::class,'hallList' ])->name('examhall.list');



