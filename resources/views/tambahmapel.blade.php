@extends('layout/main')

@section('title', 'Tambah Mapel')

@section('content')

<div class="container mt-3">
    <h1 class="text-center mb-4 text-light">Tambah Data Mapel</h1>

    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/insertmapel" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mapel</label>
                            <input type="text" name="mapel" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
