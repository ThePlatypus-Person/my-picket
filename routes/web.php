<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScheduleController;

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

Route::get('/dashboard', [
    DashboardController::class, 
    'index'
])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/my-picket', function () {
    return view('my-picket');
})->middleware(['auth', 'verified'])->name('my picket');

Route::get('/verify', function () {
    return view('verify');
})->middleware(['auth', 'verified', 'scheduler.role'])->name('verify');

Route::get('/schedule', [ScheduleController::class,
'index'])->middleware(['auth', 'verified', 'scheduler.role'])->name('schedule');


Route::get('/accounts', [
    AccountsController::class,
    'index'
])->middleware(['auth', 'verified', 'admin.role'])->name('accounts.index');

// Route to update user role
Route::put('/accounts/{user}/update-role', [AccountsController::class, 'updateRole'])->name('accounts.updateRole');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::delete('users/{user}/force-delete', [UserController::class, 'forceDelete'])->name('users.forceDelete');

require __DIR__.'/auth.php';
