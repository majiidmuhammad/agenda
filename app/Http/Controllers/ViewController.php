<?php

namespace App\Http\Controllers;

use App\Models\agenda;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index (){

        $data = agenda::all();
        return view('view guru.viewguru', compact('data'));
    }

    public function tambahdataview(){
        return view('agenda.tambahdataagenda');
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
