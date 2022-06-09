    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/download.png">
    <title>
        Agenda Guru | Form
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="/assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
    </head>
    <body>
        <div class="container mt-3">
            <h1 class="text-center mb-4 text-light">Tambah Data Agenda</h1>

            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/insertdataagenda" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                                    <select class="form-select" name="guru_id">
                                        <option selected>Select Guru</option>
                                        @foreach($dataguru as $data)
                                        <option value="{{$data->id}}">{{$data->namaguru}}</option>
                                        @endforeach
                                    </select>
                                    @error('namaguru')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Materi Pembelajaran</label>
                                    <input type="text" name="materipelajaran" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('materipelajaran')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Mulai</label>
                                    <input type="text" name="mulai" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('mulai')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Selesai</label>
                                    <input type="text" name="selesai" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('selesai')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Ketsiswa</label>
                                    <input type="text" name="ketsiswa" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('ketsiswa')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kelas</label>
                                    <select class="form-select" name="kelas_id">
                                        <option selected>Select Kelas</option>
                                        @foreach($datakelas as $data)
                                        <option value="{{$data->id}}">{{$data->namakelas}}</option>
                                        @endforeach
                                    </select>
                                    @error('kelas')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jenis Pembelajaran</label>
                                    <select class="form-select" aria-label="Default select example"
                                        name="jenispembelajaran">
                                        <option selected>Jenis Pembelajaran</option>
                                        <option value="ptm">PTM</option>
                                        <option value="bdr">BDR</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Link</label>
                                    <input type="text" name="linkpembelajaran" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('linkpembelajaran')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Masukan Foto</label>
                                    <input type="file" name="dokumentasi" class="form-control">
                                    @error('dokumentasi')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('keterangan')
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
    </body>
    </html>