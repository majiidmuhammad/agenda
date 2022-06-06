@extends('layout.main')

@section('title', 'Edit Data Guru')

@section('content')
<h1 class="text-center">Edit Data Kelas</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/updatedatakelas/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
                            <input type="text" name="namakelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->namakelas }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
                            <input type="text" name="walikelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->walikelas }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection