@extends('surat/layout')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Laporan</h1>
                    <a href="{{ url('/cetak') }}" target="_blank" class="btn btn-danger">Print Laporan</a>

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Surat Masuk -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Surat Masuk</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $csurma }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-envelope fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Surat Keluar -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Surat keluar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $csurke }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-envelope fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <!-- Pie Chart -->
                        <div class="col-xl-12 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Table Surat Masuk</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Tanggal Masuk Surat</th>
                                            <th scope="col">Tanggal Surat</th>
                                            <th scope="col">Nomor Surat</th>
                                            <th scope="col">Asal Surat</th>
                                            <th scope="col">Perihal</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($surma as $d)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $d->tgl_masuk }}</td>
                                                <td>{{ $d->tgl_surat }}</td>
                                                <td>{{ $d->no_surat }}</td>
                                                <td>{{ $d->asal_surat }}</td>
                                                <td>{{ $d->perihal }}</td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                      </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Table Surat Keluar</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Tanggal Keluar Surat</th>
                                            <th scope="col">Tanggal Surat</th>
                                            <th scope="col">Nomor Surat</th>
                                            <th scope="col">Tujuan</th>
                                            <th scope="col">Perihal</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($surke as $d)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $d->tgl_keluar }}</td>
                                                <td>{{ $d->tgl_surat }}</td>
                                                <td>{{ $d->no_surat }}</td>
                                                <td>{{ $d->tujuan }}</td>
                                                <td>{{ $d->perihal }}</td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->


@endsection
