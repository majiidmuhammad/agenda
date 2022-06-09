<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){

        $datas = Kelas::select('kelas.*', 'gurus.*', 'kelas.id as id_kelas')
		->leftJoin('gurus', 'kelas.guru_id', 'gurus.id')
		->paginate(5);
        return view('kelas.datakelas', compact('datas'));
    }

    public function tambahkelas(){
        $dataguru = guru::all();
        return view('kelas.tambahdatakelas',[
            'dataguru' => $dataguru
        ]);
    }

    public function insertdatakelas(Request $request){
        $this->validate($request, [
            'namakelas' => 'required',
            'guru_id' => 'required',
        ]);
        kelas::create($request->all());   
        return redirect()->route('kelas')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandatakelas($id){

        $data = kelas::find($id);
        $dataguru = guru::all();
        return view('kelas.editdatakelas', compact('data', 'dataguru'));
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
