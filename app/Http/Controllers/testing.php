<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\warga;
class testing extends Controller
{
    //
    public function index(Request $request)
    {
   	  	return view('testing.index');
    }

    public function add(Request $request){
    	$data_warga = warga::create($request->all());
    	return redirect('/data_warga')->with('sukses','Data Berhasil Di input');
    }
}
