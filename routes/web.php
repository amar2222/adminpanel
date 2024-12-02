<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'lgout'])->name('logout');

Route::get('companylist', [CompanyController::class, 'index'])->name('companylist')->middleware('auth');
Route::get('createcompany', [CompanyController::class, 'create'])->name('createcompany')->middleware('auth');
Route::get('editcompany/{id}', [CompanyController::class, 'edit'])->name('editcompany')->middleware('auth');
Route::post('storecompany', [CompanyController::class, 'store'])->name('storecompany')->middleware('auth');
Route::put('updatecompany', [CompanyController::class, 'update'])->name('updatecompany')->middleware('auth');
Route::get('deletecompany/{id}', [CompanyController::class, 'destroy'])->name('deletecompany')->middleware('auth');

Route::get('employeelist', [EmployeeController::class, 'index'])->name('employeelist')->middleware('auth');
Route::get('createemployee', [EmployeeController::class, 'create'])->name('createemployee')->middleware('auth');
Route::get('editemployee/{id}', [EmployeeController::class, 'edit'])->name('editemployee')->middleware('auth');
Route::post('storeemployee', [EmployeeController::class, 'store'])->name('storeemployee')->middleware('auth');
Route::put('updateemployee', [EmployeeController::class, 'update'])->name('updateemployee')->middleware('auth');
Route::get('deleteemployee/{id}', [EmployeeController::class, 'destroy'])->name('deleteemployee')->middleware('auth');

Route::get('locale/{locale}', function ($locale){    Session::put('locale', $locale);    return redirect()->back();});
