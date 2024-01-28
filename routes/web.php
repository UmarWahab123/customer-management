<?php

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

//Route::get('/', function () {
//    return view('frontend.layout.header');
//});
Auth::routes(['verify' => true]);

Route::get('/admin/login', function () {
    return view('auth.login');
});
  Route::redirect('/login', 'auth');
  Route::get('/email/verify', [App\Http\Controllers\Auth\VerificationController::class,'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class,'verify'])->name('verification.verify')->middleware(['signed']);
Route::post('/email/resend', [App\Http\Controllers\Auth\VerificationController::class,'resend'])->name('verification.resend');
Route::get('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/admin/adminlogin', [App\Http\Controllers\Frontend\LoginController::class, 'adminlogin']);
Route::post('/userlogin', [App\Http\Controllers\Auth\LoginController::class, 'userlogin']);
    Route::get('/adminhome', [App\Http\Controllers\HomeController::class, 'index'])->name('Dashboards');

Route::group(['middleware' =>['auth', 'admin','verified']], function()
{
 Route::prefix('admin')->group(function (){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Dashboards');
     Route::get('/adminlogout', [App\Http\Controllers\User\UserController::class, 'adminlogout']);
    // Role
    Route::get('/deleterole/{id}',[App\Http\Controllers\User\UserController::class, 'deleterole']);
    Route::get('roles', [App\Http\Controllers\User\UserController::class, 'roles'])->name('roles');
    Route::get('role/{id?}',[App\Http\Controllers\User\UserController::class, 'role']);
    Route::post('/saverole', [App\Http\Controllers\User\UserController::class, 'saverole']);
     //Users
    Route::get('/deleteuser/{id}', [App\Http\Controllers\User\UserController::class, 'deleteuser']);
    Route::get('users', [App\Http\Controllers\User\UserController::class, 'users'])->name('users');
    Route::get('user/{id?}', [App\Http\Controllers\User\UserController::class, 'user']);
    Route::post('/saveuser', [App\Http\Controllers\User\UserController::class, 'saveuser']);
    //User Messages
    Route::get('/usermessages', [App\Http\Controllers\User\UserController::class, 'usermessages']);
    Route::get('/messagemodal/{id}', [App\Http\Controllers\User\UserController::class, 'usermessages']);
    //Users Videos
    Route::get('/deletevideo/{id}', [App\Http\Controllers\User\UserController::class, 'deletevideo']);
    Route::get('video', [App\Http\Controllers\User\UserController::class, 'video'])->name('video');
    Route::get('videos/{id?}', [App\Http\Controllers\User\UserController::class, 'videos']);
    Route::post('/savevideo', [App\Http\Controllers\User\UserController::class, 'savevideo']);

   //Settings
    Route::get('/settings', [App\Http\Controllers\Settings\SettingsController::class, 'settings']);
    Route::get('/setting/{id?}', [App\Http\Controllers\Membership\MembershipController::class, 'setting']);
    Route::post('/saveportalsettings', [App\Http\Controllers\Settings\SettingsController::class, 'saveportalsettings']);
    Route::get('/deletesetting/{id}', [App\Http\Controllers\Membership\MembershipController::class, 'deletesetting']);

    //customers
    Route::get('customer', [App\Http\Controllers\Customer\CustomerController::class, 'customer'])->name('customer');
    Route::get('customers/{id?}', [App\Http\Controllers\Customer\CustomerController::class, 'customers']);
    Route::post('/savecustomer', [App\Http\Controllers\Customer\CustomerController::class, 'savecustomer']);
    Route::get('/deletecustomer/{id}', [App\Http\Controllers\Customer\CustomerController::class, 'deletecustomer']);
    Route::post('/upload_file', [App\Http\Controllers\Customer\CustomerController::class, 'upload_file']);
      Route::get('/customermodal/{id}', [App\Http\Controllers\Customer\CustomerController::class, 'customermodal']);
      Route::get('/print', [App\Http\Controllers\Customer\CustomerController::class,'print']);

       //Descriptions
    Route::get('descriptions', [App\Http\Controllers\Description\DescriptionController::class, 'descriptions'])->name('descriptions');
    Route::get('description/{id?}', [App\Http\Controllers\Description\DescriptionController::class, 'description']);
    Route::post('/savedescription', [App\Http\Controllers\Description\DescriptionController::class, 'savedescription']);
    Route::get('/deletedescription/{id}', [App\Http\Controllers\Description\DescriptionController::class, 'deletedescription']);
  
});

});

//Frontend

Route::get('/',[App\Http\Controllers\Frontend\HomeController::class,'home']);
;
Route::post('/savecustomer', [App\Http\Controllers\Frontend\HomeController::class, 'savecustomer']);






