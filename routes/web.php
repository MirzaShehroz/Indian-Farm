<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\BuyerAndSellerController;
use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\VetController;
use App\Http\Controllers\AppointmentBookController;
use App\Http\Controllers\CertifyController;
use App\Http\Controllers\TransportBookedController;
use App\Http\Controllers\EducationVideoController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\NewsUpdateController;
use App\Http\Controllers\CommunityForumController;
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
use App\Models\Question;
use Psy\Readline\Transient;

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
Route::match(['get', 'post'],'verify/otp',[AdminController::class,'verifyotp'])->name('verify-otp');


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
        //change password
        Route::post('admin/change/password',[AdminController::class,'adminChangepassword']);
        //change email
        Route::post('admin/change/email/{id}/{semail}',[AdminController::class,'changeemail']);
        //change email otp
        Route::post('change/email/otp/{id}/{semail}',[AdminController::class,'changeEmailOtp'])->name('emailOtp');
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
        Route::any('adds/search',[AdminController::class,'searchAdd'])->name('search-ads');
        Route::post('admin/add/delete',[AdminController::class,'deleteadd'])->name('deleteadd');
        Route::post('admin/adds/update',[AdminController::class,'updateAdds'])->name('updateAdds');






    Route::get('logout',function(){
        $user=User::where('id',Auth::user()->id)->first();
        $user->login_status=0;
        $user->save();
        Auth::logout();

        return redirect('/');
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
        $drivers=User::where('user_role','transport')->get();
        $transport=TransportBooked::paginate(5);
        return view('admin.transport_booked',compact('transport','drivers'));
    });

    Route::get('admin/profile',function(){
       // $id=User::where('id',Auth::user()->id)->first();
        $user=User::where('id',Auth::user()->id)->first();
       $user= $user::join('user_address', 'users.address_id' ,'=','user_address.id')->first();
          //  dd(Auth::user()->id);
        return view('admin.myprofile',compact('user'));
    });

    Route::get('admin/contentmanagement',function(){
        $education=EducationVideo::paginate(5);

        $news=NewsUpdate::orderBy('id', 'desc')->limit(2)->get();
        $latestnews=NewsUpdate::orderBy('id', 'desc')->paginate(5);
        $question=Question::paginate(5);
        return view('admin.contentmanagement',compact('education','news','latestnews','question'));
    });

    Route::post('edit/forum/{id}',[CommunityForumController::class,'admin_edit']);
    Route::post('delete/forum',[CommunityForumController::class,'admin_delete']);


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
    Route::post('add/transport/booked',[TransportBookedController::class,'add'])->name('transport_book');

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
    })->name('login');
    Route::post('login/user',[TransportController::class,'login']);

///--------------------------------------Transport Dashbaord----------------------------------///
    Route::group(['middleware'=>['TransportAuth']],function(){
        Route::get('transport/index',function(){
            $allappoint=TransportBooked::where('driver_id',Auth::user()->id)->count();
            $date=date("Y-m-d");
            $today=TransportBooked::where('driver_id',Auth::user()->id)->where('date_of_transport',$date)->count();

            return view('transport.index',compact('allappoint','today'));
        });

        Route::get('transport/appointment',function(){
            $detail=TransportBooked::where('book_transport.driver_id',Auth::user()->id)->get();


            //dd($booked);
            return view('transport.appointments',compact('detail'));
        });

        Route::post('transport/booking/detail/{id}',[TransportController::class,'getdata']);

        Route::post('transport/update/detail',[TransportController::class,'updatedata']);


        Route::get('trans/profile',function(){
            $user=User::join('transports','transports.user_id','=','users.id')
            ->join('user_address','user_address.id','=','users.address_id')
            ->where('users.id',Auth::user()->id)
            ->where('users.user_role','transport')
            ->first();
            return view('transport.myprofile',compact('user'));
        })->name('transportprofile');

         //change email
         Route::post('transport/change/email/{id}/{semail}',[AdminController::class,'changeemail']);
        //change email otp
        Route::post('transport/change/email/otp/{id}/{semail}',[AdminController::class,'changeEmailOtp'])->name('emailOtp');

        //update profile
        Route::post('update/trasport/profile',[TransportController::class,'updateprofile']);

        //change password
        Route::post('transport/change/passowrd',[TransportController::class,'changePassword']);


    });

