@extends('layout.main')

@section('title', 'Data Mapel')

@section('content')

<div class="container-fluid py-4 mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <a href="/tambahmapel" type="button" class="btn btn-success mb-3">Tambah +</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2 text-center">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Mapel</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($data as $row)
                                <tr>
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $row->mapel }}</td>
                                    <td>
                                        <a href="/editmapel/{{ $row->id }}" class="btn btn-warning">Edit</a>
                                        <a href="/deletemapel/{{ $row->id }}" type="button"
                                            class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
