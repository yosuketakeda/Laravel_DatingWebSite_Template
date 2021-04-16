<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;

// lili
use Illuminate\Http\Request;
use DB;
use App\Usermeta;
use Auth;
//use Illuminate\Support\Facades\Redirect;
//use User;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */


    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->all());

        return back()->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withStatusPassword(__('Password successfully updated.'));
    }
///////////////////////////////////////////////////////
    // lili code
    public function index()
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
        $directory_path = public_path('upload/users/'.$id.'/');
        $mode = 0777;
        @mkdir( $directory_path, $mode, false);
        $imgs = scandir($directory_path);
        ////////////////

        return view('edit_profile')->with("usermeta", $usermeta)->with("imgs", $imgs);
    }

    public function change_email(Request $request, $id){

        $email = $request->input('email');
        $password = $request->input('change_password');
        $password_object = DB::select('select password from users where id= ?',[$id]);
        $hashedPassword = $password_object[0]->password;
        if (Hash::check($password, $hashedPassword)) {
            // The passwords match...
            DB::update('update users set email = ? where id = ?', [$email, $id]);
            return redirect()->route('profile.option', ['option'=>'settings']);
        }else{
            return redirect()->route('profile.option', ['option'=>'settings'])->withErrors('change_password');
        }
    }
    public function change_password(Request $request, $id){

        $old_password = $request->input('old_password');
        $new_password = $request->input('new_password');
        $conf_password = $request->input('conf_password');
        $password_object = DB::select('select password from users where id= ?',[$id]);  /// origin method
        $hashedPassword = $password_object[0]->password;
        if (Hash::check($old_password, $hashedPassword)) {
            // The passwords match...
            if($new_password == $conf_password){
                if(strlen($new_password) <8 ){
                    return redirect()->route('profile.option', ['option'=>'settings'])->withErrors('min_password');
                }else{
                    auth()->user()->update(['password' => Hash::make($new_password)]);
                    return redirect()->route('profile.option', ['option'=>'settings']);
                }
            }else{
                return redirect()->route('profile.option', ['option'=>'settings'])->withErrors('conf_password');
            }
        }else{
            return redirect()->route('profile.option', ['option'=>'settings'])->withErrors('old_password');
        }
    }

    public function edit_profile(Request $request, $id){

        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $gender = $request->input('gender');
        $age = $request->input('age');
        $address = $request->input('address');
        $description = $request->input('description');
        $hobbies = $request->input('hobbies');
        $reason = $request->input('reason_platform');
        $job = $request->input('job');
        $sport = $request->input('sport');
        $technique = $request->input('technique');
        $language = $request->input('language');

        DB::table('usermeta')
        ->where('id',$id)
        ->update([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'gender' => $gender,
            'age' => $age,
            'address' => $address,
            'description' => $description,
            'hobbies' => $hobbies,
            'reason' => $reason,
            'job' => $job,
            'sport' => $sport,
            'technique' => $technique,
            'language' => $language,
        ]);
        DB::table('users')
        ->where('id',$id)
        ->update([
            'name' => $first_name.' '.$last_name,
        ]);
        return redirect()->route('profile.option', ['option'=>'edit']);
    }

    public function report(Request $request, $id){
        // get usermeta
        $usermetas = Usermeta::all();
        $usermeta = [];
        foreach($usermetas as $meta){
            if($meta->id == $id){
                $usermeta = $meta;
                break;
            }
        }
        $contacts =explode("+",$usermeta->contactedID);
        if($contacts == null){
            return redirect()->route('profile.option', ['option'=>'settings'])->withErrors('no_contacted');
        }else{
            $person_name = $request->input('person_name');
            $person_id = $request->input('person_id');
            $report_text = $request->input('report_text');
            $date = date("Y-m-d",time());

            $buf='';
            foreach($contacts as $contact){
                if($contact == $person_id){
                    $buf = $contact;
                    break;
                }
            }
            if($buf == ''){
                return redirect()->route('profile.option', ['option'=>'settings'])->withErrors('no_matched');
            }else{
                DB::insert('insert into report (userID, person_name, person_id, report_text, date) values (?,?,?,?,?)',
                [$id, $person_name, $person_id, $report_text, $date]);
                return redirect()->route('profile.option', ['option'=>'settings'])->withErrors('success');
            }
        }

    }

    public function delete_image(Request $request){
        $file = $request->src;

        if(unlink($file)){
            return response()->json(['status'=>true, 'success'=>true, 'file'=>$file ]);
        }else{
            return response()->json(['status'=>false, 'success'=>false, 'file'=>$file ]);
        }
    }

    ////////////////// Profile Invest //////////////////

}
