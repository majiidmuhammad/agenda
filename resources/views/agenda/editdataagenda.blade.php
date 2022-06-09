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
                            <select class="form-select" name="guru_id" value="">
                                @foreach($dataguru as $data)
                                <option value="{{$data->id}}">{{$data->namaguru}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Materi Pembelajaran</label>
                            <input type="text" name="materipelajaran" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{$data->materipembelajaran}}">
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
                            <select class="form-select" name="kelas_id" value="">
                                @foreach ($datakelas as $item)
                                <option value="{{$item->id}}">{{$item->namakelas}}</option>
                                @endforeach
                            </select>
                        </div>


                        <select class="form-select" aria-label="Default select example">
                            <option selected>{{ $data->jenispembelajaran }}</option>
                            <option value="ptm">PTM</option>
                            <option value="j">BDR</option>
                        </select>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Link</label>
                            <input type="text" name="linkpembelajaran" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->linkpembelajaran }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Masukan Foto</label>
                            <input Type="file" value="{{ $data->dokumentasi }}" name="dokumentasi" class="form-control">
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
