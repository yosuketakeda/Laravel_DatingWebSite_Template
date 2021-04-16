<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ImageController extends Controller
{
    public function index()
    {
      //return view('edit_profile');
    }

    public function uploadImage(Request $request)
    {
        $id = Auth::user()->id;
        $directory_path = public_path('upload/users/'.$id.'/');
        // check image counts
        $file = glob($directory_path . '*');
        /*$countFile = 0;
        if ($file != false)
        {
            $countFile = count($file);
        }*/
        ////////////////
        //if($countFile >= 6){
        //    return response()->json(['status'=>false, 'success'=>false, 'files'=>$file ]);
        //}else{
            $image = $request->image;
            //list($type, $image) = explode(';', $image);
            list(, $image) = explode(',', $image);
            $image = base64_decode($image);
            $mode = 0777;
            @mkdir( $directory_path, $mode, false);
            $image_name= time().'.png';
            $path = public_path('upload/users/'.$id.'/'.$image_name);
            file_put_contents($path, $image);
            return response()->json(['status'=>true, 'success'=>true, 'files'=>$file ]);
        //}
    }

    public function uploadTempImage(Request $request){
        $id = Auth::user()->id;
        $directory_path = public_path('upload/offer/'.$id.'/');
        // check image counts
        $file = glob($directory_path . '*');
        /*$countFile = 0;
        if ($file != false)
        {
            $countFile = count($file);
        }*/
        ////////////////
        //if($countFile >= 6){
        //    return response()->json(['status'=>false, 'success'=>false, 'files'=>$file ]);
        //}else{
            $image = $request->image;
            //list($type, $image) = explode(';', $image);
            list(, $image) = explode(',', $image);
            $image = base64_decode($image);
            $mode = 0777;
            @mkdir( $directory_path, $mode, false);
            $image_name= time().'.png';
            $path = public_path('upload/offer/'.$id.'/'.$image_name);
            file_put_contents($path, $image);
            return response()->json(['status'=>true, 'success'=>true, 'files'=>$file ]);
        //}
    }

    public function moveImage(Request $request){
        $id = $request->id;
        $mode = 0777;
        @mkdir( public_path('upload/users/'.$id.'/'), $mode, false);

        $old_directory = public_path('upload/offer/'.$id.'/');
        $files = glob($old_directory . '*');
        foreach($files as $file){
            $new_file = str_replace("offer", "users", $file);
            $new_file = 'public/'.substr($new_file, strpos($new_file, 'upload/'));

            copy($file, $new_file);
        }
        return response()->json(['status'=>true, 'success'=>true, 'file'=>$new_file ]);
    }
}
