<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\StudashController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasDashController;




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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" =>  "Amanda",
        "kelas" =>  "11 pplg 1",
        "foto" => "img/amanda.jpg"

    ]);
});

Route::get('/student', [StudentsController::class, "index"]);

Route::get('/extra', [ExtraController::class, "index"]);

Route::get('/student/detail/{student}', [StudentsController:: class, 'show']);

Route::get('/student/create', [StudentsController:: class, 'create']);

Route::post('/student/add', [StudentsController::class, 'store']);

Route::delete('/student/{id}', [StudentsController::class, 'destroy'])->name('students.destroy');

Route::get('/student/{id}/edit', [StudentsController::class, 'edit'])->name('students.edit');

Route::post('/student/{student}/update', [StudentsController::class, 'update']);

Route::get('/kelas', [KelasController::class, 'index3'])->name('kelas.index3');

Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');

Route::post('/kelas/store', [KelasController::class, 'store'])->name('kelas.store');

Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');

Route::put('/kelas/{id}/update', [KelasController::class, 'update'])->name('kelas.update');

Route::delete('/kelas/{id}/destroy', [KelasController::class, 'destroy'])->name('kelas.destroy');

Route::get('/kelas/add', [KelasController::class, 'addForm'])->name('kelas.addForm');

Route::get('/login', [LoginController::class, "loginV"])-> name("login")->middleware('guest'); 

Route::post('/login', [LoginController::class, "loginR"])-> name("loginR"); 

Route::get('/signup', [SignupController::class, "signupV"])-> name("signup")->middleware('guest');

Route::post('/signup', [SignupController::class, 'signupR'])->name('signupR');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get("/dashboard", [DashboardController:: class, "index"])->name('dashboard')->middleware('auth');

Route::get('/dashboard/student2/all', [StudashController::class, "index"])->name('student2')->middleware('auth');

Route::get('/dashboard/kelas2/kelas', [KelasDashController::class, "index3"])->name('kelas2')->middleware('auth');

Route::post('/kelas2/store', [KelasDashController::class, 'store'])->name('kelas2.store');

Route::get('/kelas2/add', [KelasDashController::class, 'addForm'])->name('kelas2.addForm');

Route::delete('/kelas2/{id}/destroy', [KelasDashController::class, 'destroy'])->name('kelas2.destroy');

Route::get('/kelas2/{id}/edit', [KelasDashController::class, 'edit'])->name('kelas2.edit');

Route::put('/kelas2/{id}/update', [KelasDashController::class, 'update'])->name('kelas2.update');

Route::get('/student2/detail/{student}', [StudashController:: class, 'show']);

Route::get('/student2/create', [StudashController:: class, 'create']);

Route::post('/student2/add', [StudashController::class, 'store']);

Route::delete('/student2/{id}', [StudashController::class, 'destroy'])->name('student2.destroy');

Route::get('/student2/{id}/edit', [StudashController::class, 'edit'])->name('student2.edit');

Route::post('/student2/{student}/update', [StudashController::class, 'update']);