//--------------------------------------------------------------------------------------------//

    // guest accounts route
    Route::get('transport/search',[GuestController::class,'search'])->name('transport-search');
    Route::get('transport/book',function(){
        return view('guest.transport.book_transport');
    })->name('transport-book');
    Route::get('transport/vendor/register',function(){
        return view('guest.transport.register_vendor');
    })->name('vendor-register');
    Route::get('transport-verify/{id}',function(){
        return view('guest.transport.verify_otp');
    })->name('verify_otp');

    // guest vendor registration
    route::post('transport/vendor/register',[TransportController::class,'guestRegister'])->name('guestRegister');
    route::match(['get', 'post'],'trasport/vendor/verify',[TransportController::class,'verifyotp'])->name('transport-verifyotp');

    Route::post('transport/vendor/booked',[GuestController::class,'add'])->name('book-vendor');

    Route::get('transport/profile',function(){
        return view('transport.myprofile');
    });
    Route::post('vendor/search',[GuestController::class,'searchResult'])->name('searchResult');
    Route::get('logout',function(){

        Auth::logout();

        return redirect('/');
    });

//-----------------------------------------Vet Dashboard--------------------------------------//

Route::group(['middleware'=>['VetAuth']],function(){
    Route::get('vet/index',function(){
        $appointments=AppointmentBook::where('vet_id',Auth::user()->id)->count();
        $date=date("Y-m-d");
        $today=AppointmentBook::where('vet_id',Auth::user()->id)->where('appointment_date',$date)->count();

        return view('vet.index',compact('appointments','today'));
    });
    Route::get('vet/appointment',function(){

        $detail=AppointmentBook::where('vet_id',Auth::user()->id)->get();

        return view('vet.appointments',compact('detail'));
    });
    Route::get('vet/certify',function(){
        $details=certifyAnimal::where('vet_id',Auth::user()->id)->paginate(5);
        return view('vet.certify',compact('details'));
    });
    Route::get('vet/profile',function(){
        $user=User::join('vets','vets.user_id','=','users.id')
        ->join('user_address','user_address.id','=','users.address_id')
        ->where('users.id',Auth::user()->id)
        ->where('users.user_role','vet')
        ->first();

        return view('vet.myprofile',compact('user'));
    });
    //change password
    Route::post('vet/change/password',[VetController::class,'vetChangePassword']);
    Route::post('update/vet/profile',[VetController::class,'updateprofile']);

    //edit
    Route::post('vetappointment/{id}',[AppointmentBookController::class,'getappointment']);
    Route::post('vet/edit/appointment',[VetController::class,'editappointment']);
    Route::post('cerify/update/detail',[VetController::class,'updateappointment']);


    Route::post('certify/appointment/{id}',[VetController::class,'getcertify']);

     //change email
     Route::post('vet/change/email/{id}/{semail}',[AdminController::class,'changeemail']);
     //change email otp
     Route::post('vet/change/email/otp/{id}/{semail}',[AdminController::class,'changeEmailOtp'])->name('emailOtp');

});

});



// guest vet route
Route::get('vet/search',[GuestController::class,'searchVet'])->name('searchVet');
Route::any('vet/search/result',[GuestController::class,'searchVetResult'])->name('searchVetResult');
Route::get('vet/book/appointment',[GuestController::class,'bookAppointment'])->name('bookAppointment');
Route::post('vet/book/appointment/submit',[GuestController::class,'appointment'])->name('appointment');
Route::get('vet/certify/animal',[GuestController::class,'certifyAnimal'])->name('certifyAnimal');
Route::post('vet/certify/animal/appointment',[GuestController::class,'certifyRegister'])->name('certifyRegister');
Route::get('vet/register',[GuestController::class,'registerVet'])->name('registerVet');
Route::post('vet/register/submit',[GuestController::class,'registerRequest'])->name('registerRequest');

// post add
Route::get('post/add',[AddController::class,'index'])->name('addView');


