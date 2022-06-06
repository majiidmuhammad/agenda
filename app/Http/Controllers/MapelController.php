<?php

namespace App\Http\Controllers;

use App\Models\mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(){

        $data = mapel::all();
        return view('/datamapel', compact('data'));
    }

    public function tambahmapel(){
        return view('tambahdatamapel');
    }

    public function insertdatamapel(Request $request){
        $this->validate($request, [
            'mapel' => 'required',
        ]);
        mapel::create($request->all());   
        return redirect()->route('mapel')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandatamapel($id){

        $data = mapel::find($id);
        return view('editdatamapel', compact('data'));
    }

    public function updatedatamapel(Request $request, $id){
        $data = mapel::find($id);
        $data->update($request->all());
        return redirect()->route('mapel')->with('success', 'Data Berhasil Diedit');
    }

    public function deletedatamapel($id){
        $data = mapel::find($id);
        $data->delete();
        return redirect()->route('mapel')->with('success', 'Data Berhasil Didelete');
    }
}
