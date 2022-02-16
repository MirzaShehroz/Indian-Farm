<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Sellers;
use App\Models\Address;
use App\Models\AdsAddress;
use App\Models\AdsPhoto;
use App\Models\AdsVideo;
use App\Models\Ads;
use Illuminate\Support\Facades\Redis;
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

                    if(auth()->user()->user_role=='admin'){

                        User::where('email',$inputVal['email'])->update(['email_otp'=>$otp]);
                        $email=$inputVal['email'];
                        $messagedata=[

                            'otp'=>$otp,
                            'name'=>$name

                        ];

                        Mail::send('admin.verify_mail',$messagedata,function($message)use($email){

                            $message->to($email)->subject('Login OTP');

                        } );

                        $id=Crypt::encryptString($user->id);
                        // dd($id );
                        // dd($email);
                        //return view('admin.login_verify',compact('email'));
                        // return redirect()->route('verify-otpp',$id)->with(['email'=>$inputVal['email']]);
                        return redirect('verify-otp/'.$id)->with(['email'=>$inputVal['email']]);

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
        elseif( $user->email_otp==$req->otp ){
            $user->login_status=1;
            $user->save();
            return redirect('admin/index');
        }
        else{
            return back()->with('error','Wrong Otp Please Enter Right Otp');
        }

    }

    // search
    public function search(Request $req){
        $data=User::join('user_address','users.address_id','=','user_address.id')
            ->join('sellers','users.id','sellers.user_id')
            ->where('first_name',$req->full_name)
            ->orWhere('contact_no',$req->contact_no)
            ->orWhere('email',$req->email)
            ->orWhere('area',$req->area)
            ->orWhere('city',$req->city)
            ->orWhere('state',$req->state)
            ->orWhere('district',$req->district)
            ->orWhere('taluka',$req->taluka)
            ->get();
        // dd($data);
        $count=$data->count();
        // dd($count);
        if($count!=0){
            return view('admin.user',compact("data"))->with('successMsg','Item found successfully');
        }
        else{
            return view('admin.user',compact("data"))->with('errorMsg','Item not found!');
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

    public function changepassword(Request $req){
        dd($req->id);
    }


    public function addads(Request $req){

        $req->validate([
            'image'=>'required|mimes:jpeg,png,jpg|max:2048',
            'video'=>'required|mimes:mp4,mov,ogg | max:20000',
            'animal_type'=>'required',
            'price'=>'required',
            'weight'=>'required|integer',
            'age'=>'required|integer',
            'no_animals'=>'required|integer',
            'breed'=>'required',
            'breed_type'=>'required',
            'pregnant'=>'required',
            'month_pregnancy'=>'required',
            'area'=>'required',
            'vaccinated'=>'required',
            'milk_capacity'=>'required',
            'certified_reg_no'=>'required',
            'certified'=>'required',
            'address_line1'=>'required',
            'address_line2'=>'required',
            'state'=>'required',
            'district'=>'required',
            'zipcode'=>'required',
            'taluka'=>'required'

        ]);


        $ads=new Ads;
        DB::beginTransaction();
        try{

            $adsphoto=new AdsPhoto;
            DB::beginTransaction();
            try{

                if($req->hasfile('image')) {
                    $file=$req->image;
                    $ran=mt_rand( 10000000, 99999999 );
                    $name=time().$ran.'.'.$file->getClientOriginalExtension();
                    $filepath='Ads/images/';
                    $file->move(public_path().'/'.$filepath,$name);
                    $adsphoto->photo1 = $filepath.$name;

                }
                if($req->hasfile('image1')) {
                    $file=$req->image1;
                    $ran=mt_rand( 10000000, 99999999 );
                    $name=time().$ran.'.'.$file->getClientOriginalExtension();
                    $filepath='Ads/images/';
                    $file->move(public_path().'/'.$filepath,$name);
                    $adsphoto->photo2 = $filepath.$name;

                }
                if($req->hasfile('image2')) {
                    $file=$req->image2;
                    $ran=mt_rand( 10000000, 99999999 );
                    $name=time().$ran.'.'.$file->getClientOriginalExtension();
                    $filepath='Ads/images/';
                    $file->move(public_path().'/'.$filepath,$name);
                    $adsphoto->photo3 = $filepath.$name;

                }
                if($req->hasfile('image3')) {
                    $file=$req->image3;
                    $ran=mt_rand( 10000000, 99999999 );
                    $name=time().$ran.'.'.$file->getClientOriginalExtension();
                    $filepath='Ads/images/';
                    $file->move(public_path().'/'.$filepath,$name);
                    $adsphoto->photo4 = $filepath.$name;

                }
                if($req->hasfile('image4')) {
                    $file=$req->image4;
                    $ran=mt_rand( 10000000, 99999999 );
                    $name=time().$ran.'.'.$file->getClientOriginalExtension();
                    $filepath='Ads/images/';
                    $file->move(public_path().'/'.$filepath,$name);
                    $adsphoto->photo5 = $filepath.$name;

                }
                // dd($adsphoto);
                $adsphoto->save();
                DB::commit();
            }catch(\Exception $e){

                DB::rollback();
                return "failed1";
            }
            $adsvideo=new AdsVideo;
            DB::beginTransaction();
            try{

                if($req->hasfile('video')) {
                    $file=$req->video;
                    $ran=mt_rand( 10000000, 99999999 );
                    $name=time().$ran.'.'.$file->getClientOriginalExtension();
                    $filepath='Ads/video/';
                    $file->move(public_path().'/'.$filepath,$name);
                    $adsvideo->video= $filepath.$name;

                }
                // dd($adsvideo);
                $adsvideo->save();
                DB::commit();
            }catch(\Exception $e){

                DB::rollback();
                return back()->with('warningMsg','There some Problem try again');;
            }



            $adsaddress = new AdsAddress;
            DB::beginTransaction();
            try{

                $adsaddress->addressline1=$req->address_line1;
                $adsaddress->addressline2=$req->address_line2;
                $adsaddress->area=$req->area;
                $adsaddress->takula=$req->taluka;
                $adsaddress->district=$req->district;
                $adsaddress->zipcode=$req->zipcode;
                $adsaddress->state=$req->state;
                $adsaddress->save();
                DB::commit();
            }catch(\Exception $e){
                DB::rollback();
                return back()->with('warningMsg','There some Problem try again');;
            }






            $ads->user_id=Auth::user()->id;
            $ads->animal_type=$req->animal_type;
            $ads->no_animals=$req->no_animals;
            $ads->age=$req->age;
            $ads->price=$req->price;
            $ads->breed=$req->breed;
            $ads->milk_capacity=$req->milk_capacity;
            $ads->pregnant=$req->pregnant;
            $ads->due_month_pregnancy=$req->month_pregnancy;
            $ads->gender=$req->gender;
            $ads->breed_type=$req->breed_type;
            $ads->vaccinated=$req->vaccinated;
            $ads->weight=$req->weight;
            $ads->certified=$req->certified;
            $ads->certified_reg_no=$req->certified_reg_no;
            $ads->status=1;
            $ads->ads_photo_id=$adsphoto->id;
            $ads->ads_address_id=$adsaddress->id;
            $ads->ads_video_id=$adsvideo->id;

            $ads->save();
            //  dd($ads,$adsaddress,$adsphoto,$adsvideo);
            DB::commit();
            return back()->with('successMsg','Ad Added Successfully');
        }catch(\Exception $e){

            DB::rollback();
            return back()->with('warningMsg','There some Problem try again');
        }
        // $adsphoto=new AdsPhoto;

    }


    public function user(){

        $data=User::join('user_address','users.address_id','=','user_address.id')
            ->join('sellers','users.id','sellers.user_id')
            ->paginate(5);
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
        $user->user_role='seller';
        $user->membership_type=$req->status;
        $user->owner_status=$req->owner_Status;
        // $user->first_name=$req->full_name;
        $user->contact_no=$req->contact_no;
        $user->email=$req->email;
        $user->address_id=$address_id;
        $user->password=Hash::make('07070707');
        $user->status=0;
        $user->login_status=0;
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
    // update user

    public function update(Request $req){
        // dd($req->user_id);
        $user=User::where('id',$req->user_id)->first();
        $user_address=Address::where('id',$user->address_id)->first();
        $seller=Sellers::where('user_id',$req->user_id)->first();
        // dd($user_address);
        // user table update
        $user->first_name=$req->full_name;
        $user->membership_type=$req->status;
        $user->owner_status=$req->owner_Status;
        $user->contact_no=$req->contact_no;
        $user->email=$req->email;
        $user->status=0;

        if($req->hasFile('profile')){
            $file=$req->profile;
            $name = time().''.rand(1000000,999999999999);
            $filepath='/uploads/'.$req->user_id.'/profile/';
            $ext= $file->getClientOriginalExtension();
            $file->move(public_path() .$filepath,$name.'.'.$ext);
            $fileName=$name.'.'.$ext;
            $imgData=  $filepath.$fileName;

            $user->image=$imgData;
        }
        $user->save();

        // address update
        $user_address->address_line1=$req->address1;
        $user_address->address_line2=$req->address2;
        $user_address->area=$req->area;
        $user_address->city=$req->city;
        $user_address->state=$req->state;
        $user_address->district=$req->district;
        $user_address->taluka=$req->taluka;
        $user_address->zipcode=$req->pin_code;
        $user_address->save();

        // seller detail update
        $seller->farm_name=$req->farm_name;
        $seller->status=1;
        $seller->save();

        return back()->with('successMsg','User Updated Successfully!');
    }



    // delete user
    public function deleteUser(Request $req){
        // dd($req->user_id);
        $user=User::where('id',$req->user_id)->delete();
        // dd($user);
        return back()->with('infoMsg','User deleted Successfully!');
    }


    public function getads($id){
        $ads=Ads::where('id',$id)->first();
        $adsadress=AdsAddress::where('id',$ads->ads_address_id)->first();
        $adsphoto=AdsPhoto::where('id',$ads->ads_photo_id)->first();
        $adsvideo=AdsVideo::where('id',$ads->ads_video_id)->first();
        return response()->json(array('ads'=> $ads,'adsaddress'=>$adsadress,'adsphoto'=>$adsphoto,'adsvideo'=>$adsvideo), 200);
    }

    public function updateprofile(Request $req){
        $user=User::where('id',$req->id)->first();
        $user_address=Address::where('id',$user->address_id)->first();

        DB::beginTransaction();
        try{

            DB::beginTransaction();
            try{

                $user_address->address_line1=$req->address_line1;
                $user_address->address_line2=$req->address_line2;
                $user_address->state=$req->state;
                $user_address->city=$req->city;
                $user_address->area=$req->area;
                $user_address->district=$req->district;
                $user_address->taluka=$req->taluka;
                $user_address->zipcode=$req->zipcode;
                $user_address->save();

                DB::commit();


            }catch(\Exception $e){

                DB::rollback();
                return back()->with('warningMsg','Something Went Wrong');
            }



            $user->first_name=$req->first_name;
            $user->middle_name=$req->middle_name;
            $user->last_name=$req->last_name;

            if($req->hasFile('profile')){
                $file=$req->profile;
                $name = time().''.rand(1000000,999999999999);
                $filepath='/uploads/'.$user->id.'/profile/';
                $ext= $file->getClientOriginalExtension();
                $file->move(public_path() .$filepath,$name.'.'.$ext);
                $fileName=$name.'.'.$ext;
                $imgData=  $filepath.$fileName;

                $user->image=$imgData;
            }
            $user->save();



            DB::commit();
            return back()->with('successMsg','Profile Updated Successfull');
        }catch(\Exception $e)
        {

            DB::rollback();
            return back()->with('warningMsg','Something Went Wrong');
        }

    }
}



