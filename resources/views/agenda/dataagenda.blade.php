@extends('layout.main')

@section('title', 'Data Guru')

@section('content')

<div class="container-fluid py-4 mt-5">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <a href="/tambahagenda" type="button" class="btn btn-success mb-3">Tambah +</a>
          </div>
          <div class="card-body px-0 pt-0 pb-2 text-center">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Guru</th>
                        <th scope="col">Mapel</th>
                        <th scope="col">Materi</th>
                        <th scope="col">Mulai</th>
                        <th scope="col">Selesai</th>
                        <th scope="col">ketsiswa</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Jenis Pembelajaran</th>
                        <th scope="col">Link</th>
                        <th scope="col">Dokumentasi</th>
                        <th scope="col">Keteangan</th>
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
                        <td>{{ $row->namaguru }}</td>
                        <td>{{ $row->matapelajaran }}</td>
                        <td>{{ $row->materipelajaran }}</td>
                        <td>{{ $row->mulai }}</td>
                        <td>{{ $row->selesai }}</td>
                        <td>{{ $row->ketsiswa }} tidak hadir</td>
                        <td>{{ $row->kelas }}</td>
                        <td>{{ $row->jenispembelajaran }}</td>
                        <td>{{ $row->linkpembelajaran }}</td>
                        <td>
                            <img src="{{ asset('dokumentasifoto/'.$row->dokumentasi) }}" alt=""
                                style="width: 90px;">
                        </td>
                        <td>{{ $row->keterangan }}</td>
                        <td>
                            <a href="/tampilkandataagenda/{{ $row->id }}"><img style="width: 40px;" src="https://img.icons8.com/avantgarde/100/undefined/experimental-edit-avantgarde.png"/></a>
                            <a href="/deletedataagenda/{{ $row->id }}" type="button" ><img style="width: 40px;" src="https://img.icons8.com/fluency/48/undefined/filled-trash.png"/></a>
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
