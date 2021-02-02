<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  	public function index(Request $req){
  		$data['body']="admin.home";
  		return view("admin.index", $data);
  	}
}
