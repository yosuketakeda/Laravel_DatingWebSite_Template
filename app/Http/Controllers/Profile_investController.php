<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// lili
use DB;
use App\Usermeta;
use Auth;

class Profile_investController extends Controller
{
    public function index(Request $request)
    {
        $id = Auth::user()->id;
        // get usermeta
        $usermetas = Usermeta::all();
        $usermeta = [];
        foreach($usermetas as $meta){
            if($meta->id == $id){
                $usermeta = $meta;
                break;
            }
        }
        // check image
        $directory_path = public_path('upload/offer/'.$id.'/');
        $mode = 0777;
        @mkdir( $directory_path, $mode, false);
        $imgs = scandir($directory_path);

        ////////////////  go from step-1 to step-2 with offer type
        $type = $request->type;

        // step-5 -- answers for queries of upper part
        $offer_meta = DB::select('select * from offers where userID= ?',[$id]);

        return view('profile_invest')->with("usermeta", $usermeta)->with("imgs", $imgs)->with("type", $type)->with("offer_meta", $offer_meta);
    }

    public function step_1(Request $request)
    {
        $id = Auth::user()->id;
        $type = $request->type;
        $comment = $request->offer_comment;
        //var_dump($type);

        $offers = DB::select('select * from offers where userID = ?',[$id]);  /// origin method
        if(empty($offers)){
            DB::table('offers')
            ->insert([
                'userID' => $id,
                'type' => $type,
                'comment' => $comment,
                'category' => '',
                'price' => null,
                'education' => '',
                'job' => '',
                'religion'=> '',
                'smoking' => null,
                'skill_comment' => '',
                'strength' => '',
                'weakness' => '',
                'friends_describe' => '',
                'perfect_day' => '',
                'choose' => '',
                'news_daily' => null,
                'science' => null,
                'reflect_behavior' => null,
                'watch_docus' => null,
                'reading_nonfiction' => null,
                'week_sports' => null,
                'competition' => null,
                'stairs' => null,
                'weight_training' => null,
                'activity_priority' => null,
                'convince' => null,
                'explaining' => null,
                'conversation' => null,
                'others_talking' => null,
                'debate' => null,
                'joke' => null,
                'entertaining' => null,
                'oneself_laugh' => null,
                'humor' => null,
                'friends_call' => null,
                'status' => 0,
            ]);
        }else{
            DB::table('offers')
                ->where('userID',$id)
                ->update([
                    'type' => $type,
                    'comment' => $comment,
            ]);
            /*
            $status = $offers[0]->status;
            if($status == 0){

            }else{
                $db_type = (DB::select('select type from offers where userID = ?',[$id]))[0]->type;  /// origin method
                $db_types = explode(',',$db_type);
                $type_flag = 0;
                foreach($db_types as $key_type){
                    if($type == $key_type){
                        $type_flag = 1;
                        break;
                    }
                }
                if($type_flag == 0){
                    $type = $db_type.','.$type;
                    DB::table('offers')
                        ->where('userID',$id)
                        ->update([
                            'type' => $type,
                            'comment' => $comment,
                    ]);
                }
            }
            */
        }

        return redirect()->route('profile.invest', ['step' => 'step-2', 'type' => $type]);
    }

    public function step_2(Request $request)
    {
        $categories = implode(', ', $request->input('step2-option'));
        $education = $request->input('university');
        if($education == "others"){
            $education = $request->input('others'). "|others";
        }
        $id = Auth::user()->id;
        $offers = DB::select('select * from offers where userID = ?',[$id]);  /// origin method
        if(empty($offers)){
            return redirect()->route('profile.invest', ['step' => 'step-1']);
        }else{
            DB::table('offers')
            ->where('userID',$id)
            ->update([
                'category' => $categories,
                'price' => $request->input('offer_price'),
                'education' => $education,
                'job' => $request->input('current_job'),
                'religion'=> $request->input('religion'),
                'smoking' =>$request->input('smoking')
            ]);
            return redirect()->route('profile.invest', ['step' => 'step-3']);
        }
    }

