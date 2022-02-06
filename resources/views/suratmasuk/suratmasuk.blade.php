@extends('surat/layout')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Surat Masuk</h1>
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $count }}</div>
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
                                    <a href="/crtmasuk" class="btn btn-danger">+ Surat Masuk</a>
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
                                            <th scope="col">Data</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $d)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $d->tgl_masuk }}</td>
                                                <td>{{ $d->tgl_surat }}</td>
                                                <td>{{ $d->no_surat }}</td>
                                                <td>{{ $d->asal_surat }}</td>
                                                <td>{{ $d->perihal }}</td>
                                                <td>
                                                    <a href="/editsrtmasuk/{{$d->id}}" class="btn btn-success">Edit</a>
                                                    <a href="/destroy/{{$d->id}}" class="btn btn-danger">Hapus</a>
                                                </td>
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
