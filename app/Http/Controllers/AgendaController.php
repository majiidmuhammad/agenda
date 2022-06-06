<?php

namespace App\Http\Controllers;


use App\Models\agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AgendaController extends Controller
{
    public function index(){

        $data = agenda::all();
        return view('agenda./dataagenda', compact('data'));
    }

    public function tambahagenda(){
        return view('agenda.tambahdataagenda');
    }

    public function insertdataagenda(Request $request){
        $data = agenda::create($request->all());   
        if($request->hasFile('dokumentasi')){
            $request->file('dokumentasi')->move('dokumentasifoto/', $request->file('dokumentasi')->getClientOriginalName());
            $data->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('agenda')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandataagenda($id){

        $data = agenda::find($id);
        return view('agenda.editdataagenda', compact('data'));
    }

    public function updatedataagenda(Request $request, $id){
        $data = agenda::find($id);
        if ($request->hasFile('dokumentasi')) {
            $destination = 'dokumentasifoto/'.$data->dokumentasi;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('dokumentasi');
            $extension = $file->getClientOriginalName();
            $filename = time().'.'.$extension;
            $file->move('dokumentasifoto/', $filename);
            $data->dokumentasi = $filename;
        }
        $data->update(); 
        $data->update($request->all());
        return redirect()->route('agenda')->with('success', 'Data Berhasil Diedit');
    }

    public function deletedataagenda($id){
        $data = agenda::find($id);
        $data->delete();
        return redirect()->route('agenda')->with('success', 'Data Berhasil Didelete');
    }
}
