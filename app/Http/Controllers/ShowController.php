<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
class ShowController extends Controller
{
    public function show(){
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
        
       
        header('Content-Type: video/mp4');
        
        header('Content-Disposition: inline');
        header('Content-Length:'.$file_size);
       

        if((session("check"))=="aaadx"){
            echo $data;
        }else{
            echo "fuck";
        }
        session()->forget('check');
    	// if($_GET['path']??false){
	    // 	$path="app/".urldecode($_GET['path']);
	    // 	return response()->download(storage_path($path),basename($path), []);
    	// }
    	// abort(404);
    }
}
