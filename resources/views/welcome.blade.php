@extends('layout.main')

@section('title', 'Dashboard')

@section('content')

<main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Data Guru</p>
                                     <div class="">{{ $jumlahguru }}</div>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div>
                                    <img src="https://img.icons8.com/fluency/48/undefined/teacher.png"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="/dataguru" class="btn btn-primary " Type="button" style="width: 90%;">Lihat Data</a>
                    </div>
                    
                </div>
                
            </div>
            
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Data Kelas</p>
                                     <div class="">{{ $jumlahkelas }}</div>
                                </div>
                            </div>  
                            <div class="col-4 text-end">
                                <div>
                                    <img src="https://img.icons8.com/fluency/48/undefined/teacher.png"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="/datakelas" class="btn btn-primary " Type="button" style="width: 90%;">Lihat Data</a>
                    </div>
                    
                </div>
                
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Data Agenda</p>
                                     <div class="">{{ $jumlahagenda }}</div>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div>
                                    <img src="https://img.icons8.com/fluency/48/undefined/teacher.png"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="/dataagenda" class="btn btn-primary " Type="button" style="width: 90%;">Lihat Data</a>
                    </div>
                    
                </div>
                
            </div>
        </div>
        <div class="row mt-4">
            <div class=" mb-lg-0 mb-4">
                <div class="card ">
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

@endsection
