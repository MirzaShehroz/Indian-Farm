<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use DB;
use Auth;
class CommunityForumController extends Controller
{
    public function getall(){
        $question=Question::all();
        return view('seller_and_buyer_wireframe.community_forum',compact('question'));
    }

    public function userquestion(){
        return view('seller_and_buyer_wireframe.forum_question');
    }

    public function postquestion(Request $req){
        $question = new Question;
        DB::beginTransaction();
        try{
            $question->user_id=Auth::user()->id;
            $question->question=$req->question;
            $question->save();
            DB::commit();
            return back()->with('successMsg','Your Query Posted Successfully');
        }catch(\Exception $e){
            DB::rollback();
            return back()->with('errorMsg','Something Went Wrong');
        }
    }

    public function admin_edit($id){
        $question=Question::where('id',$id)->first();
        return response()->json(array('quest'=>$question),200);
    }

    public function admin_delete(Request $req){
        $question=Question::where('id',$req->id)->first();
        $question->delete();
        return back()->with('successMsg','Successfully Deleted');
    }
}
