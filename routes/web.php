<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

////////////////////////////////////////Admin/////////////////////////////////
Route::get('admin/login',function(){
    return view('admin.login');
});
Route::post('login/admin',[AdminController::class,'login']);
Route::match(['get', 'post'],'verify/otp',[AdminController::class,'verifyotp']);


Route::get('verify-otp',function(){
    return view('admin.login_verify');
})->name('verify-otp');
//Route::view('admin/dashboard','app.dashboard');
Route::get('resend/otp/{email}',[AdminController::class,'resendotp']);
Route::group(['middleware' => 'prevent-back-history'],function(){

    Route::group(['middleware'=>['AdminAuth']],function(){
        Route::get('admin/index',function(){
            return view('admin.index');
        });
        // user routes
        Route::post('admin/user/register',[AdminController::class,'registerUser'])->name('register_user');
        Route::get('admin/users',[AdminController::class,'user'])->name('user');
        Route::post('admin/user/delete',[AdminController::class,'deleteUser'])->name('deleteUser');
        Route::post('add/vet',[AdminController::class,'addVet'])->name('addvet');
    });


});

Route::get('logout',function(){
    Auth::logout();
});


Route::get('admin/ads',function(){
    return view('admin.ads');
});

Route::get('admin/vets',function(){
    return view('admin.vet');
});
Route::get('admin/transportdriver',function(){
    return view('admin.transport_driver');
});
Route::get('admin/appointmentbooked',function(){
    return view('admin.appointment_booked');
});
Route::get('admin/certifyanimal',function(){
    return view('admin.certify_animal');
});
Route::get('admin/transportbooked',function(){
    return view('admin.transport_booked');
});

Route::get('admin/profile',function(){
    return view('admin.myprofile');
});

Route::get('admin/contentmanagement',function(){
    return view('admin.contentmanagement');
});

//////////////////////////////////////Transport////////////////////////////
Route::get('transport/index',function(){
    return view('transport.index');
});

Route::get('transport/appointment',function(){
    return view('transport.appointments');
});

Route::get('transport/profile',function(){
    return view('transport.myprofile');
});