
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Surat SDN 44</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Cetak Laporan</title>
</head>
<body>
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4 pt-3">
            <h1 class="h3 mb-0 text-gray-800">Laporan</h1>
            <button class="btn btn-danger" onclick="window.print()"> Print Laporan</button>
        </div>

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
                                <th scope="col">Tanggal Masuk Surat</th>
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
<script type="text/javascript">
    window.print();

    </script>
</body>
</html>
