@extends('layout/main')

@section('title', 'Tambah Guru')

@section('content')

<div class="container mt-3">
    <h1 class="text-center mb-4 text-light">Tambah Data Guru</h1>

    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/insertdataguru" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                            <input type="text" name="namaguru" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('namaguru')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nik</label>
                            <input type="text" name="nik" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('nik')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                            <select class="form-select" name="mapel_id">
                                <option selected>Select Mata Pelajaran</option>
                                @foreach($datamapel as $data)
                                <option value="{{$data->id}}">{{$data->mapel}}</option>
                                @endforeach
                                @error('mapel')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input list="browsers" name="user_id" class="form-control" id="exampleInputEmail1">
                            @foreach($datauser as $data)
                            <datalist id="browsers">
                                <option value="{{$data->id}}">{{$data->email}}</option>
                                @endforeach
                                @error('user_id')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
