<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransportBooked;
use App\Models\TransportFrom;
use App\Models\TransportTo;
use App\Models\user;
use App\Models\Transport;
use App\Models\Address;
use Auth;
use DB;


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
        // dd($data);
        // $req->validate([
        //     'fromarea'=>'required',
        //     'fromcity'=>'required',
        //     'faddressline1'=>'required',
        //     'fromdistrict'=>'required',
        //     'fromtaluka'=>'required',
        //     'frompincode'=>'required',
        //     'dot'=>'required',

        //     'toarea'=>'required',
        //     'tocity'=>'required',
        //     'toaddressline1'=>'required',
        //     'todistrict'=>'required',
        //     'totaluka'=>'required',
        //     'topincode'=>'required',
           

        //     'breed'=>'required',
        //     'animaltype'=>'required',
        //     'animalsno'=>'required|numeric',
        //     'personname'=>'required',
        //     'mobileno'=>'required',
        // ]);
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
            return back()->with('successMsg','Appointment Added Successfully');
        }catch(\Exception $e){
            dd($e);
                DB::rollback();
                return back()->with('warningMsg','There sooooooome Problem try again');
        }

    }

}
