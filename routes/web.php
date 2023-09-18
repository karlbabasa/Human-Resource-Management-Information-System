<?php
namespace App\Http\Controllers;
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
//show home
Route::get('/', [EmployeeController::class, 'index']);

//show create form
Route::get('/employee/create', [EmployeeController::class, 'create'])->middleware('auth');

//add employee
Route::post('/employees', [EmployeeController::class, 'store'])->middleware('auth');

//show employee list
Route::get('/employee/list', [EmployeeController::class, 'show'])->middleware('auth');

//show edit form
Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit'])->middleware('auth');

//submit update
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->middleware('auth');

//DELETE
Route::delete('/employees/{employee}/delete', [EmployeeController::class, 'destroy'])->middleware('auth');

//SINGLE LISTINGS
Route::get('/employee/{employee}', [EmployeeController::class, 'showOne'])->middleware('auth');

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

//CREATE NEW USER
Route::post('/users', [UserController::class, 'store']);

//LOGOUT
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//SHOW LOGIN FORM
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log in User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);