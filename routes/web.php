<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Jobs\JobsController;
use App\Http\Controllers\WelcomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

// Jobs routes
Route::get('/jobs/single/{id}', [App\Http\Controllers\Jobs\JobsController::class, 'single'])->name('single.job');
// Svae Job
Route::post('/jobs/save', [App\Http\Controllers\Jobs\JobsController::class, 'saveJob'])->name('save.job');
// Apply for job
Route::post('/jobs/apply', [App\Http\Controllers\Jobs\JobsController::class, 'applyJob'])->name('apply.job');


//user profile
Route::get('/users/profile', [App\Http\Controllers\Users\UsersController::class, 'profile'])->name('user.profile');
Route::get('users/profile/edit', [App\Http\Controllers\Users\UsersController::class, 'edit_profile'])->name('user.display-update-profile');
Route::put('/users/profile/update', [App\Http\Controllers\Users\UsersController::class, 'update_profile'])->name('user.profile-update');


