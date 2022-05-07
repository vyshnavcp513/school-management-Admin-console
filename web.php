<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;

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

Route::get('/', [HomeController::class,'home']);
Route::get('form', [HomeController::class,'form']);
Route::post('form-post', [HomeController::class,'data'])->name('submit');
//add teachers viewCreateTeachers
// Route::get('/add-teachers',[TeacherController::class,'createTeacher'])->name('admin.createTeacher');
Route::get('/view-create-teachers',[TeacherController::class,'viewCreateTeachers'])->name('admin.viewCreateTeachers');
Route::POST('/save-teachers',[TeacherController::class,'saveTeacher'])->name('admin.saveTeacher');
//view teachers
Route::get('/view-teacher',[TeacherController::class,'viewTeachers'])->name('admin.viewTeachers');
//edit teacher
Route::get('/view-edit-teachers/{id}',[TeacherController::class,'editTeachers'])->name('admin.editTeachers');
Route::post('/update-teacher/{id}',[TeacherController::class,'updateTeachers'])->name('admin.updateTeachers');
Route::get('/delete-teacher/{id}',[TeacherController::class,'deleteTeachers'])->name('admin.deleteTeachers');






