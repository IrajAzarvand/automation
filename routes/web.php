<?php

use App\Http\Controllers\dashboardPageLoader;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



//Dashboard Routes
//=======================================================================
Route::prefix('dashboard')->middleware('auth')->group(function () {

    // ADMIN->USER MANAGEMENT
    Route::get('/userManagement', [dashboardPageLoader::class, 'UserManagement'])->name('userManagement');
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

    // test
    Route::get('/test', function () {
        return 'test';
    })->name('test');

    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

});