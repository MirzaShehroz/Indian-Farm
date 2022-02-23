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
                
            }
                $newsupdate->save();
                DB::commit();
                return back()->with('successMsg','NewsUpdate Added Successfully');

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

    public function deletenew(Request $req){
        $newsupdate=NewsUpdate::where('id',$req->newsupdate_id)->first();
        $newsupdate->delete();
        return back()->with('successMsg','NewsUpdate Deleted');
    }

    public function editnews(Request $req){
        $req->validate([
            'topic'=>'required',
            'detail'=>'required',
        ]);
        $newsupdate=NewsUpdate::where('id',$req->editid)->first();
        DB::beginTransaction();
        try{

            $newsupdate->topic=$req->topic;
            $newsupdate->detail=$req->detail;
            
            if($req->hasfile('image')) {
                $file=$req->image;
                $ran=mt_rand( 10000000, 99999999 );
                $name=time().$ran.'.'.$file->getClientOriginalExtension();
                $filepath='NewsUpdate/images/';
                $file->move(public_path().'/'.$filepath,$name);  
                $newsupdate->photo = $filepath.$name;  
                
            }

            $newsupdate->save();
            DB::commit();
            return back()->with('successMsg','NewsUpdate Updated Successfully');
        }catch(\Exception $e){
            dd($e);
            DB::rollback();
            return back()->with('warningMsg','There sooooooome Problem try again');
        }
    }


    public function showFrontend(){
        $news=NewsUpdate::orderBy('id', 'desc')->limit(2)->get();
        $latestnews=NewsUpdate::orderBy('id', 'desc')->paginate(5);
        return view('seller_and_buyer_wireframe.news_updates',compact('news','latestnews'));
    }

    public function get_news_updates($id){
        $news=NewsUpdate::where('id',$id)->first();
        $latestnews=NewsUpdate::orderBy('id', 'desc')->paginate(5);
        return view('seller_and_buyer_wireframe.news_updates_details',compact('news','latestnews'));
    }
}
