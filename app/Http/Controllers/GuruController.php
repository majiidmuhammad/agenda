<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;


class GuruController extends Controller
{
    public function index(){

        $data = guru::all();
        return view('guru./dataguru', compact('data'));
    }

    public function tambahguru(){
        return view('guru.tambahdataguru');
    }

    public function insertdataguru(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'namaguru' => 'required',
            'nik' => 'required',
            'matapelajaran' => 'required',
        ]);
        guru::create($request->all());   
        return redirect()->route('guru')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandataguru($id){

        $data = guru::find($id);
        return view('guru.editdataguru', compact('data'));
    }

    public function updatedataguru(Request $request, $id){
        $data = guru::find($id);
        $data->update($request->all());
        return redirect()->route('guru')->with('success', 'Data Berhasil Diedit');
    }

    public function deletedataguru($id){
        $data = guru::find($id);
        $data->delete();
        return redirect()->route('guru')->with('success', 'Data Berhasil Didelete');
    }   
}