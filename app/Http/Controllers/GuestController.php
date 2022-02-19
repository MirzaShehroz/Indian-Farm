<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransportBooked;
use App\Models\TransportFrom;
use App\Models\TransportTo;
use App\Models\AppointmentAddress;
use App\Models\AppointmentBook;
use App\Models\Documents;
use App\Models\certifyAnimal;
use App\Models\user;
use App\Models\Transport;
use App\Models\Vet;
use App\Models\Address;
use Auth;
use DB;
use Hash;
use Crypt;
use Mail;


class GuestController extends Controller
{

    public function search(){
        $data=User::join('user_address','users.address_id','=','user_address.id')->where('user_role','=','transport')->get();
        // dd($data);
        return view('guest.transport.search_transport',compact('data'));
    }
    public function add(Request $req){
        // dd($req);
        $data=$req->all();
        $req->validate([
            'fromarea'=>'required',
            'fromcity'=>'required',
            'faddressline1'=>'required',
            'fromdistrict'=>'required',
            'fromtaluka'=>'required',
            'fromstate'=>'required',
            'frompincode'=>'required',
            'dot'=>'required',

            'toarea'=>'required',
            'tocity'=>'required',
            'tostate'=>'required',
            'taddressline1'=>'required',
            'taddressline2'=>'required',
            'todistrict'=>'required',
            'totaluka'=>'required',
            'topincode'=>'required',
           

            'animaltype'=>'required',
            'animalsno'=>'required|numeric',
            'personname'=>'required',
            'mobileno'=>'required',
        ]);
        // dd($data);

        $transport=new TransportBooked;
        DB::beginTransaction();
        try{

            $transportfrom=new TransportFrom;
            DB::beginTransaction();
            try{

                $transportfrom->address_line1=$data['faddressline1'];
                $transportfrom->address_line2=$data['faddressline2'];
                $transportfrom->area=$data['fromarea'];
                $transportfrom->city=$data['fromcity'];
                $transportfrom->district=$data['fromdistrict'];
                $transportfrom->state=$data['fromstate'];
                $transportfrom->taluka=$data['fromtaluka'];
                $transportfrom->zipcode=$data['frompincode'];
               // dd($transportfrom);
                $transportfrom->save();
                DB::commit();
            }catch(\Exception $e){
                dd($e);
                DB::rollback();
                return back()->with('warningMsg','There sooooooome Problem try again');
            }



            $transportto=new TransportTo;
            DB::beginTransaction();
            try{

                $transportto->address_line1=$data['taddressline1'];
                $transportto->address_line2=$data['taddressline2'];
                $transportto->area=$data['toarea'];
                $transportto->city=$data['tocity'];
                $transportto->district=$data['todistrict'];
                $transportto->state=$data['tostate'];
                $transportto->taluka=$data['totaluka'];
                $transportto->zipcode=$data['topincode'];
               // dd($transportto);
                $transportto->save();
                DB::commit();

            }catch(\Exception $e){
                dd($e);
                DB::rollback();
                return back()->with('warningMsg','There sooooooome Problem try again');
            }


            $transport->user_id=Auth::user()->id;
            $transport->animal_type=$data['animaltype'];
            $transport->no_of_animal=$data['animalsno'];
            // $transport->breed=$data['breed'];
            $transport->contact_name=$data['personname'];
            $transport->contact_no=$data['mobileno'];
            $transport->date_of_transport=$data['dot'];
            $transport->from_address_id=$transportfrom->id;
            $transport->to_address_id=$transportto->id;
            $transport->status=3;
           // dd($transportfrom,$transportto,$transport);
            $transport->save();
            DB::commit();
            return back()->with('successMsg','Transport Booked Successfully! Our driver will contact you soon');
        }catch(\Exception $e){
            dd($e);
                DB::rollback();
                return back()->with('warningMsg','There sooooooome Problem try again');
        }

    }
    
    public function searchResult(Request $req){
        // dd($req);
        $data=Transport::join('users','transports.user_id','users.id')
        ->join('user_address','users.address_id','=','user_address.id')
        ->orWhere('city','=',$req->city)
        ->orWhere('district','=',$req->district)
        ->orWhere('state','=',$req->state)
        ->orWhere('taluka','=',$req->taluka)
        ->get();
        // dd($data);
        return view('guest.transport.search_transport',compact('data'));
    }

    // vet function 

    public function searchVet(){
        $data=Vet::join('users','vets.user_id','users.id')
        ->join('user_address','users.address_id','=','user_address.id')
        ->get();
        return view('guest.vet.search',compact('data'));
    }
    public function bookAppointment(){
        $data=Vet::all();
        return view('guest.vet.book_appointment',compact('data'));
    }
    public function certifyAnimal(){
        return view('guest.vet.certify_animal');
    }
    public function registerVet(){
        return view('guest.vet.vet_registration');
    }
    
