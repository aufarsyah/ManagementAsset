<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSession;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\PrivilegeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AuditTrailController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\SensorsController;
use App\Http\Controllers\InstitutionSensorsController;
use App\Http\Controllers\InstitutionTypeController;

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

Route::get('/', function () {
    return redirect('signin');
});


Route::get('/signin',                           [AuthController::class,'signin_page']);
Route::get('/signup',                           [AuthController::class,'signup_page']);

Route::post('/signin_process',                  [AuthController::class,'signin_process']);
Route::post('/signup_process',                  [AuthController::class,'signup_process']);
Route::get('/signout_process',                  [AuthController::class,'signout_process']);

//Route::resource('/test',                             [TestController::class, 'index'])->name('testnama');
Route::resource('/mail',                        MailController::class);


Route::middleware(['checkSession', 'auditTrail'])->group(function () {

    Route::get('/dashboard',                    [DashboardController::class,'dashboard_page']);

    

    Route::resource('/privilege',               PrivilegeController::class);
    Route::get('/privilege/option/{id}',        [PrivilegeController::class, 'option']);

    Route::resource('/institution_type',        InstitutionTypeController::class);
    Route::get('/institution_type/option/{id}', [InstitutionTypeController::class, 'option']);
    
    Route::get('/user/option/{id}',             [UserController::class, 'option']);

    Route::get('/area/option/{id}',             [AreaController::class, 'option']);

    Route::get('/group/option/{id}',            [GroupController::class, 'option']);

    Route::resource('/audit_trail',             AuditTrailController::class);
    
    Route::resource('/profile', ProfileController::class, ['names' => [
        'index' => 'profile_setup',
        'show' => 'profile_setup_read',
        'update' => 'profile_setup_update'
    ]]);


    Route::get('/institution_sensors_map', [InstitutionSensorsController::class, 'index_map']);

    Route::middleware(['checkPrivilege'])->group(function () {
        
        Route::resource('/institution', InstitutionController::class, ['names' => [
            'index' => 'institution_setup',
            'show' => 'institution_setup_read',
            'store' => 'institution_setup_create',
            'update' => 'institution_setup_update',
            'destroy' => 'institution_setup_delete'
        ]]);

        Route::resource('/sensors', SensorsController::class, ['names' => [
            'index' => 'sensors_setup',
            'show' => 'sensors_setup_read',
            'store' => 'sensors_setup_create',
            'update' => 'sensors_setup_update',
            'destroy' => 'sensors_setup_delete'
        ]]);

        Route::resource('/institution_sensors', InstitutionSensorsController::class, ['names' => [
            'index' => 'institution_sensors_setup',
            'show' => 'institution_sensors_setup_read',
            'store' => 'institution_sensors_setup_create',
            'update' => 'institution_sensors_setup_update',
            'destroy' => 'institution_sensors_setup_delete'
        ]]);

        Route::resource('/user', UserController::class, ['names' => [
            'index' => 'user_setup',
            'show' => 'user_setup_read',
            'store' => 'user_setup_create',
            'update' => 'user_setup_update',
            'destroy' => 'user_setup_delete'
        ]]);
        
        Route::resource('/group', GroupController::class, ['names' => [
            'index' => 'group_setup',
            'show' => 'group_setup_read',
            'store' => 'group_setup_create',
            'update' => 'group_setup_update',
            'destroy' => 'group_setup_delete'
        ]]);

    });

});