    public function step_3(Request $request)
    {
        $id = Auth::user()->id;

        $offers = DB::select('select * from offers where userID = ?',[$id]);  /// origin method
        if(empty($offers)){
            return redirect()->route('profile.invest', ['step' => 'step-1']);
        }else{
            DB::table('offers')
            ->where('userID',$id)
            ->update([
                'skill_comment' => $request->input('skill_comment'),
            ]);
            return redirect()->route('profile.invest', ['step' => 'step-4']);
        }
    }

    public function step_5_1(Request $request)
    {
        $id = Auth::user()->id;

        $offers = DB::select('select * from offers where userID = ?',[$id]);  /// origin method
        if(empty($offers)){
            return redirect()->route('profile.invest', ['step' => 'step-1']);
        }else{
            DB::table('offers')
            ->where('userID',$id)
            ->update([
                'strength' => $request->input('strength'),
                'weakness' => $request->input('weakness'),
                'friends_describe' => $request->input('friends_describe'),
                'perfect_day' => $request->input('perfect_day'),
                'choose' => $request->input('choose'),
                'news_daily' => $request->input('first'),
                'science' => $request->input('second'),
                'reflect_behavior' => $request->input('third'),
                'watch_docus' => $request->input('forth'),
                'reading_nonfiction' => $request->input('fifth')
            ]);
            return redirect()->route('profile.invest', ['step' => 'step-5?2']);
        }

    }

    public function step_5_2(Request $request)
    {
        $id = Auth::user()->id;

        $offers = DB::select('select * from offers where userID = ?',[$id]);  /// origin method
        if(empty($offers)){
            return redirect()->route('profile.invest', ['step' => 'step-1']);
        }else{
            DB::table('offers')
            ->where('userID',$id)
            ->update([
                'strength' => $request->input('strength'),
                'weakness' => $request->input('weakness'),
                'friends_describe' => $request->input('friends_describe'),
                'perfect_day' => $request->input('perfect_day'),
                'choose' => $request->input('choose'),
                'week_sports' => $request->input('first'),
                'competition' => $request->input('second'),
                'stairs' => $request->input('third'),
                'weight_training' => $request->input('forth'),
                'activity_priority' => $request->input('fifth')
            ]);
            return redirect()->route('profile.invest', ['step' => 'step-5?3']);
        }
    }

    public function step_5_3(Request $request)
    {
        $id = Auth::user()->id;
        $offers = DB::select('select * from offers where userID = ?',[$id]);  /// origin method
        if(empty($offers)){
            return redirect()->route('profile.invest', ['step' => 'step-1']);
        }else{
            DB::table('offers')
            ->where('userID',$id)
            ->update([
                'strength' => $request->input('strength'),
                'weakness' => $request->input('weakness'),
                'friends_describe' => $request->input('friends_describe'),
                'perfect_day' => $request->input('perfect_day'),
                'choose' => $request->input('choose'),
                'convince' => $request->input('first'),
                'explaining' => $request->input('second'),
                'conversation' => $request->input('third'),
                'others_talking' => $request->input('forth'),
                'debate' => $request->input('fifth')
            ]);
            return redirect()->route('profile.invest', ['step' => 'step-5?4']);
        }
    }

    public function step_5_4(Request $request)
    {
        $id = Auth::user()->id;
        $offers = DB::select('select * from offers where userID = ?',[$id]);  /// origin method
        if(empty($offers)){
            return redirect()->route('profile.invest', ['step' => 'step-1']);
        }else{
            DB::table('offers')
            ->where('userID',$id)
            ->update([
                'strength' => $request->input('strength'),
                'weakness' => $request->input('weakness'),
                'friends_describe' => $request->input('friends_describe'),
                'perfect_day' => $request->input('perfect_day'),
                'choose' => $request->input('choose'),
                'joke' => $request->input('first'),
                'entertaining' => $request->input('second'),
                'oneself_laugh' => $request->input('third'),
                'humor' => $request->input('forth'),
                'friends_call' => $request->input('fifth'),
                'status' => 1,
            ]);
            $offer_id = DB::select('select id from offers where userID = ?',[$id]);  /// origin method
            $offer_id = $offer_id[0]->id;

            DB::table('usermeta')
            ->where('id',$id)
            ->update([
                'offerID' => $offer_id,
            ]);
            return redirect()->route('profile.invest', ['step' => 'final-step']);
        }
    }
}
