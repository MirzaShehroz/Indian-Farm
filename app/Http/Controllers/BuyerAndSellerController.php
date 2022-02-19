<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sellers;
use Crypt;
use DB;
use Auth;
use Illuminate\Support\Facades\URL;
class BuyerAndSellerController extends Controller
{
    
    // register form
    public function registerForm() {
        return view('seller_and_buyer_wireframe.register');
    }
    public function sendotp(Request $req){
      
        $req->validate([
            'contact_no'=>"required|unique:App\Models\User,contact_no",
            'fname'=>'required',
        ],
            [
                'contact_no.unique'=>'Contact Number Already Registered',
                'contact_no.required'=>'Mobile Number Required',
                'fname.unique'=>'Name Required'
            ]
        
        );

        $data=$req->all();


        if($data['agree']==null){
            return back()->with('error','Kindly agree with term & conditions');;
        }
        else{
            
            $otp=mt_rand( 100000, 999999 );
            $seller=new Sellers;
            DB::beginTransaction();
            try{
                $user=new User;
                DB::beginTransaction();
                try{
                    $user->user_role='seller';
                    $user->contact_no=$data['contact_no'];
                    $user->first_name=$data['fname'];
                    $user->mob_otp=$otp;
                    $user->save();
                    DB::commit();
                }catch(\Exception $e){
                    dd($e);
                    DB::rollback();
                    return back()->with('erros','There is some error in login');
                }

               
                $seller->user_id=$user->id;
                $id=Crypt::encryptString($user->id);
                $seller->save();
                DB::commit();
            
                return redirect('b&s/register-verification-form/'.$id);

            }catch(\Exception $e){
                dd($e);
                DB::rollback();
                return back()->with('error','There is some error in login');
            }
           
            
        }
    }
    
    // edit-profile page
    public function editProfilePage() {
        return view('seller_and_buyer_wireframe.edit_profile');
    }

    // your-add page
    public function yourAddPage() {
        return view('seller_and_buyer_wireframe.your_ads');
    }

    // post an add page
    public function postAnAdd() {
        return view('seller_and_buyer_wireframe.post_an_ad');
    }

    // your subscription page
    public function yourSubscription() {
        return view('seller_and_buyer_wireframe.your_subscription');
    }

    // post ad cow one
    public function postAdCowOne() {
        return view('seller_and_buyer_wireframe.post_ad_cow_one');
    }

    // post ad cow multiple
    public function postAdCowMultiple() {
        return view('seller_and_buyer_wireframe.post_ad_cow_multiple');
    }

    // post ad buffalo one
    public function postAdBuffaloOne() {
        return view('seller_and_buyer_wireframe.post_ad_buffalo_one');
    }

    // post ad buffalo multiple
    public function postAdBuffaloMultiple() {
        return view('seller_and_buyer_wireframe.post_ad_buffalo_multiple');
    }

    // post ad Goat one
    public function postAdGoatOne() {
        return view('seller_and_buyer_wireframe.post_ad_goat_one');
    }

    // post ad Goat multiple
    public function postAdGoatMultiple() {
        return view('seller_and_buyer_wireframe.post_ad_goat_multiple');
    }

    // post ad Bull one
    public function postAdBullOne() {
        return view('seller_and_buyer_wireframe.post_ad_bull_one');
    }

    // post ad Bull multiple
    public function postAdBullMultiple() {
        return view('seller_and_buyer_wireframe.post_ad_bull_multiple');
    }

    // post ad Sheep one
    public function postAdSheepOne() {
        return view('seller_and_buyer_wireframe.post_ad_sheep_one');
    }

    // post ad Sheep multiple
    public function postAdSheepMultiple() {
        return view('seller_and_buyer_wireframe.post_ad_sheep_multiple');
    }

    // subscription purchase form
    public function subscriptionPurchase() {
        return view('seller_and_buyer_wireframe.subscription_purchase');
    }

    // login form
    public function loginForm() {
        return view('seller_and_buyer_wireframe.login');
    }

    // login verification form
    public function loginVerificationForm() {
        
        return view('seller_and_buyer_wireframe.login_verification');
    }

    public function checkotp(Request $req){
      
       
        $data=$req->all();
     
        if($data['type']=='login-verification-form'){
            $id=Crypt::decryptString($data['id']); 
            $user=User::where('id',$id)->first();
            if($user->mob_otp==$data['otp']){
                return redirect('/');
            }else{
                return back()->with('error','Wrong Otp');
            }
        }
        elseif($data['type']=='register-verification-form'){
            $id=Crypt::decryptString($data['id']); 
            $user=User::where('id',$id)->first();
            if($user->mob_otp==$data['otp']){
                Auth::login($user);
                return redirect()->route('B&SLoginPage')->with('msg','Now You can Login');
            }else{
                return back()->with('error','Wrong Otp');
            }
        }
        
    }

    public function resendotp($id){
        $id=Crypt::decryptString($id);
        $user=User::where('id',$id)->first();
        $otp=mt_rand( 100000, 999999 );
        $user->mob_otp=$otp;
        $user->save();
        return back()->with('success','Otp Send SuccessFully');
    }

    public function loginuser(Request $req){
        
        
        $user=User::where('contact_no',$req->mobileno)->first();

        if($user!=null){
            $otp=mt_rand( 100000, 999999 );
            $id=Crypt::encryptString($user->id);
            $user->mob_otp=$otp;
            $user->save();
             return redirect('b&s/login-verification-form/'.$id);
        }
        else{
            return back()->with('error','you are not register');
        }
       
    }

    public function loginotp(){
        return view('seller_and_buyer_wireframe.login_verification');
    }
    // View Cow page
    public function viewCow() {
        return view('seller_and_buyer_wireframe.view_cows');
    }

    // View Goat page
    public function viewGoat() {
        return view('seller_and_buyer_wireframe.view_goat');
    }

    // View Bull page
    public function viewBull() {
        return view('seller_and_buyer_wireframe.view_bull');
    }

    // View Buffalo page
    public function viewBuffalo() {
        return view('seller_and_buyer_wireframe.view_buffalo');
    }

    // View sheep page
    public function viewSheep() {
        return view('seller_and_buyer_wireframe.view_sheeps');
    }

    // chat page
    public function chat() {
        return view('seller_and_buyer_wireframe.chat');
    }


}
