@extends('surat/layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Akun</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
        </div>

        <!-- Content Row -->

        <div class="row">
            <!-- Pie Chart -->
            <div class="col-xl-12 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Akun</h6>
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
                        <form action="{{ url('/adminsimpanakun') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-2 text-dark">Nama</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" name="name" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-2 text-dark">Email</label>
                                <div class="col-10">
                                    <input class="form-control" type="email" name="email" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="role" class="col-2 text-dark">Role</label>
                                <div class="col-10">
                                    <input type="radio" name="role" value="admin">Admin
                                    <input type="radio" name="role" value="atasan">Atasan
                                    <input type="radio" name="role" value="petugas">Petugas
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="foto" class="col-2 text-dark">Foto</label>
                                <div class="col-10">
                                    <input class="form-control" type="file" name="foto" id="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-2 text-dark">Password</label>
                                <div class="col-10">
                                    <input class="form-control" type="password" name="password" id="">
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