/////////////////////////////////////////////////Front end////////////////////////////////
Route::get('/education',[EducationVideoController::class,'showFrontend']);
Route::get('news_updates',[NewsUpdateController::class,'showFrontend']);
Route::get('news_detail/{id}',[NewsUpdateController::class,'get_news_updates']);
Route::get('forum_community',[CommunityForumController::class,'getall']);
Route::get('post/question',[CommunityForumController::class,'userquestion']);
Route::post('user/add/question',[CommunityForumController::class,'postquestion']);
Route::get('my/post',function(){
    $question=Question::where('user_id',Auth::user()->id)->get();
    return view('seller_and_buyer_wireframe.view_post',compact('question'));
});

// -------------------------------------view Adds----------------------------------------------

Route::Get('cow',[GuestController::class,"cow"])->name('adds.cow');
Route::Get('sheep',[GuestController::class,"sheep"])->name('adds.sheep');
Route::Get('bull',[GuestController::class,"bull"])->name('adds.bull');
Route::Get('buffalo',[GuestController::class,"buffalo"])->name('adds.buffalo');
Route::Get('goat',[GuestController::class,"goat"])->name('adds.goat');

//-------------------------------------- 47-Code-----------------------------------------------

// B&S Edit Profile Form
Route::get('/b&s/edit-profile-form',[BuyerAndSellerController::class,'editProfilePage'])->name('B&SEditProfilePage');
Route::post('/b&s/edit-profile-form',[BuyerAndSellerController::class,'edit'])->name('B&SEditProfile');
Route::Post('/b&s/personal/details/update',[BuyerAndSellerController::class,'personalDetails'])->name('B&SEditpersonal');
Route::Post('/b&s/address/details/update',[BuyerAndSellerController::class,'addressDetails'])->name('B&SEditaddress');
Route::Post('/b&s/profile/image/update',[BuyerAndSellerController::class,'profileDetails'])->name('B&SEditprofile');





// B&S Your Add Form
Route::get('/b&s/your-ads-form',[BuyerAndSellerController::class,'yourAddPage'])->name('B&SEditYourAddPage');
Route::post('/b&s/your-ads-form/remove',[BuyerAndSellerController::class,'removeAdd'])->name('B&S.remove');

// B&S Post an Add Form
Route::get('/b&s/post-an-ad-form',[BuyerAndSellerController::class,'postAnAdd'])->name('B&SPostAnAddPage');

// B&S Your Subscription Form
Route::get('/b&s/your-subscription-form',[BuyerAndSellerController::class,'yourSubscription'])->name('B&SYourSubscriptionPage');

// B&S Post Ad Cow One Form
Route::get('/b&s/post-add-cow-one-form',[BuyerAndSellerController::class,'postAdCowOne'])->name('B&SPostAdCowOnePage');
Route::post('/b&s/post-add-cow-one-form/submit',[BuyerAndSellerController::class,'AdCowOne'])->name('B&SPostAdds');


// B&S Post Ad Cow Multiple Form
Route::get('/b&s/post-add-cow-multiple-form',[BuyerAndSellerController::class,'postAdCowMultiple'])->name('B&SPostAdCowMultiplePage');
// Route::post('/b&s/post-add-cow-multiple-form/submit',[BuyerAndSellerController::class,'AdCowMultiple'])->name('B&SPostAdCowMultiple');

// B&S Post Ad buffalo One Form
Route::get('/b&s/post-add-buffalo-one-form',[BuyerAndSellerController::class,'postAdBuffaloOne'])->name('B&SPostAdBuffaloOnePage');

// B&S Post Ad buffalo Multiple Form
Route::get('/b&s/post-add-buffalo-multiple-form',[BuyerAndSellerController::class,'postAdBuffaloMultiple'])->name('B&SPostAdBuffaloMultiplePage');

// B&S Post Ad goat One Form
Route::get('/b&s/post-add-goat-one-form',[BuyerAndSellerController::class,'postAdGoatOne'])->name('B&SPostAdGoatOnePage');

