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
                                <div class="h5 mb-0 font-weight-bold text-gray-800">90</div>
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
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Masukkan Surat Masuk</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="col-xl-12 col-lg-5 text-left mt-3 mb-3">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/simpansuratmasuk" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="nosurat" class="col-2 text-dark">Nomor Surat</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="nosurat" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tgl_masuk" class="col-2 text-dark">Tanggal Masuk Surat</label>
                                <div class="col-10">
                                    <input class="form-control" type="date" name="tgl_masuk" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tgl_surat" class="col-2 text-dark">Tanggal Surat</label>
                                <div class="col-10">
                                    <input class="form-control" type="date" name="tgl_surat" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="asal" class="col-2 text-dark">Asal Surat</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="asal" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="perihal" class="col-2 text-dark">Perihal</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="perihal" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lampiran" class="col-2 text-dark">Lampiran</label>
                                <div class="col-10">
                                    <input class="form-control" type="file" name="lampiran" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger float-right">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection