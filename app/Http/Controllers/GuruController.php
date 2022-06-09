<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\User;
use App\Models\mapel;
use Illuminate\Http\Request;


class GuruController extends Controller
{
    public function index(){

        $data = guru::with('guruuser','gurumapel')->get();
        return view('guru.dataguru',[
            'data' => $data
        ]);
    }

    public function tambahguru(){
        $datamapel = mapel::all();
        $datauser = User::all();
        return view('guru.tambahdataguru',[
            'datamapel' => $datamapel,
            'datauser' => $datauser
        ]);
    }

    public function insertdataguru(Request $request){
        // $this->validate($request, [
        //     'namaguru' => 'required',
        //     'nik' => 'required',
        //     'user_id' => 'required',
        //     'matapelajaran' => 'required',
        // ]);
        guru::create($request->all());   
        return redirect('dataguru')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandataguru($id){

        $data = guru::find($id);
        $datamapel = mapel::all();
        $datauser = User::all();
        return view('guru.editdataguru', compact('data', 'datamapel', 'datauser'));
    }

    public function updatedataguru(Request $request, $id){
        $data = guru::find($id);
        $data->update($request->all());
        return redirect()->route('dataguru')->with('success', 'Data Berhasil Diedit');
    }

    public function deletedataguru($id){
        $data = guru::find($id);
        $data->delete();
        return redirect()->route('dataguru')->with('success', 'Data Berhasil Didelete');
    }   
}