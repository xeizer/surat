@extends('surat/layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Surat Keluar</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
    <!-- Surat Keluar -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Surat Keluar</div>
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
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Masukkan Surat Keluar</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="col-xl-12 col-lg-5 text-center mt-3 mb-3">
                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    <form action="/simpansuratkeluar"  method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="nosurat" class="col-2">No Surat : </label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" name="nosurat" id="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl_keluar" class="col-2">Tanggal Keluar : </label>
                                            <div class="col-10">
                                                <input class="form-control" type="date" name="tgl_keluar" id="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl_surat" class="col-2">Tanggal Surat : </label>
                                            <div class="col-10">
                                                <input class="form-control" type="date" name="tgl_surat" id="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tujuan" class="col-2">Tujuan : </label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" name="tujuan" id="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="perihal" class="col-2">Perihal : </label>
                                            <div class="col-10">
                                                <input class="form-control" type="text" name="perihal" id="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="isi" class="col-2">Isi : </label>
                                            <div class="col-10">
                                                <textarea class="form-control" name="isi" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lampiran" class="col-2">Lampiran : </label>
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
