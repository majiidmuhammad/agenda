@extends('layout.main')

@section('title', 'Edit Data Guru')

@section('content')
<h1 class="text-center">Edit Data Guru</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form action="/updatedataguru/{{ $data->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                            <input type="text" name="namaguru" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->namaguru }}">
                            @error('namaguru')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nik</label>
                            <input type="text" name="nik" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $data->nik }}">
                            @error('nik')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
                            <select class="form-select" name="mapel_id">
                                <option selected>Mata pelajaran</option>
                                @foreach ($datamapel as $item)
                                <option value="{{$item->id}}">{{$item->mapel}}</option>
                                @endforeach
                            </select>
                            @error('matapelajaran')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Use  rname</label>
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
