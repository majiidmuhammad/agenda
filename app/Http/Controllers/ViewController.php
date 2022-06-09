<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kelas;
use App\Models\mapel;
use App\Models\agenda;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index (){

        $data = agenda::all();
        return view('viewguru.viewguru',[
            'title' => 'Data Agenda',
            'data' => $data
        ]);
    }   

    public function tambahdataview(){
        $dataguru = guru::all();
        $datamapel = mapel::all();
        $datakelas = kelas::all(); 
        return view('viewguru.tambahviewguru', [
            "title" => "Add Data Agenda",
            'dataguru' => $dataguru,
            'datamapel' => $datamapel,
            'datakelas' => $datakelas
        ]);
    }

    public function insertdataview(Request $request){
        $data = agenda::create($request->all());   
        if($request->hasFile('dokumentasi')){
            $request->file('dokumentasi')->move('dokumentasifoto/', $request->file('dokumentasi')->getClientOriginalName());
            $data->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('guru')->with('success', 'Data Berhasil Ditambahkan');
    }
}
