<?php

namespace App\Http\Controllers;

// lili code
//use Illuminate\Http\Request;
use DB;
use Auth;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Faker\Provider\ka_GE\DateTime;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $offers = DB::table('offers')->get();
        $persons = array();
        if(Auth::check()){
            $id = Auth::user()->id;
        }else{
            $id = '';
        }
        foreach($offers as $offer){
            $userID = $offer->userID;
            if($id == $userID){

            }else{
                $avarta = (DB::select('select avarta_path from usermeta where id = ?',[$userID]))[0]->avarta_path;
                $type = (DB::select('select type from offers where userID = ?',[$userID]))[0]->type;
                if($type == 1){
                    $type = "Geschäftlich";
                }elseif($type == 2){
                    $type = "Freizeit";
                }else{
                    $type = "Geschäftlich & Freizeit";
                }
                $name = (DB::select('select name from users where id = ?',[$userID]))[0]->name;
                $age = (DB::select('select age from usermeta where id = ?',[$userID]))[0]->age;
                $job = (DB::select('select job from usermeta where id = ?',[$userID]))[0]->job;
                $category = (DB::select('select category from offers where userID = ?',[$userID]))[0]->category;
                $hobbies = (DB::select('select hobbies from usermeta where id = ?',[$userID]))[0]->hobbies;
                $login_time = strtotime( (DB::select('select login_time from usermeta where id = ?',[$userID]))[0]->login_time );
                $logout_time = strtotime( (DB::select('select logout_time from usermeta where id = ?',[$userID]))[0]->logout_time );

                if($login_time > $logout_time){
                    $login_status = "online";
                }else{
                    /*
                    $curr_time = new DateTime();
                    $then = new DateTime($logout_time);
                    $diff = $curr_time->diff($then);
                    $login_status = $diff->format('%i min');
                    */

                    $curr_time = strtotime( date('Y-m-d H:i:s') );
                    $offset = $curr_time - $logout_time;
                    //var_dump($offset);
                    $hours = floor($offset / 3600);
                    $minutes = (floor($offset / 60) % 60);
                    if($hours == 0){
                        $login_status = $minutes." min";
                    }else{
                        $login_status = $hours." h ".$minutes." min";
                    }
                }

                if($avarta != '' && $type !='' && $name != '' && $job != '' && $category != '' && $hobbies != ''){
                    $person = array(
                        'avarta' => $avarta,
                        'type' => $type,
                        'name' => $name,
                        'age' => $age,
                        'job' => $job,
                        'category' => $category,
                        'hobbies' => $hobbies,
                        'login_status' => $login_status,
                    );
                    array_push($persons, $person);
                }
            }
        }

        return view('home')->with('persons', $persons);
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        return view('dashboard');
    }
}
