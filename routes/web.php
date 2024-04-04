<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Skill;

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
    $user = User::where('role',0)->get();
    $group = Skill::all();
    return view('index',['user'=>$user,'group'=>$group]);
})->name('home');

// Route::get('/home',[Controller::class,'portfolio'])->name('portfolio');
Route::get('/portfolio{id}',[Controller::class,'portfolio'])->name('portfolio');
Route::get('/portinfo{id}',[Controller::class,'portinfo'])->name('portinfo');
Route::post('/serch',[Controller::class,'serch'])->name('serch');
Route::get('/serchfilter',[Controller::class,'serchfilter'])->name('serchfilter');
Route::post('/findfilter',[Controller::class,'findfilter'])->name('findfilter');

Route::get('/register',[AuthController::class,'loadRegister']);
Route::post('/register',[AuthController::class,'register'])->name('register');

Route::get('/login',[AuthController::class,'loadLogin']);
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/resetuser{id}',[AuthController::class,'resetuser'])->name('resetuser');

// ********** Super Admin Routes *********
Route::group(['prefix' => 'super-admin','middleware'=>['web','isSuperAdmin']],function(){
    Route::get('/dashboard',[SuperAdminController::class,'dashboard']);
    Route::get('/users',[SuperAdminController::class,'users'])->name('superAdminUsers');
    Route::get('/manage-role',[SuperAdminController::class,'manageRole'])->name('manageRole');
    Route::post('/update-role',[SuperAdminController::class,'updateRole'])->name('updateRole');
});

// ********** Sub Admin Routes *********
Route::group(['prefix' => 'sub-admin','middleware'=>['web','isSubAdmin']],function(){
    Route::get('/dashboard',[SubAdminController::class,'tableuser'])->name('staff.dashboard');
    Route::get('/formuser',[SubAdminController::class,'formuser'])->name('staff.formuser');
    Route::get('/tableuser',[SubAdminController::class,'tableuser'])->name('staff.tableuser');
    Route::get('/profile{id}',[SubAdminController::class,'profile'])->name('staff.profile');
    Route::get('/userprofile{id}',[SubAdminController::class,'userprofile'])->name('staff.userprofile');
    Route::post('/storeuser{id}',[SubAdminController::class,'storeuser'])->name('staff.storeuser');
    Route::put('/edituser{id}',[SubAdminController::class,'edituser'])->name('staff.edituser');
    Route::put('/editprofile{id}',[SubAdminController::class,'editprofile'])->name('staff.editprofile');
});

// ********** Admin Routes *********
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/formstaff',[AdminController::class,'formstaff'])->name('admin.formstaff');
    Route::post('/storestaff{id}',[AdminController::class,'storestaff'])->name('admin.storestaff');
    Route::get('/formuser',[AdminController::class,'formuser'])->name('admin.formuser');
    Route::post('/storeuser{id}',[AdminController::class,'storeuser'])->name('admin.storeuser');
    Route::get('/tableuser',[AdminController::class,'tableuser'])->name('admin.tableuser');
    Route::get('/tablestaff',[AdminController::class,'tablestaff'])->name('admin.tablestaff');
    Route::get('/userprofile{id}',[AdminController::class,'userprofile'])->name('admin.userprofile');
    Route::get('/staffprofile{id}',[AdminController::class,'staffprofile'])->name('admin.staffprofile');
    Route::put('/editstaff{id}',[AdminController::class,'editstaff'])->name('admin.editstaff');
    Route::put('/edituser{id}',[AdminController::class,'edituser'])->name('admin.edituser');
    Route::put('/editadmin{id}',[AdminController::class,'editadmin'])->name('admin.editadmin');
    Route::get('/profile{id}',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('/destroystaff{id}',[AdminController::class,'destroystaff'])->name('admin.destroystaff');
    Route::get('/destroyuser{id}',[AdminController::class,'destroyuser'])->name('admin.destroyuser');
    Route::put('/changepass{id}',[AdminController::class,'changepass'])->name('admin.changepass');
    Route::get('/editgroup',[AdminController::class,'editgroup'])->name('admin.editgroup');
    Route::put('/updategroup{id}',[AdminController::class,'updategroup'])->name('admin.updategroup');
    Route::post('/storegroup',[AdminController::class,'storegroup'])->name('admin.storegroup');
    Route::get('/destroygroup{id}',[AdminController::class,'destroygroup'])->name('admin.destroygroup');
});

// ********** User Routes *********
Route::group(['middleware'=>['web','isUser']],function(){
    Route::get('/dashboard',[UserController::class,'dashboard'])->name('user.dashboard');
    Route::get('/performance{id}',[UserController::class,'performance'])->name('user.performance');
    Route::get('/performinfo{id}',[UserController::class,'performinfo'])->name('perform.info');
    Route::get('/performedit{id}',[UserController::class,'performedit'])->name('perform.edit');
    Route::get('/upload',[UserController::class,'upload'])->name('user.upload');
    Route::post('/storeperform{id}',[UserController::class,'storeperform'])->name('user.storeperform');
    Route::put('/updateper{id}',[UserController::class,'update'])->name('user.updateform');
    Route::get('/profile{id}',[UserController::class,'profile'])->name('user.profile');
    Route::put('/editprofile{id}',[UserController::class,'editprofile'])->name('user.editprofile');
    Route::get('/destroyper{id}',[UserController::class,'destroy'])->name('perform.destoy');
});
