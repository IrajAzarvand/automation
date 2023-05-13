<?php

use Livewire\Livewire;
use App\Http\Livewire\Letters;
use App\Http\Livewire\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\Admin\Adduser;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Usermanagement;
use App\Http\Livewire\User\Dashboard as UserDashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', [DashboardController::class,'loadDashboard'])->name('dashboard');
    Route::get('/adminDashboard', Dashboard::class)->name('adminDashboard');
    Route::get('/userDashboard', UserDashboard::class)->name('userDashboard');

});



//Dashboard Routes
//=======================================================================
Route::prefix('dashboard')->middleware('auth')->group(function () {

    // = = = = = = = = = = = = = = = ADMIN SECTION = = = = = = = = = = = = = = = = = = = = =
    Route::get('/userManagement', [AdminPanelController::class,'UserManagement'])->name('userManagement');
    Route::get('/addUser', [AdminPanelController::class,'AddUser'])->name('addUser');
    Route::post('/sign', [AdminPanelController::class, 'Storesign'])->name('storeUserSignImage'); //for user signature image file
    // Route::get('/addUser', Adduser::class)->name('addUser');
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =


        // = = = = = = = = = = = = = = = USER SECTION = = = = = = = = = = = = = = = = = = = = =
        // setting
        Route::get('/userSetting', [SettingController::class, 'index'])->name('setting');

    // test
    Route::get('/test', function () {
        return view('test');
    })->name('test');


    // letters
    Route::get('/letters', Letters::class)->name('letters');

    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

});
