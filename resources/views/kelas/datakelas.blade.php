@extends('layout.main')

@section('title', 'Data Kelas')

@section('content')

<div class="container-fluid py-4 mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <a href="/tambahkelas" type="button" class="btn btn-success mb-3">Tambah +</a>
                </div>
                <div class="card-body px-0 pt-0 pb-2 text-center">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Kelas</th>
                                    <th scope="col">Wali Kelas</th>
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
                                    <td>{{ $row->namakelas }}</td>
                                    <td>{{ $row->walikelas }}</td>
                                    <td>
                                        <a href="/tampilkandatakelas/{{ $row->id }}"><img style="width: 40px;" src="https://img.icons8.com/avantgarde/100/undefined/experimental-edit-avantgarde.png"/></a>
                                        <a href="/deletedatakelas/{{ $row->id }}" type="button"><img style="width: 40px;" src="https://img.icons8.com/fluency/48/undefined/filled-trash.png"/></a>
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
