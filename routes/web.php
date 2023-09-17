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
Route::get('/employee/create', [EmployeeController::class, 'create']);

//add employee
Route::post('/employees', [EmployeeController::class, 'store']);

//show employee list
Route::get('/employee/list', [EmployeeController::class, 'show']);