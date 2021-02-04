<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  	public function index(Request $req){
  		$data['body']="admin.home";
  		return view("admin.index", $data);
  	}
  	public function media(Request $req){
  		$data['body']="admin.media";
  		return view("admin.index", $data);
  	}
  	public function links(Request $req){
  		$data['body']="admin.links";
  		return view("admin.index", $data);
  	}
    
}
