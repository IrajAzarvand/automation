<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserPanelController;
use App\Http\Livewire\Admin\Adduser;
use App\Http\Livewire\Admin\Bupmanagement;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Usermanagement;
use App\Http\Livewire\User\Dashboard as UserDashboard;
use App\Http\Livewire\User\UserProfileSetting;
use App\Http\Livewire\User\Letters;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'loadDashboard'])->name('dashboard');
    Route::get('/adminDashboard', Dashboard::class)->name('adminDashboard');
    Route::get('/userDashboard', UserDashboard::class)->name('userDashboard');
});

//Dashboard Routes
//=======================================================================
Route::prefix('dashboard')->middleware('auth')->group(function () {

    // = = = = = = = = = = = = = = = ADMIN SECTION = = = = = = = = = = = = = = = = = = = = =
    Route::get('/userManagement', Usermanagement::class)->name('userManagement');
    Route::get('/addUser', Adduser::class)->name('addUser');

    Route::post('/sign', [AdminPanelController::class, 'Storesign'])->name('storeUserSignImage'); //for user signature image file

    Route::get('/bupManagement', Bupmanagement::class)->name('bupManagement'); // branch, unit, and post management
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

    Route::get('/usersRelation', [AdminPanelController::class, 'usersRelation'])->name('usersRelation'); // set/unset posts to users

    // = = = = = = = = = = = = = = = USER SECTION = = = = = = = = = = = = = = = = = = = = =
    // user profile setting
    // Route::get('/userProfileSetting/{selectedUser?}', [UserPanelController::class, 'profileSetting'])->name('userProfileSetting'); //for user signature image file
    Route::get('/userProfileSetting/{selectedUser?}', UserProfileSetting::class)->name('userProfileSetting'); //for user signature image file

    // letters
    Route::get('/letters', Letters::class)->name('letters');

    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

    // test
    Route::get('/test', function () {
        return view('test');
    })->name('test');

    //unauthorized user
    Route::get('/accessDenied', function () {
        return view('User.unauthorized');
    })->name('accessDenied');
});
