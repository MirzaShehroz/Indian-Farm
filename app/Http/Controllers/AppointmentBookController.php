<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AppointmentAddress;
use App\Models\AppointmentBook;
use App\Models\Ads;
use App\Models\Vet;
use DB;
use Auth;
class AppointmentBookController extends Controller
{
    public function add(Request $req){

        $req->validate([
            'area'=>'required',
            'state'=>'required',
            'city'=>'required',
            'district'=>'required',
            'addressline1'=>'required',
            'taluka'=>'required',
            'zipcode'=>'required',
            'animaltype'=>'required',
            'no_animal'=>'required|numeric',
            'breed'=>'required',
            'personname'=>'required',
            'mobileno'=>'required',
            'appoint_date'=>'required',
            'appoint_time'=>'required',
            'vet_assign'=>'required',
        ]);


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
                $address->address_line1=$req->addressline1;
                $address->address_line2=$req->addressline2;
                $address->taluka=$req->taluka;
                $address->zipcode=$req->zipcode;
                
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
               $appointement->no_of_animal=$req->no_animal; 
               $appointement->breed=$req->breed; 
               $appointement->contact_name=$req->personname; 
               $appointement->contact_no=$req->mobileno;
               $appointement->appointment_time=$req->appoint_time; 
               $appointement->appointment_date=$req->appoint_date; 
               $appointement->comment=$req->comment; 
               $appointement->vet_id=$req->vet_assign; 
               $appointement->vet_commnet=$req->vet_comment; 
               $appointement->status=1; 
                $appointement->save();
         DB::commit();
         return back()->with('successMsg','Appointment Added Successfully');
        }catch(\Exception $e){
           dd($e);
                    DB::rollback();
        return back()->with('warningMsg','There some Problem try again');
        }
    }

    public function getappointment($id){
        $appoint=AppointmentBook::where('id',$id)->first();
        $address=AppointmentAddress::where('id',$appoint->appointment_address_id)->first();
        return response()->json(array('appoint'=> $appoint,'address'=>$address), 200);
        
    }

    public function updateappointment(Request $req){
        $appointement=AppointmentBook::where('id',$req->appoint_id)->first();
        $address=AppointmentAddress::where('id',$req->address_id)->first();
        //dd($appointement,$address);
        DB::beginTransaction();
        try{

            DB::beginTransaction();
            try{
    
                $address->area=$req->area;
                $address->state=$req->state;
                $address->city=$req->city;
                $address->district=$req->district;
                $address->taluka=$req->taluka;
                $address->address_line1=$req->addressline1;
                $address->address_line2=$req->addressline2;
                $address->taluka=$req->taluka;
                $address->zipcode=$req->zipcode;
                
                $address->save();
                 DB::commit();
    
            }catch(\Exception $e){
                //dd($e);
                    DB::rollback();
                    return back()->with('warningMsg','There sooooooome Problem try again');
            }

            $appointement->user_id=Auth::user()->id;     
            $appointement->appointment_address_id=$address->id; 
            $appointement->animal_type=$req->animaltype; 
            $appointement->no_of_animal=$req->no_animal; 
            $appointement->breed=$req->breed; 
            $appointement->contact_name=$req->personname; 
            $appointement->contact_no=$req->mobileno;
            $appointement->appointment_time=$req->appoint_time; 
            $appointement->appointment_date=$req->appoint_date; 
            $appointement->comment=$req->comment; 
            $appointement->vet_id=$req->assignvet; 
            $appointement->status=$req->appoint_status; 
            $appointement->vet_commnet=$req->vet_comment; 
             $appointement->save();
                DB::commit();
                return back()->with('successMsg','Updated Successfully');;

        }catch(\Exception $e){
              //  dd($e);
                    DB::rollback();
                    return back()->with('warningMsg','There sooooooome Problem try again');;
            }

        
       

    }

    public function delete(Request $req){
       $appointment=AppointmentBook::find($req->id);
       $appointment->delete();
       return back()->with('successMsg','Deleted Succesffully');
    }

    public function search(Request $req){
        $animal=$req->animal;
        $city=$req->city;
        $district=$req->district;
        $state=$req->state;
        $taluka=$req->taluka;
        $name=$req->vet;
        $vetid=User::where('first_name',$name)->where('user_role','vet')->pluck('id')->first();
        $id=Vet::where('user_id',$vetid)->pluck('id')->first();
     
        $appointment=AppointmentBook::join('appointment_address','appointment_address.id','=','appointments.appointment_address_id')
        ->where('appointments.animal_type',$animal)->orWhere('appointment_address.city',$city)->orWhere('appointment_address.district',$district)
        ->orWhere('appointment_address.taluka',$taluka)
        ->orWhere('appointment_address.state',$state)
        ->orWhere('appointments.vet_id',$id)->paginate(5);
        $vets=Vet::all();
        
        return view('admin.appointment_booked',compact('appointment','vets'));
    }
}
