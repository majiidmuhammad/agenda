<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){

        $data = kelas::all();
        return view('kelas./datakelas', compact('data'));
    }

    public function tambahkelas(){
        return view('kelas.tambahdatakelas');
    }

    public function insertdatakelas(Request $request){
        $this->validate($request, [
            'namakelas' => 'required',
            'walikelas' => 'required',
        ]);
        kelas::create($request->all());   
        return redirect()->route('kelas')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandatakelas($id){

        $data = kelas::find($id);
        return view('kelas.editdatakelas', compact('data'));
    }

    public function updatedatakelas(Request $request, $id){
        $data = kelas::find($id);
        $data->update($request->all());
        return redirect()->route('kelas')->with('success', 'Data Berhasil Diedit');
    }

    public function deletedatakelas($id){
        $data = kelas::find($id);
        $data->delete();
        return redirect()->route('kelas')->with('success', 'Data Berhasil Didelete');
    }
}
