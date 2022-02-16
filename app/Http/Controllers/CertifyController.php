<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\certifyAnimal;
use App\Models\Vet;
use App\Models\AppointmentAddress;
use Illuminate\Http\Request;
use DB;
use Auth;

class CertifyController extends Controller
{
    public function index(){
        $certify=certifyAnimal::join('appointment_address','certify_animals.appointment_address_id','appointment_address.id')->paginate(5);
        $vets=Vet::paginate(5);
        return view('admin.certify_animal',compact('vets','certify'));
    }
    public function registerAppoint(Request $req){
        // dd($req);
        // $req->validate([
        //     'area'=>'required',
        //     'state'=>'required',
        //     'city'=>'required',
        //     'district'=>'required',
        //     'addressline1'=>'required',
        //     'taluka'=>'required',
        //     'zipcode'=>'required',
        //     'animaltype'=>'required',
        //     'no_animal'=>'required',
        //     'breed'=>'required',
        //     'personname'=>'required',
        //     'mobileno'=>'required',
        //     'appoint_date'=>'required',
        //     'appoint_time'=>'required',
        //     'vet_assign'=>'required',
        // ]);


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
               $certify->comment=$req->comment; 
               $certify->vet_id=$req->vet_assign; 
            //    $certify->vet_commnet=$req->vet_comment; 
               $certify->status=1;
               $certify->certified_status=$req->certify_status;
                $certify->save();
         DB::commit();
         return back()->with('successMsg','Appointment Added Successfully');
        }catch(\Exception $e){
           dd($e);
                    DB::rollback();
        return back()->with('warningMsg','There some Problem try again');
        }
    }
    public function deleteCertify(Request $req){
        // dd($req);
        $appointment=certifyAnimal::where('appointment_address_id',$req->id)->delete();

        return back()->with('errorMsg','Certify appointment Deleted Successfully!');
    }

    // update
    public function update(Request $req){
        // dd($req);
        // appointment_address_id
        $certify=certifyAnimal::where('appointment_address_id',$req->id)->first();
        
        DB::beginTransaction();
        try{
            $address=AppointmentAddress::where('id',$req->id)->first();            
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
               $certify->comment=$req->comment; 
               $certify->vet_id=$req->vet_assign; 
            //    $certify->vet_commnet=$req->vet_comment; 
               $certify->status=1;
               $certify->certified_status=$req->certify_status;
                $certify->save();
         DB::commit();
         return back()->with('successMsg','Appointment updated Successfully');
        }catch(\Exception $e){
           dd($e);
                    DB::rollback();
        return back()->with('warningMsg','There some Problem try again');
        }
    }

    public function search(Request $req){
        // dd($req);
        $vets=Vet::all();

        $certify=certifyAnimal::join('appointment_address','certify_animals.appointment_address_id','appointment_address.id')
        ->join('vets','certify_animals.vet_id','vets.id')
        ->where('animal_type',$req->animal)
        ->orWhere('city',$req->city)
        ->orWhere('state',$req->state)
        ->orWhere('district',$req->district)
        ->orWhere('taluka',$req->taluka)
        ->get();
        // dd($data);

        return view('admin.certify_animal',compact('certify','vets'))->with('infoMsg','Vet founded');
    }
}
