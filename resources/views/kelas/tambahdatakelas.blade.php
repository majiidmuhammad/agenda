@extends('layout/main')

@section('title', 'Tambah Guru')

@section('content')

<div class="container mt-3">
    <h1 class="text-center mb-4 text-light">Tambah Data Kelas</h1>

    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/insertdatakelas" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
                            <input type="text" name="namakelas" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('namakelas')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wai Kelas</label>
                            <select class="form-select" name="guru_id">
                                <option selected>Select Guru</option>
                                @foreach($dataguru as $data)
                                <option value="{{$data->id}}">{{$data->namaguru}}</option>
                                @endforeach
                            </select>
                            @error('guru_id')
                            <div class="text-danger">
                                {{ $message }}
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
