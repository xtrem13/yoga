<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use App\Models\User;
use App\Models\Link;

class ShowController extends Controller
{
    public function show(Request $req){
        $link=Link::where('hash', $req->link)->first();
        if(!$link){
            return abort(404);
        }
        $user=User::where('id', $link->user_id)->first();
        if(!$user){
            return abort(401);
        }
        if($user->id!=auth()->user()->id){
            return abort(401);
        }

    	$data['videos']=Media::where('type','video')->get();
        $data['others']=Media::where('type','!=','video')->get();
    	return view("show", $data);
    }
     public function file(Request $req){
        $path="app/".urldecode($_GET['path']);
        $file = storage_path($path);
        $file_size = filesize($file);
        $fp = fopen($file, "rb");
        $data = fread ($fp, $file_size);
        fclose($fp);
        
       
        header('Content-Type: application/pdf');
        
        header('Content-Disposition: inline');
        header('Content-Length:'.$file_size);
       

        echo $data;
        if((session("check"))=="aaadx"){
        }else{
            // echo "fuck";
        }
        session()->forget('check');
    	// if($_GET['path']??false){
	    // 	$path="app/".urldecode($_GET['path']);
	    // 	return response()->download(storage_path($path),basename($path), []);
    	// }
    	// abort(404);
    }
}
