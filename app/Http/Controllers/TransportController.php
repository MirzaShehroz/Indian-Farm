<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\Transport;
use App\Models\User;
use App\Models\Documents;
use Illuminate\Support\Facades\Hash;
use PDO;

class TransportController extends Controller
{
    // search
    public function search(Request $req){
        $data=Transport::join('users','users.id','=','transports.user_id')
        ->join('user_address','user_address.id','=','users.address_id')
        ->join('user_documents','users.document_id','=','user_documents.id')
        ->where('first_name',$req->first_name)
        ->orWhere('city',$req->city)
        ->orWhere('state',$req->state)
        ->orWhere('district',$req->district)
        ->orWhere('taluka',$req->taluka)
        ->get();
        // dd($data);

        return view('admin.transport_driver',compact('data'))->with('infoMsg','Driver founded');
    }

    public function index(){
        $data=User::join('user_address','users.address_id','=','user_address.id')
        ->join('user_documents','users.document_id','=','user_documents.id')
        ->join('transports','users.id','transports.user_id')
        ->paginate(5);

        return view('admin.transport_driver',compact('data'));
    }

    public function register(Request $req){
        // dd($req);

        $address=new Address;
       $address->address_line1=$req->address_line1;
       $address->address_line2=$req->address_line2;
       $address->area=$req->area;
       $address->city=$req->city;
       $address->state=$req->state;
       $address->district=$req->district;
       $address->taluka=$req->taluka;
       $address->zipcode=$req->zipcode;
       $address->save();
       $address_id=$address->id;
    
       $document=new Documents;

       if($req->hasFile('doc1')){
        $doc1=$req->doc1;
        $name1 = time().''.rand(1000000,999999999999);
        $filepath1='/transport/'.$req->user_id.'/documents/';
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
            $filepath2='/transport/'.$req->user_id.'/documents/';
            $ext2= $doc2->getClientOriginalExtension();
            $doc2->move(public_path() .$filepath2,$name2.'.'.$ext2);
            $fileName2=$name2.'.'.$ext2;
            $DocData2=  $filepath2.$fileName2;
    
            $document->document2=$DocData2;
        }
        if($req->hasFile('doc3')){
                $doc3=$req->doc3;
                $name3 = time().''.rand(1000000,999999999999);
                $filepath3='/transport/'.$req->user_id.'/documents/';
                $ext3= $doc3->getClientOriginalExtension();
                $doc3->move(public_path() .$filepath3,$name3.'.'.$ext3);
                $fileName3=$name3.'.'.$ext3;
                $DocData3=  $filepath3.$fileName3;
        
                $document->document3=$DocData3;
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
                $filepath='/transport/'.$req->user_id.'/profile/';
                $ext= $file->getClientOriginalExtension();
                $file->move(public_path() .$filepath,$name.'.'.$ext);
                $fileName=$name.'.'.$ext;
                $imgData=  $filepath.$fileName;
                $user->image=$imgData;
            }
            $user->user_role='transport';
            $user->status=1;
            $user->address_id=$address_id;
            $user->document_id=$document_id;
            $user->save();
            $user_id=$user->id;

            $transport=new Transport();
            $transport->user_id=$user_id;
            $transport->vehicle_type=$req->type;
            $transport->vehicle_make_model=$req->make;
            $transport->license_no=$req->license_no;
            $transport->save();
            
            return back()->with('successMsg','Transport Driver Added Succecssfully!');
    }
    // update
    public function update(Request $req){
        // dd($req->user_id);
        $user=User::where('id',$req->user_id)->first();
        $document=Documents::where('id',$user->document_id)->first();
        $address=Address::where('id',$user->address_id)->first();
        $transport=Transport::where('user_id',$user->id)->first();

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
            $address->taluka=$req->taluka;
            $address->zipcode=$req->zipcode;
            $address->save();

            $transport->license_no=$req->license_no;
            $transport->vehicle_type=$req->type;
            $transport->vehicle_make_model=$req->make;
            $transport->save();

        return back()->with('successMsg','Transport details updated successfully');
    }

    public function delete(Request $req){
        $transport=Transport::where('user_id',$req->user_id)->delete();
        return back()->with('infoMsg','Transport driver deleted Successfully!');

    }
}
