<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsUpdate;
use Auth;
use DB;
class NewsUpdateController extends Controller
{
    public function add(Request $req){
       
        $req->validate([
            'topic'=>'required',
            'detail'=>'required',
            'image'=>'required'
        ]);

        $data=$req->all();
        $newsupdate=new NewsUpdate;
        DB::beginTransaction();
        try{
            $newsupdate->user_id=Auth::user()->id;
            $newsupdate->topic=$data['topic'];
            $newsupdate->detail=$data['detail'];

            if($req->hasfile('image')) {
                $file=$data['image'];
                $ran=mt_rand( 10000000, 99999999 );
                $name=time().$ran.'.'.$file->getClientOriginalExtension();
                $filepath='NewsUpdate/images/';
                $file->move(public_path().'/'.$filepath,$name);  
                $newsupdate->photo = $filepath.$name;  
                $newsupdate->save();
                DB::commit();
                return back()->with('successMsg','NewsUpdate Successfully');
            }

        }catch(\Exception $e){
            dd($e);
            DB::rollback();
            return back()->with('warningMsg','There sooooooome Problem try again');
        }
    }


    public function getdata($id){
        
        $newsupdate=NewsUpdate::where('id',$id)->first();
        return response()->json(array('newsupdate'=>$newsupdate),200);
    }
}
