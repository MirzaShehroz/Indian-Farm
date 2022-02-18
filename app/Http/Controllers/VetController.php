<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documents;
use App\Models\User;
use App\Models\Vet;
use App\Models\Address;
use Illuminate\Support\Facades\Hash;

class VetController extends Controller
{
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