// B&S Post Ad goat Multiple Form
Route::get('/b&s/post-add-goat-multiple-form',[BuyerAndSellerController::class,'postAdGoatMultiple'])->name('B&SPostAdGoatMultiplePage');

// B&S Post Ad Bull One Form
Route::get('/b&s/post-add-bull-one-form',[BuyerAndSellerController::class,'postAdBullOne'])->name('B&SPostAdBullOnePage');

// B&S Post Ad Bull Multiple Form
Route::get('/b&s/post-add-bull-multiple-form',[BuyerAndSellerController::class,'postAdBullMultiple'])->name('B&SPostAdBullMultiplePage');

// B&S Post Ad Sheep One Form
Route::get('/b&s/post-add-sheep-one-form',[BuyerAndSellerController::class,'postAdSheepOne'])->name('B&SPostAdSheepOnePage');

// B&S Post Ad Sheep Multiple Form
Route::get('/b&s/post-add-sheep-multiple-form',[BuyerAndSellerController::class,'postAdSheepMultiple'])->name('B&SPostAdSheepMultiplePage');

// B&S Subscription Purchase Form
Route::get('/b&s/subscription-purchase-form',[BuyerAndSellerController::class,'subscriptionPurchase'])->name('B&SSubscriptionPurchasePage');

Route::get('/b&s/edit-add',[BuyerAndSellerController::class,'editAdd'])->name('B&SEditAds');
Route::post('/b&s/edit-add',[BuyerAndSellerController::class,'updateAds'])->name('B&SUpdateAds');


// B&S Login Form
Route::get('/b&s/login-form',[BuyerAndSellerController::class,'loginForm'])->name('B&SLoginPage');
Route::post('buyer/seller/login',[BuyerAndSellerController::class,'loginuser']);
Route::get('/b&s/login-verification-form/{id}',[BuyerAndSellerController::class,'loginotp']);

// B&S Register Form
Route::get('/b&s/register-form',[BuyerAndSellerController::class,'registerForm'])->name('B&SRegisterPage');
Route::post('buyer/seller/register',[BuyerAndSellerController::class,'sendotp'])->name('B&Sregister');


// B&S Login Verification Form
Route::get('/b&s/register-verification-form/{id}',[BuyerAndSellerController::class,'loginVerificationForm'])->name('B&SLoginVerificationPage');
Route::post('checkotp',[BuyerAndSellerController::class,'checkotp']);

//resend otp
Route::get('buyer/seller/resend/otp/{id}',[BuyerAndSellerController::class,'resendotp']);
// view goats
Route::get('/b&s/view-goat',[BuyerAndSellerController::class,'viewGoat'])->name('B&SViewGoat');

// view cows
Route::get('/b&s/view-cows',[BuyerAndSellerController::class,'viewCow'])->name('B&SViewCow');

// view buffalo
Route::get('/b&s/view-buffalo',[BuyerAndSellerController::class,'viewBuffalo'])->name('B&SViewBuffalo');

// view sheep
Route::get('/b&s/view-sheep',[BuyerAndSellerController::class,'viewSheep'])->name('B&SViewSheep');

// view bull
Route::get('/b&s/view-bull',[BuyerAndSellerController::class,'viewBull'])->name('B&SViewBull');

// view chat page
Route::get('/b&s/chat',[BuyerAndSellerController::class,'chat'])->name('B&SChat');

// privacy policy page
Route::get('/privacy-policy',[CommonController::class,'privacyPolicy'])->name('PrivacyPolicy');

// term and condition page
Route::get('/term-and-condition',[CommonController::class,'termAndCondition'])->name('TermAndCondition');


//---------------------------------------------------------------------------------------------
Route::view('forget/password','getemail');
Route::post('check/email',[AdminController::class,'checkEmail']);
Route::get('/forget/password/{id}',function(){
    return view('forgetpassword');
});
Route::post('user/password/change',[AdminController::class,'forgetPassword']);

///buyer seller change passsword
Route::post('buyer/change/email/{id}/{semail}',[AdminController::class,'changeemail']);
//change email otp
Route::post('buyer/change/email/otp/{id}/{semail}',[AdminController::class,'changeEmailOtp'])->name('emailOtp');