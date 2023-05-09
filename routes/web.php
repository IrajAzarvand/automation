<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\SettingController;
use App\Http\Livewire\Letters;
use App\Http\Livewire\Setting;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', Letters::class)->name('dashboard');
});



//Dashboard Routes
//=======================================================================
Route::prefix('dashboard')->middleware('auth')->group(function () {

    // ADMIN->USER MANAGEMENT
    Route::get('/userManagement', [AdminPanelController::class, 'UserManagement'])->name('userManagement');
    Route::post('/sign', [AdminPanelController::class, 'storeSign'])->name('StoreUserSignImage');
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

    // test
    Route::get('/test', function () {
        return view('test');
    })->name('test');


    // letters
    Route::get('/letters', Letters::class)->name('letters');


    // setting
    Route::get('/setting', [SettingController::class, 'index'])->name('setting');

    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

});
