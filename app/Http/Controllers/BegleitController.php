<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Session;

class BegleitController extends Controller
{

    public function select_category(Request $request)
    {
        $sel_category = $request->select_category;
        return view('begleit')->with("sel_category", $sel_category);
    }
    public function begleit_find(Request $request)
    {
        $gender = $request->input('gender');
        $type = $request->input('type');
        $option= $request->input('option');
        $vals = array(
            'gender'=>$gender,
            'type'=>$type,
            'option'=>$option
        );
        return view('begleit')->with("home_vals", $vals);
    }
}
