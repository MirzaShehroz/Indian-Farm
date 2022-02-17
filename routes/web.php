<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\VetController;
use App\Http\Controllers\AppointmentBookController;
use App\Http\Controllers\CertifyController;
use App\Http\Controllers\TransportBookedController;
use App\Http\Controllers\EducationVideoController;
use App\Http\Controllers\NewsUpdateController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Auth;
use App\Models\AdsAddress;
use App\Models\AdsPhoto;
use App\Models\AdsVideo;
use App\Models\Ads;
use App\Models\User;
use App\Models\Vet;
use App\Models\AppointmentBook;
use App\Models\certifyAnimal;
use App\Models\TransportBooked;
use App\Models\TransportFrom;
use App\Models\TransportTo;
use App\Models\EducationVideo;
use App\Models\NewsUpdate;

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
})->name('verify-otpp');
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
        Route::post('admin/transport-driver/delete',[TransportController::class,'delete'])->name('deletetransport');

        // certify animal
        Route::Get('admin/certify/animal',[CertifyController::class,'index'])->name('certify_index');
        Route::post('admin/cerfiy/appointment/register',[CertifyController::class,'registerAppoint'])->name('register_cappointment');
        Route::post('admin/certify-appointment/update',[CertifyController::class,'update'])->name('update');
        Route::post('admin/certify-appointment/delete',[CertifyController::class,'deleteCertify'])->name('deleteCertify');
        Route::any('/search/certify-appointments',[CertifyController::class,'search'])->name('certify_search');




        Route::get('changepassword',[AdminController::class,'changepassword']);
        // adds 
        Route::post('add/ads',[AdminCOntroller::class,'addads']);
        Route::any('adds/search',[AdminController::class,'searchAdd'])->name('search');
        Route::post('admin/add/delete',[AdminController::class,'deleteadd'])->name('deleteadd');
        Route::post('admin/adds/update',[AdminController::class,'updateAdds'])->name('updateAdds');






    Route::get('logout',function(){
        $user=User::where('id',Auth::user()->id)->first();
        $user->login_status=0;
        $user->save();
        Auth::logout();

        return redirect('admin/login');
    });
    
    
    Route::get('admin/ads',function(){
    
        $ads=Ads::join('ads_adress', 'ads.ads_address_id' ,'=','ads_adress.id')->paginate(5);
    
        //$ads=Ads::all();
    
        return view('admin.ads',compact('ads'));
    });
    
    Route::get('admin/appointmentbooked',function(){
        $appointment=AppointmentBook::join('appointment_address','appointments.appointment_address_id','appointment_address.id')->paginate(5);
        $vets=Vet::all();
        return view('admin.appointment_booked',compact('appointment','vets'));
    });
    Route::get('admin/transportbooked',function(){
        $transport=TransportBooked::paginate(5);
        return view('admin.transport_booked',compact('transport'));
    });
    
    Route::get('admin/profile',function(){
       // $id=User::where('id',Auth::user()->id)->first();
        $user=User::where('id',Auth::user()->id)->first();
       $user= $user::join('user_address', 'users.address_id' ,'=','user_address.id')->first();
       dd($user);

        return view('admin.myprofile',compact('user'));
    });
    
    Route::get('admin/contentmanagement',function(){
        $education=EducationVideo::all();
        $news=NewsUpdate::orderBy('id', 'desc')->limit(2)->get();
        $latestnews=NewsUpdate::orderBy('id', 'desc')->get();
        return view('admin.contentmanagement',compact('education','news','latestnews'));
    });
    
    //////////////////////////////////////Transport////////////////////////////
    
    
    Route::post('getads/{id}',[AdminController::class,'getads']);
    
    //admin update profile
    Route::post('admin/profile/update',[AdminController::class,'updateprofile']);
    
    
    Route::post('add/appointments',[AppointmentBookController::class,'add']);
    
    Route::post('getappointment/{id}',[AppointmentBookController::class,'getappointment']);
    Route::post('update/appointment',[AppointmentBookController::class,'updateappointment']);
    Route::post('delete/appointment',[AppointmentBookController::class,'delete']);
    Route::any('search/appointment',[AppointmentBookController::class,'search']);
    
    
    //transport booked
    Route::post('add/transport/booked',[TransportBookedController::class,'add']);

    //delete transport booking
    Route::post('delete/transport/booking',[TransportBookedController::class,'delete']);

    Route::post('gettransport/booking/{id}',[TransportBookedController::class,'getdata']);

    //transport book
    Route::post('update/transport/book',[TransportBookedController::class,'update']);

    //search book transport
    Route::post('search/booked/transport',[TransportBookedController::class,'search']);

    //content education video
    Route::post('upload/video',[EducationVideoController::class,'add']);

    //delete video
    Route::post('delete/education/video',[EducationVideoController::class,'delete']);

    //search education
   // Route::post('searcheducation',[EducationVideoController::class,'search']);

    //news and update
    Route::post('add/news',[NewsUpdateController::class,'add']);

    //news details
    Route::post('getnewsdetail/{id}',[NewsUpdateController::class,'getdata']);

    Route::post('viewnewsdetail/{id}',[NewsUpdateController::class,'getdata']);

    //delete news update
    Route::post('delete/news',[NewsUpdateController::class,'deletenew']);

    //update news update
    Route::post('update/url',[NewsUpdateController::class,'editnews']);









    



    });

    Route::get('login',function(){
        return view('transport.login');
    });
    

    Route::post('login/user',[TransportController::class,'login']);

    Route::get('transport/index',function(){
        return view('transport.index');
    });
    
    Route::get('transport/appointment',function(){
        return view('transport.appointments');
    });
    
    Route::get('transport/profile',function(){
        return view('transport.myprofile');
    });

    Route::get('logout',function(){
       
        Auth::logout();

        return redirect('admin/login');
    });



});

