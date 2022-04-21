<?php

use App\Http\Controllers\HellowController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// training.test/
// Route::get('/', function () {
//     return view('welcome');
// });

// Create Route Using Closure
// training.test/hellow - 
Route::get('/hellow', function () {
    return 'hellow';
});

// Create Route Using Controller
Route::get('/hellow-controller', HellowController::class);

// Use return view only route
Route::view('/', 'welcome');

// Route::post('/store', function(){
//     dd(request());
// });



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('users', UserController::class);
});
