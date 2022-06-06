@extends('layout.main')

@section('title', 'Edit Data Guru')

@section('content')
<h1 class="text-center">Edit Data Guru</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/updatedataagenda/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                            <input type="text" name="namaguru" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->namaguru }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mapel</label>
                            <input type="text" name="matapelajaran" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->matapelajaran }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Materi Pembelajaran</label>
                            <input type="text" name="materipelajaran" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->materipelajaran }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mulai</label>
                            <input type="text" name="mulai" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->mulai }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Selesai</label>
                            <input type="text" name="selesai" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->selesai }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Ketsiswa</label>
                            <input type="text" name="ketsiswa" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->ketsiswa }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->kelas }}">
                        </div>


                        <select class="form-select" aria-label="Default select example">
                            <option selected>{{ $data->jenispembelajaran }}</option>
                            <option value="ptm">PTM</option>
                            <option value="bdr">BDR</option>
                        </select>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Link</label>
                            <input type="text" name="linkpembelajaran" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->linkpembelajaran }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Masukan Foto</label>
                            <input Type="file" value="{{ $data->dokumentasi }}" name="dokumentasi"  class="form-control">
                            <img src="/dokumentasifoto/{{ $data->dokumentasi }}" width="300px">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->keterangan }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection