<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TransportBooked;
use App\Models\TransportFrom;
use App\Models\TransportTo;
use Auth;
use DB;
class TransportBookedController extends Controller
{
    public function add(Request $req){
        $data=$req->all();
        $req->validate([
            'area'=>'required',
            'city'=>'required',
            'faddressline1'=>'required',
            'district'=>'required',
            'taluka'=>'required',
            'zipcode'=>'required',
            'appoint_time'=>'required',
            'appoint_date'=>'required',

            'tarea'=>'required',
            'tcity'=>'required',
            'taddressline1'=>'required',
            'tdistrict'=>'required',
            'ttaluka'=>'required',
            'tzipcode'=>'required',
            'tappoint_time'=>'required',
            'tappoint_date'=>'required',

            'breed'=>'required',
            'animaltype'=>'required',
            'no_animals'=>'required|numeric',
            'contact_person'=>'required',
            'contact_no'=>'required',
            'date_transport'=>'required',
            'estatus'=>'required',
            'edriverassign'=>'required'
            
        ]);
        $transport=new TransportBooked;
        DB::beginTransaction();
        try{

            $transportfrom=new TransportFrom;
            DB::beginTransaction();
            try{

                $transportfrom->address_line1=$data['faddressline1'];
                $transportfrom->address_line2=$data['faddressline2'];
                $transportfrom->area=$data['area'];
                $transportfrom->city=$data['city'];
                $transportfrom->district=$data['district'];
                $transportfrom->state=$data['state'];
                $transportfrom->taluka=$data['taluka'];
                $transportfrom->zipcode=$data['zipcode'];
                $transportfrom->appointment_time=$data['appoint_time'];
                $transportfrom->appointment_date=$data['appoint_date'];
               // dd($transportfrom);
                $transportfrom->save();
                DB::commit();
            }catch(\Exception $e){
                //dd($e);
                DB::rollback();
                return back()->with('warningMsg','There sooooooome Problem try again');
            }



            $transportto=new TransportTo;
            DB::beginTransaction();
            try{

                $transportto->address_line1=$data['taddressline1'];
                $transportto->address_line2=$data['taddressline2'];
                $transportto->area=$data['tarea'];
                $transportto->city=$data['tcity'];
                $transportto->district=$data['tdistrict'];
                $transportto->state=$data['tstate'];
                $transportto->taluka=$data['ttaluka'];
                $transportto->zipcode=$data['tzipcode'];
                $transportto->appointment_time=$data['tappoint_time'];
                $transportto->appointment_date=$data['tappoint_date'];
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
            $transport->no_of_animal=$data['no_animals'];
            $transport->breed=$data['breed'];
            $transport->contact_name=$data['contact_person'];
            $transport->contact_no=$data['contact_no'];
            $transport->date_of_transport=$data['date_transport'];
            $transport->from_address_id=$transportfrom->id;
            $transport->to_address_id=$transportto->id;
            $transport->status=$data['estatus'];
            $transport->driver_id=$data['edriverassign'];
           // dd($transportfrom,$transportto,$transport);
            $transport->save();
            DB::commit();
            return back()->with('successMsg','Appointment Added Successfully');
        }catch(\Exception $e){
            dd($e);
                DB::rollback();
                return back()->with('warningMsg','There sooooooome Problem try again');
        }

    }

    public function delete(Request $req){
        $transport=TransportBooked::where('id',$req->id)->first();
        $transport->delete();
        return back()->with('successMsg','Transport Booking Deleted Successfully');
    }

    public function getdata($id){
        $transport=TransportBooked::where('id',$id)->first();
        $from_address=TransportFrom::where('id',$transport->from_address_id)->first();
        $to_address=TransportTo::where('id',$transport->to_address_id)->first();
        return response()->json(array('trans'=>$transport,'fromaddress'=>$from_address,'toaddress'=>$to_address),200);

    }

    public function update(Request $req){
        $req->validate([
            'area'=>'required',
            'city'=>'required',
            'faddressline1'=>'required',
            'district'=>'required',
            'taluka'=>'required',
            'zipcode'=>'required',
            'appoint_time'=>'required',
            'appoint_date'=>'required',

            'tarea'=>'required',
            'tcity'=>'required',
            'taddressline1'=>'required',
            'tdistrict'=>'required',
            'ttaluka'=>'required',
            'tzipcode'=>'required',
            'tappoint_time'=>'required',
            'tappoint_date'=>'required',

            'breed'=>'required',
            'animaltype'=>'required',
            'no_animals'=>'required|numeric',
            'contact_person'=>'required',
            'contact_no'=>'required',
            'date_transport'=>'required',
            'estatus'=>'required',
            'edriverassign'=>'required'
            
        ]);
        $data=$req->all();
        $transport=TransportBooked::where('id',$req->transportbook)->first();
       
        DB::beginTransaction();
        try{

            $transportfrom=TransportFrom::where('id',$transport->from_address_id)->first();
       
            DB::beginTransaction();
            try{

                $transportfrom->address_line1=$data['faddressline1'];
                $transportfrom->address_line2=$data['faddressline2'];
                $transportfrom->area=$data['area'];
                $transportfrom->city=$data['city'];
                $transportfrom->district=$data['district'];
                $transportfrom->state=$data['state'];
                $transportfrom->taluka=$data['taluka'];
                $transportfrom->zipcode=$data['zipcode'];
                $transportfrom->appointment_time=$data['appoint_time'];
                $transportfrom->appointment_date=$data['appoint_date'];
               // dd($transportfrom);
                $transportfrom->save();
                DB::commit();
            }catch(\Exception $e){
                //dd($e);
                DB::rollback();
                return back()->with('warningMsg','There sooooooome Problem try again');
            }



            $transportto=TransportTo::where('id',$transport->to_address_id)->first();
            DB::beginTransaction();
            try{

                $transportto->address_line1=$data['taddressline1'];
                $transportto->address_line2=$data['taddressline2'];
                $transportto->area=$data['tarea'];
                $transportto->city=$data['tcity'];
                $transportto->district=$data['tdistrict'];
                $transportto->state=$data['tstate'];
                $transportto->taluka=$data['ttaluka'];
                $transportto->zipcode=$data['tzipcode'];
                $transportto->appointment_time=$data['tappoint_time'];
                $transportto->appointment_date=$data['tappoint_date'];
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
            $transport->no_of_animal=$data['no_animals'];
            $transport->breed=$data['breed'];
            $transport->contact_name=$data['contact_person'];
            $transport->contact_no=$data['contact_no'];
            $transport->date_of_transport=$data['date_transport'];
            $transport->from_address_id=$transportfrom->id;
            $transport->to_address_id=$transportto->id;
            $transport->status=$data['estatus'];
            $transport->driver_id=$data['edriverassign'];
           // dd($transportfrom,$transportto,$transport);
            $transport->save();
            DB::commit();
            return back()->with('successMsg','Appointment Updated Successfully');
        }catch(\Exception $e){
            dd($e);
                DB::rollback();
                return back()->with('warningMsg','There sooooooome Problem try again');
        }
        dd($req->all());

    }

    public function search(Request $req){
        $animal=$req->animal;
        $city=$req->city;
        $district=$req->district;
        $state=$req->state;
        $taluka=$req->taluka;
      //  $vet=$req->vet;

        $transport=TransportBooked::join('from_address','from_address.id','=','book_transport.from_address_id')
        ->join('to_address','to_address.id','=','book_transport.to_address_id')
        ->where('animal_type',$animal)->orWhere('from_address.city',$city)->orWhere('to_address.city',$city)
        ->orWhere('from_address.state',$state)->orWhere('to_address.state',$state)
        ->orWhere('from_address.district',$district)->orWhere('to_address.district',$district)
        ->orWhere('from_address.taluka',$taluka)->orWhere('to_address.taluka',$taluka)
        ->paginate(5);
        
        return view('admin.transport_booked',compact('transport'));
      
    }
}
