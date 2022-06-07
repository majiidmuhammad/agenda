<?php

namespace App\Http\Controllers;


use App\Models\guru;
use App\Models\kelas;
use App\Models\mapel;
use App\Models\agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AgendaController extends Controller
{
    public function index(){

        $data = Agenda::select('agendas.*', 'gurus.*', 'kelas.*', 'mapels.*', 'agendas.id as id_agenda')
		->leftJoin('gurus', 'agendas.guru_id', 'gurus.id')
		->leftJoin('kelas', 'kelas.id', 'agendas.kelas_id')
		->leftJoin('mapels', 'mapels.id', 'gurus.mapel_id');
        return view('agenda./dataagenda',[
            'title' => 'Data Agenda',
            'data' => $data
        ]);
    }

    public function tambahagenda(){
        $dataguru = guru::all();
        $datamapel = mapel::all();
        $datakelas = kelas::all(); 
        return view('agenda.tambahdataagenda',[
            "title" => "Add Data Agenda",
            'dataguru' => $dataguru,
            'datamapel' => $datamapel,
            'datakelas' => $datakelas
        ]);
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
        $dataguru = guru::all();
        $datamapel = mapel::all();
        $datakelas = kelas::all();
        return view('agenda.editdataagenda', compact('data', 'dataguru', 'datamapel', 'datakelas'));
    }

    public function updatedataagenda(Request $request, $id){
        $data = agenda::find($id);
         $data->update($request->all());
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
       
        return redirect()->route('agenda')->with('success', 'Data Berhasil Diedit');
    }

    public function deletedataagenda($id){
        $data = agenda::find($id);
        $data->delete();
        return redirect()->route('agenda')->with('success', 'Data Berhasil Didelete');
    }
}
