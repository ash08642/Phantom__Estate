<?php

use App\Http\Controllers\PropertyController;
use App\Models\User;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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

Route::get('/Users', function(){
    return view('users',[
        'heading' => 'All users',
        'users' => User::all()
    ]);
});

Route::get('/Users/{user}', function(User $user){
    return view('user', [
        'user' => $user
    ]);
});

// All Properties
Route::get('/', [PropertyController::class, 'index']);

// Show Create Form
Route::get('/Properties/create', [PropertyController::class, 'create'])->middleware('auth');

// Store Property Data submitted from Create Form
Route::post('/', [PropertyController::class, 'store'])->middleware('auth');

// Manage My Properties
Route::get('/Properties/MyProperties', [PropertyController::class, 'manage'])->middleware('auth');

// Show Edit Form
Route::get('/Properties/{property}/edit', [PropertyController::class, 'edit'])->middleware('auth');

// Update Property Data submitted from Edit Form
Route::put('/Properties/{property}', [PropertyController::class, 'update'])->middleware('auth');

// Delete Property Data
Route::delete('/Properties/{property}', [PropertyController::class, 'destroy'])->middleware('auth');

// Single Property
Route::get('/Properties/{property}', [PropertyController::class, 'show']);

require __DIR__.'/auth.php';

// Common Resource Routes:
// index - Show all Properties
// show - Show single Property
// create - Show form to create new Property
// store - Store new Property
// edit - Show form to edit Property
// update - Update Property
// destroy - Delete Property 
