<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EducationVideo;
use DB;
use Auth;
class EducationVideoController extends Controller
{
    public function add(Request $req){
        $data=$req->all();
        $url=trim($data['url'],"https://youtu.be");
        
        $education=new EducationVideo;
        DB::beginTransaction();
        try{
            $education->user_id=Auth::user()->id;
            $education->title=$data['title'];
            $education->url=$url;
            $education->save();
            DB::commit();
            return back()->with('successMsg','Video Upload Successfully');
        }catch(\Exception $e){
            dd($e);
                DB::rollback();
                return back()->with('warningMsg','There sooooooome Problem try again');
        }
       

    }
    public function delete(Request $req){
        $id=$req->videoid;
        $video=EducationVideo::where('id',$id)->first();
        $video->delete();
        return back()->with('successMsg','Delete Successfully');
    }
}