    public function searchVetResult(Request $req){
        // dd($req);
        $data=Vet::join('users','vets.user_id','users.id')
        ->join('user_address','users.address_id','=','user_address.id')
        ->where('first_name',$req->first_name)
        ->orWhere('state',$req->state)
        ->orWhere('district',$req->district)
        ->orWhere('taluka',$req->taluka)
        ->get();
        // dd($data);
        return view('guest.vet.search',compact('data'));
    }

    public function appointment(Request $req){
        // dd($req);
        $req->validate([
            'area'=>'required',
            'state'=>'required',
            'city'=>'required',
            'district'=>'required',
            'address1'=>'required',
            'taluka'=>'required',
            'pincode'=>'required',
            'animaltype'=>'required',
            'animalsno'=>'required|numeric',
            'breed'=>'required',
            'personname'=>'required',
            'mobileno'=>'required',                                                                                                                                                                                                                                                                                                                        
            'vet_assign'=>'required',
        ]);
        if (Auth::check()) {
        $appointement=new AppointmentBook;
        DB::beginTransaction();
        try{
            $address=new AppointmentAddress;
            DB::beginTransaction();
            try{
                $address->area=$req->area;
                $address->state=$req->state;
                $address->city=$req->city;
                $address->district=$req->district;
                $address->taluka=$req->taluka;
                $address->address_line1=$req->address1;
                $address->address_line2=$req->address2;
                $address->taluka=$req->taluka;
                $address->zipcode=$req->pincode;
                $address->save();
                 DB::commit();
            }catch(\Exception $e){
                dd($e);
                    DB::rollback();
                    return back()->with('warningMsg','There sooooooome Problem try again');;
            }
               $appointement->user_id=Auth::user()->id;    
               $appointement->appointment_address_id=$address->id;
               $appointement->animal_type=$req->animaltype;
               $appointement->no_of_animal=$req->animalsno;
               $appointement->breed=$req->breed;
               $appointement->contact_name=$req->personname;
               $appointement->contact_no=$req->mobileno;
               $appointement->comment=$req->comment;
               $appointement->vet_id=$req->vet_assign;
               $appointement->vet_commnet=$req->vet_comment;
               $appointement->status=1;
                $appointement->save();
         DB::commit();
         return back()->with('successMsg','Your Request has been recieved Thanks for choosing us ');
        }catch(\Exception $e){
           dd($e);
                    DB::rollback();
        return back()->with('warningMsg','There some Problem try again');
        }
        } else {
            return redirect('login');
        }
    }
    public function certifyRegister(Request $req){
        // dd($req);
        $req->validate([
            'area'=>'required',
            'state'=>'required',
            'city'=>'required',
            'district'=>'required',
            'address1'=>'required',
            'taluka'=>'required',
            'pincode'=>'required',
            'animaltype'=>'required',
            'animalsno'=>'required',
            'breed'=>'required',
            'personname'=>'required',
            'mobileno'=>'required',
            'appoint_date'=>'required',
            'appoint_time'=>'required',
        ]);


        $certify=new certifyAnimal();
        DB::beginTransaction();
        try{

            $address=new AppointmentAddress;
           
            DB::beginTransaction();
            try{

                $address->area=$req->area;
                $address->state=$req->state;
                $address->city=$req->city;
                $address->district=$req->district;
                $address->taluka=$req->taluka;
                $address->address_line1=$req->address1;
                $address->address_line2=$req->address2;
                $address->taluka=$req->taluka;
                $address->zipcode=$req->pincode;
                
                $address->save();
                 DB::commit();
            }catch(\Exception $e){
                dd($e);
                    DB::rollback();
                    return back()->with('warningMsg','There sooooooome Problem try again');;
            }

               
               $certify->user_id=Auth::user()->id;     
               $certify->appointment_address_id=$address->id; 
               $certify->animal_type=$req->animaltype; 
               $certify->no_of_animal=$req->animalsno; 
               $certify->breed=$req->breed; 
               $certify->contact_name=$req->personname; 
               $certify->contact_no=$req->mobileno;
               $certify->appointment_time=$req->appoint_time; 
               $certify->appointment_date=$req->appoint_date; 
               $certify->comment=$req->comments; 
            //    $certify->vet_id=$req->vet_assign; 
            //    $certify->vet_commnet=$req->vet_comment; 
               $certify->status=1;
               $certify->certified_status=0;
                $certify->save();
         DB::commit();
         return back()->with('successMsg','Appointment Added Successfully');
        }catch(\Exception $e){
           dd($e);
                    DB::rollback();
        return back()->with('warningMsg','There some Problem try again');
        }
    }
    public function registerRequest(Request $req){
        // dd($req);
        $validates=$req->validate([
            'first_name'=>'required',
            'license_no'=>'required|unique:vets',
            'vetinary_council'=>'required',
            'registration'=>'required',
            'contact_no'=>'required | unique:users',
            'email'=>'required | unique:users',
            'password'=>'required',
            'address1'=>'required',
            'area'=>'required',
            'city'=>'required',
            'state'=>'required',
            'district'=>'required',
            'taluka'=>'required',
            'pincode'=>'required',
            'doc1'=>'required',
            'profile'=>'required',
        ]);
        $address=new Address;
        $address->address_line1=$req->address1;
        $address->address_line2=$req->address2;
        $address->area=$req->area;
        $address->city=$req->city;
        $address->state=$req->state;
        $address->district=$req->district;
        $address->taluka=$req->taluka;
        $address->zipcode=$req->pincode;
        $address->save();
        $address_id=$address->id;
     
        $document=new Documents;
 
        if($req->hasFile('doc1')){
         $doc1=$req->doc1;
         $name1 = time().''.rand(1000000,999999999999);
         $filepath1='/vets/'.$req->user_id.'/documents/';
         $ext1= $doc1->getClientOriginalExtension();
         $doc1->move(public_path() .$filepath1,$name1.'.'.$ext1);
         $fileName1=$name1.'.'.$ext1;
         $DocData1=  $filepath1.$fileName1;
         // dd($DocData);
         $document->document1=$DocData1;
         }
 
         if($req->hasFile('doc2')){
             $doc2=$req->doc2;
             $name2 = time().''.rand(1000000,999999999999);
             $filepath2='/vets/'.$req->user_id.'/documents/';
             $ext2= $doc2->getClientOriginalExtension();
             $doc2->move(public_path() .$filepath2,$name2.'.'.$ext2);
             $fileName2=$name2.'.'.$ext2;
             $DocData2=  $filepath2.$fileName2;
     
             $document->document2=$DocData2;
         }
         if($req->hasFile('doc3')){
                 $doc3=$req->doc3;
                 $name3 = time().''.rand(1000000,999999999999);
                 $filepath3='/vets/'.$req->user_id.'/documents/';
                 $ext3= $doc3->getClientOriginalExtension();
                 $doc3->move(public_path() .$filepath3,$name3.'.'.$ext3);
                 $fileName3=$name3.'.'.$ext3;
                 $DocData3=  $filepath3.$fileName3;
         
                 $document->document3=$DocData3;
             }
             if($req->hasFile('doc4')){
                 $doc4=$req->doc4;
                 $name4 = time().''.rand(1000000,999999999999);
                 $filepath4='/vets/'.$req->user_id.'/documents/';
                 $ext4= $doc4->getClientOriginalExtension();
                 $doc4->move(public_path() .$filepath4,$name4.'.'.$ext4);
                 $fileName4=$name4.'.'.$ext4;
                 $DocData4=  $filepath4.$fileName4;
         
                 $document->document4=$DocData4;
             }
 
             $document->save();
             $document_id=$document->id;
 
             $user= new User;
             $user->first_name=$req->first_name;
             $user->last_name=$req->last_name;
             $user->middle_name=$req->middle_name;
             $user->contact_no=$req->contact_no;
             $user->email=$req->email;
             $user->password=Hash::make($req->password);
             if($req->hasFile('profile')){
                 $file=$req->profile; 
                 $name = time().''.rand(1000000,999999999999);
                 $filepath='/vets/'.$req->user_id.'/profile/';
                 $ext= $file->getClientOriginalExtension();
                 $file->move(public_path() .$filepath,$name.'.'.$ext);
                 $fileName=$name.'.'.$ext;
                 $imgData=  $filepath.$fileName;
                 $user->image=$imgData;
             }
             $user->user_role='vet';
             $user->status=1;
             $user->address_id=$address_id;
             $user->document_id=$document_id;
             $user->save();
             $user_id=$user->id;
             
             $vet=new Vet;
             $vet->user_id=$user_id;
             $vet->license_no=$req->license_no;
             $vet->reg_vet_council=$req->vetinary_council;
             $vet->vc_reg_no=$req->registration;
             $vet->save();

             $otp=mt_rand( 100000, 999999 );
            $user->email_otp=$otp;

            User::where('email',$req->email)->update([
                'email_otp'=>$otp,
                'mob_otp'=>4422
            ]);
            $email=$req->email;
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
           return redirect('transport-verify/'.$id)->with(['email'=>$req->email]);
 
             return back()->with('successMsg','Vet Added Successfully!');
    }
}

