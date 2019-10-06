<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\warga;
use DB;
class Dashboard extends Controller
{
    
	public function index(){

	$data_warga = DB::select('select Tahun, count(*) as number from warga Group By Tahun');
	$warga = DB::select('select Tahun, count(*) as number from warga Group By Tahun');
    return view('dashboard.index',['data_warga' => $data_warga],['warga' => $warga] );
	}

	
}
