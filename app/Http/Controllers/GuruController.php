<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;


class GuruController extends Controller
{
    public function index(){

        $data = guru::with('guruuser','gurumapel');
        return view('guru./dataguru',[
            'data' => $data
        ]);
    }

    public function tambahguru(){
        $datamapel = mapel::all();
        $datauser = user::all();
        return view('guru.tambahdataguru',[
            'datamapel' => $datamapel,
            'datauser' => $datauser
        ]);
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
        $datamapel = mapel::all();
        $datauser = user::all();
        return view('guru.editdataguru', compact('data', 'datamapel', 'datauser'));
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