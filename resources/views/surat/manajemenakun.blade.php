@extends('surat/layout')
@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Manajemen Akun</h1>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        <!-- Pie Chart -->
                        <div class="col-xl-12 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Table Akun</h6>
                                    <a href="{{ url('/admintambahakun') }}" class="btn btn-danger">+ Akun</a>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user as $u)
                                          <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $u->name }}</td>
                                            <td>{{ $u->email }}</td>
                                            <td>{{ $u->role }}</td>
                                            <td>
                                                <a href="/adminedit/{{$u->id}}" class="btn btn-success">Edit</a>
                                                <a href="/adminhapus/{{$u->id}}" class="btn btn-danger">Hapus</a>
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
                <!-- /.container-fluid -->
@endsection