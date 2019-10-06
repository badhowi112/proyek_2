<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\warga;
use DB;

class DataWarga extends Controller
{
    //
     public function index(Request $request)
    {
        if($request->has('cari'))
        {
            $data_warga = \App\warga::where('nama','LIKE','%' .$request->cari. '%')->get();

        }else{

        $data_warga = \App\warga::all()->sortBy('nama');
          
        }
    	
        return view('DataWarga.index',['data_warga' => $data_warga]);
        
    }

    public function create(Request $request)
    {
        \App\warga::create($request->all());
        return redirect('/data_warga');
    }
     public function edit($id)
    {
        //$warga = DB::table('data_news')->where('id_data_warga',$id)->get();
       $data_warga = \App\warga::find($id);// Anjing nih method
      
        return view('DataWarga.edit',['data_warga' => $data_warga]);  
    }
    public function update(Request $request,$id)
    {
        $data_warga = \App\warga::find($id);
        $data_warga->update($request->all());
        return redirect('/data_warga')->with('Update','Data berhasil di update');
    }
    public function delete($id)
    {
        $data_warga = \App\warga::find($id);
        $data_warga->delete();
        return redirect('/data_warga')->with('Delete','Data berhasil di Hapus');
    }
    public function add(){
        return view('DataWarga.add');
    }

}
