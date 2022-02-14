<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\VetController;
use App\Http\Controllers\AppointmentBookController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Auth;
use App\Models\AdsAddress;
use App\Models\AdsPhoto;
use App\Models\AdsVideo;
use App\Models\Ads;
use App\Models\User;
use App\Models\AppointmentBook;
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


Route::get('verify-otp/{id}',function(){
    return view('admin.login_verify');
})->name('verify-otp');
//Route::view('admin/dashboard','app.dashboard');
Route::get('resend/otp/{id}',[AdminController::class,'resendotp']);
Route::group(['middleware' => 'prevent-back-history'],function(){

    Route::group(['middleware'=>['AdminAuth']],function(){
        Route::get('admin/index',function(){
            return view('admin.index');
        });
        // search route
        Route::any('/search',[AdminController::class,'search'])->name('search');
        // user routes
        Route::post('admin/user/register',[AdminController::class,'registerUser'])->name('register_user');
        Route::post('admin/user/update',[AdminController::class,'update'])->name('update_user');
        Route::get('admin/users',[AdminController::class,'user'])->name('user');
        Route::post('admin/user/delete',[AdminController::class,'deleteUser'])->name('deleteUser');
        
        // vet routes
        Route::post('add/vet',[VetController::class,'addVet'])->name('addvet');
        Route::Get('admin/vets',[VetController::class,'index'])->name('index');
        Route::post('admin/vet/delete',[VetController::class,'delete'])->name('deleteVet');
        // search vet
        Route::any('/search/vet',[VetController::class,'search'])->name('vet_search');
        // vet update
        Route::post('admin/vet/update',[VetController::class,'update'])->name('update_vet');
        // password reset
        Route::post('admin/vet/update/password',[VetController::class,'changePassword'])->name('change_password');

        // transport driver
        // register
        Route::get('admin/transport-driver',[TransportController::class,'index'])->name('view_transport');
        Route::post('admin/transport/register',[TransportController::class,'register'])->name('register_transport');
        Route::any('/search/transport',[TransportController::class,'search'])->name('transport_search');
        Route::post('admin/transport/update',[TransportController::class,'update'])->name('update_transport');






    });

    Route::get('changepassword',[AdminController::class,'changepassword']);

    Route::post('add/ads',[AdminCOntroller::class,'addads']);

});

Route::get('logout',function(){
    Auth::logout();
});


Route::get('admin/ads',function(){

    $ads=Ads::join('ads_adress', 'ads.ads_address_id' ,'=','ads_adress.id')->get();

    //$ads=Ads::all();

    return view('admin.ads',compact('ads'));
});

Route::get('admin/appointmentbooked',function(){
    $appointment=AppointmentBook::join('appointment_address','appointments.appointment_address_id','appointment_address.id')->get();
    return view('admin.appointment_booked',compact('appointment'));
});
Route::get('admin/certifyanimal',function(){
    return view('admin.certify_animal');
});
Route::get('admin/transportbooked',function(){
    return view('admin.transport_booked');
});

Route::get('admin/profile',function(){
    $id=User::where('id',Auth::user()->id)->first();
    $user=$id->join('user_address', 'users.address_id' ,'=','user_address.id')->first();
   
    return view('admin.myprofile',compact('user'));
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

Route::post('getads/{id}',[AdminController::class,'getads']);

//admin update profile
Route::post('admin/profile/update',[AdminController::class,'updateprofile']);


Route::post('add/appointments',[AppointmentBookController::class,'add']);

Route::post('getappointment/{id}',[AppointmentBookController::class,'getappointment']);
Route::post('update/appointment',[AppointmentBookController::class,'updateappointment']);
Route::post('delete/appointment',[AppointmentBookController::class,'delete']);