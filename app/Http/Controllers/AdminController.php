<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Sellers;
use App\Models\Address;
use Mail;
use Crypt;

class AdminController extends Controller
{
        public function login(Request $req){
            $req->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            $inputVal = $req->all();
            $inputVal['email']=$req->email;
            $inputVal['password']=$req->password;
            
           $nonreg=User::where('email',$inputVal['email'])->count();
          
          
           if($nonreg>0){
                $user=User::where('email',$inputVal['email'])->first();
                $name=  $user->first_name.''.$user->middle_name.''.$user->last_name;
            if (auth()->attempt(array('email' => $inputVal['email'], 'password' => $inputVal['password']))){
                
                if($user->status==1){
                   
                   $otp=mt_rand( 100000, 999999 );
                   $user->email_otp=$otp;
                   
                   if(auth()->user()->user_role==1){

                    User::where('email',$inputVal['email'])->update(['email_otp'=>$otp]);
                    $email=$inputVal['email'];
                    $messagedata=[
            
                        'otp'=>$otp,
                        'name'=>$name
                         
                    ];
        
                    Mail::send('admin.verify_mail',$messagedata,function($message)use($email){
        
                        $message->to($email)->subject('Login OTP');
            
                    } );
                    $email=Crypt::encryptString($inputVal['email']);
                    $id=Crypt::encryptString($user->id);
                    // dd($id );
                    // dd($email);
                    //return view('admin.login_verify',compact('email'));
                    return redirect()->route('verify-otp',$id)->with(['email'=>$inputVal['email']]);

                   }
                }
                else{
                    return back()->with('error','Wait For Admin Approval');
                }

            }
            else{
                return back()->with('error','Email Or Password Is Wrong');
            }

           }else{
               return back()->with('error','This Email Not Registered');
           }
        }

        public function verifyotp(Request $req){
            $id=$req->id;
            $id=Crypt::decryptstring($id);
            
            $user=User::where('id',$id)->first();

            if($id==null){
            return back()->with('error','Try Again or Click Resend otp');

            }
            elseif( $user->email_otp==$req->otp){
             return redirect('admin/index');
            }
            else{
                return back()->with('error','Wrong Otp Please Enter Right Otp');
            }

        }

        public function resendotp($id){
            $user_id=Crypt::decryptstring($id);
            if($user_id!=null){
                $otp=mt_rand( 100000, 999999 );
                $user=User::where('id',$user_id)->first();
                $name=$user->first_name.' '.$user->middle_name.' '.$user->last_name;

               $query= User::where('id',$user_id)->update(['email_otp'=>$otp]);
               
                    $email=$user->email;
                    $messagedata=[
            
                        'otp'=>$otp,
                        'name'=>$name
                         
                    ];
        
                    Mail::send('admin.verify_mail',$messagedata,function($message)use($email){
        
                        $message->to($email)->subject('Login OTP');
            
                    } );
                    return back()->with('success','Check Your Mail for OTP');

            }else{
                return back()->with('error','Try Agian to login');
            }
        }
        
        public function user(){

            $data=User::join('user_address','users.address_id','=','user_address.id')
            ->join('sellers','users.id','sellers.user_id')
            ->get();
            // dd($data);
            return view('admin.user',compact("data"));
        }
        

        public function registerUser(Request $req){
            // dd($req->profile);
            $validated = $req->validate([
                'profile'=>'required',
                'full_name' => 'required|max:255',
                'owner_Status'=>'required',
                'farm_name'=>'required',
                'status'=>'required',
                'contact_no'=>'required|unique:users',
                'email'=>'required|unique:users',
                'address1'=>'required',
                'area'=>'required',
                'city'=>'required',
                'state'=>'required',
                'district'=>'required',
                'taluka' => 'required',
                'pin_code' => 'required',
            ]);
            $address=new Address;
            $address->address_line1=$req->address1;
            $address->address_line2=$req->address2;
            $address->area=$req->area;
            $address->city=$req->city;
            $address->state=$req->state;
            $address->district=$req->district;
            $address->taluka=$req->taluka;
            $address->zipcode=$req->pin_code;
            $address->save();

            $address_id=$address->id;
            // dd($address_id);

            $user=new User;
            $user->first_name=$req->full_name;
            // $user->=$req->full_name;
            $user->user_role=2;
            $user->membership_type=$req->status;
            $user->owner_status=$req->owner_Status;
            $user->first_name=$req->full_name;
            $user->contact_no=$req->contact_no;
            $user->email=$req->email;
            $user->address_id=$address_id;
            $user->password=Hash::make('07070707');
            $user->status=0;
            $user->save();
            $user_id=$user->id;
            // dd($user_id);

            // dd($req->profile);
            if($req->hasFile('profile')){
                $file=$req->profile;
                $name = time().''.rand(1000000,999999999999);
                $filepath='/uploads/'.$user_id.'/profile/';
                $ext= $file->getClientOriginalExtension();
                $file->move(public_path() .$filepath,$name.'.'.$ext);
                $fileName=$name.'.'.$ext;
                $imgData=  $filepath.$fileName;

                $user->image=$imgData;
                $user->save();
            }

            // dd($req->farm_name);
            $seller=new Sellers;
            $seller->user_id=$user_id;
            $seller->farm_name=$req->farm_name;
            $seller->status=1;
            $seller->save();

            return back()->with('successMsg','Seller added successfully!');
        }

        // delete user
        public function deleteUser(Request $req){
            // dd($req->user_id);
            $user=User::where('id',$req->user_id)->delete();
            // dd($user);
            return back()->with('infoMsg','User deleted Successfully!');
        } 
        public function addVet(){
            return 'submitted';
        }

        
}


