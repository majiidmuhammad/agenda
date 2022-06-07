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
</head>

<body>
    <div class="container py-4" id="forminsert">
        <div class="row">
            <div class="col-9" style="margin-left: 150px;">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-center">
                        <h4>Tambah Data Agenda</h4>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2 mt-5">
                        <div class="table-responsive p-0">
                            <form action="/insertdataview" method="POST" class="w-75 me-auto ms-auto">
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
                                    <label for="exampleInputEmail1" class="form-label">Mapel</label>
                                    <input type="text" name="matapelajaran" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    @error('matapelajaran')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Materi Pembelajaran</label>
                                    <input type="text" name="materipelajaran" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
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
                                    <input type="text" name="kelas" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
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
                                    <input type="text" name="linkpembelajaran" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                            <a href="/tampilkandataagenda/{{ $row->id }}"><img style="width: 40px;"
                                                    src="https://img.icons8.com/avantgarde/100/undefined/experimental-edit-avantgarde.png" /></a>
                                            <a href="/deletedataagenda/{{ $row->id }}" type="button"><img
                                                    style="width: 40px;"
                                                    src="https://img.icons8.com/fluency/48/undefined/filled-trash.png" /></a>
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
    </div>
    </div>

    <!--   Core JS Files   -->
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });

    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="./assets/js/argon-dashboard.min.js?v=2.0.2"></script>
</body>
