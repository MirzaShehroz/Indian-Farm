<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documents;
use App\Models\User;
use App\Models\Vet;
use App\Models\AppointmentBook;
use App\Models\AppointmentAddress;
use App\Models\Address;
use App\Models\certifyAnimal;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;
class VetController extends Controller
{

    public function vetChangePassword(Request $req){
        $req->validate([
            'password'=>'required',
            'repassword'=>'required'
        ]);
        if($req->password==$req->repassword){
            $user=User::where('id',$req->user_id)->first();
           
            DB::beginTransaction();
            try{
    
                $password=$req->password;
                $user->password=Hash::make($password);
                $user->save();
                DB::commit();
                return back()->with('successMsg','Password Changed Successfully');

               
            }catch(\Exception $e){
                DB::rollback();
                return back()->with('warningMsg','Something Went Wrong');

           }
        }else{
            return back()->with('warningMsg','Password & Repassword Not Match');
        }
       
    }

    public function updateprofile(Request $req){

        $req->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'contact_no'=>'required',
            'license_no'=>'required',
            'register_vetninary'=>'required',
            'vc_register_no'=>'required',
            'address_line1'=>'required',
            'address_line2'=>'required',
            'district'=>'required',
            'taluka'=>'required',
            'state'=>'required',
            'city'=>'required',
            'zipcode'=>'required',
        ]);

        $user=User::where('id',$req->user_id)->first();
        
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
           dd($e);
            DB::rollback();
            return back()->with('warningMsg','Something Went Wrong');
            }

            $user_vet=Vet::where('user_id',$req->user_id)->first();
           
            DB::beginTransaction();
            try{

                $user_vet->reg_vet_council=$req->register_vetninary;
                $user_vet->vc_reg_no=$req->vc_register_no;
                $user_vet->license_no=$req->license_no;
                $user_vet->save();
                DB::commit();

            }catch(\Exception $e){
                dd($e);
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
             return back()->with('successMsg','Profile Update Successfully');
        }catch(\Exception $e){
                   
            DB::rollback();
            return back()->with('warningMsg','Something Went Wrong');
        }
    }

    //vet edit appointment
    public function editappointment(Request $req){


        $req->validate([
            'area'=>'required',
            'state'=>'required',
            'city'=>'required',
            'district'=>'required',
            'address_line1'=>'required',
            'taluka'=>'required',
            'zipcode'=>'required',
            'animaltype'=>'required',
            'no_animals'=>'required',
            'breed'=>'required',
            'personname'=>'required',
            'mobileno'=>'required',
            
        ]);

        $appointement=AppointmentBook::where('id',$req->appointid)->first();
        $address=AppointmentAddress::where('id',$appointement->appointment_address_id)->first();
       // dd($appointement,$address);
        DB::beginTransaction();
        try{

            DB::beginTransaction();
            try{
    
                $address->area=$req->area;
                $address->state=$req->state;
                $address->city=$req->city;
                $address->district=$req->district;
                $address->taluka=$req->taluka;
                $address->address_line1=$req->address_line1;
                $address->address_line2=$req->address_line2;
                $address->taluka=$req->taluka;
                $address->zipcode=$req->zipcode;
                
                $address->save();
                 DB::commit();
    
            }catch(\Exception $e){
                dd($e);
                    DB::rollback();
                    return back()->with('warningMsg','There sooooooome Problem try again');
            }

              
            $appointement->appointment_address_id=$address->id; 
            $appointement->animal_type=$req->animaltype; 
            $appointement->no_of_animal=$req->no_animals; 
            $appointement->breed=$req->breed; 
            $appointement->contact_name=$req->personname; 
            $appointement->contact_no=$req->mobileno;
            // $appointement->appointment_time=$req->appoint_time; 
            // $appointement->appointment_date=$req->appoint_date; 
            $appointement->comment=$req->comment; 
            $appointement->vet_id=Auth::user()->id; 
            $appointement->status=$req->status; 
            $appointement->description=$req->description; 
            $appointement->vet_commnet=$req->vet_comment; 
             $appointement->save();
                DB::commit();
                return back()->with('successMsg','Updated Successfully');;

        }catch(\Exception $e){
               dd($e);
                    DB::rollback();
                    return back()->with('warningMsg','There sooooooome Problem try again');;
            }

        
       

    }
    //get vet data
    public function getcertify($id){
        $certify=certifyAnimal::where('id',$id)->where('vet_id',Auth::user()->id)->first();
        $address=AppointmentAddress::where('id',$certify->appointment_address_id)->first();

        return response()->json(array('certify'=>$certify,'address'=>$address),200);
    }

    // update vet data
    public function updateappointment(Request $req){

        $req->validate([

            'area'=>'required',
            'zipcode'=>'required',
            'state'=>'required',
            'taluka'=>'required',
            'district'=>'required',
            'address_line1'=>'required',
            'address_line2'=>'required',
            'animaltype'=>'required',
            'no_animal'=>'required|numeric',
            'breed'=>'required',
            'contact_person'=>'required',
            'contact_no'=>'required'
            


        ]);

        $certify=certifyAnimal::where('id',$req->certify_id)->where('vet_id',Auth::user()->id)->first();
        $address=AppointmentAddress::where('id',$certify->appointment_address_id)->first();
       // dd($certify,$address);

        DB::beginTransaction();
        try{

            DB::beginTransaction();
            try{

                $address->area=$req->area;
                $address->city=$req->city;
                $address->state=$req->state;
                $address->district=$req->district;
                $address->zipcode=$req->zipcode;
                $address->taluka=$req->taluka;
                $address->address_line1=$req->address_line1;
                $address->address_line2=$req->address_line2;
                $address->save();
                DB::commit();

            }catch(\Exception $e){
                
                DB::rollback();
                return back()->with('warninnMsg','Something Went Wrong');
            }

                $certify->animal_type=$req->animaltype;
                $certify->no_of_animal=$req->no_animal;
                $certify->breed=$req->breed;
                $certify->contact_name=$req->contact_person;
                $certify->contact_no=$req->contact_no;
                $certify->comment=$req->comment;
                $certify->certified_status=$req->certify;
                $certify->description=$req->description;
                $certify->save();
                DB::commit();

            
            return back()->with('successMsg','Updated Successfully');
        }catch(\Exception $e){
            dd($e);
            DB::rollback();
            return back()->with('warninnMsg','Something Went Wrong');
        }

    }
    // view vet
    public function index(){
        $data=User::join('user_address','users.address_id','=','user_address.id')
        ->join('user_documents','users.document_id','=','user_documents.id')
        ->join('vets','users.id','vets.user_id')
        ->paginate(5);
        // dd($data);
        return view('admin.vet',compact('data'));
    }

    // add vet
    public function addVet(Request $req){
        // dd($req->doc1);
       $address=new Address;
       $address->address_line1=$req->address_line1;
       $address->address_line2=$req->address_line2;
       $address->area=$req->area;
       $address->city=$req->city;
       $address->state=$req->state;
       $address->district=$req->district;
       $address->taluka=$req->taluke;
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
            $vet->reg_vet_council=$req->reg_vet_council;
            $vet->vc_reg_no=$req->vc_reg_no;
            $vet->save();

            return back()->with('successMsg','Vet Added Successfully!');
    }

    // delete user
    public function delete(Request $req){
        // dd($req->user_id);
        $vet=Vet::where('user_id',$req->user_id)->delete();
        $user=User::where('id',$req->user_id)->delete();

        return back()->with('errorMsg','Vet Deleted Successfully!');

    }
    // search vet
    public function search(Request $req){
        $data=Vet::join('users','users.id','=','vets.user_id')
        ->join('user_address','user_address.id','=','users.address_id')
        ->where('first_name',$req->full_name)
        ->orWhere('city',$req->city)
        ->orWhere('state',$req->state)
        ->orWhere('district',$req->district)
        ->orWhere('taluka',$req->taluka)
        ->paginate(5);
        // dd($data);

        return view('admin.vet',compact('data'))->with('infoMsg','Vet founded');
    }

    // update vet
    public function update(Request $req){
        // dd($req);

        $user=User::where('id',$req->user_id)->first();
        $document=Documents::where('id',$user->document_id)->first();
        $address=Address::where('id',$user->address_id)->first();
        $vet=Vet::where('user_id',$user->id)->first();

        // user table
        $user->first_name=$req->first_name;
        $user->last_name=$req->last_name;
        $user->middle_name=$req->middle_name;
        $user->contact_no=$req->contact_no;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
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

        // user document update
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
            $document->save();

            // address update
            $address->address_line1=$req->address_line1;
            $address->address_line2=$req->address_line2;
            $address->area=$req->area;
            $address->city=$req->city;
            $address->state=$req->state;
            $address->district=$req->district;
            $address->taluka=$req->taluke;
            $address->zipcode=$req->pincode;
            $address->save();

            $vet->license_no=$req->license_no;
            $vet->reg_vet_council=$req->reg_vet_council;
            $vet->vc_reg_no=$req->vc_reg_no;
            $vet->save();

        return back()->with('successMsg','Vet details updated successfully');
    }
    public function chnagePassword(Request $req){
        dd($req->all);
    }


}
