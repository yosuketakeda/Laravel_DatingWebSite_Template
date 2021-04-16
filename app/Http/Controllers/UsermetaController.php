<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsermetaController extends Controller
{
    public function index(){

        $usermeta = \App\Usermeta::all();

        return view('edit_profile',compact('usermeta'));
    }
}
