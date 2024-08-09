<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pegawai</title>
    <link href="{{asset('tema/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('tema/css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('tema/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
       
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                </nav>
                <!-- End of Topbar -->
                
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"> Data Pegawai</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table style="text-align:center" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>

                                        <a href="/tambahpegawai" class="btn btn-primary">
                                            <i class="fas fa-plus"></i>Tambah Pegawai </a>
                                        <br>
                                        <br>
                                        <tr>
                                            <th>No</th>
                                            <th><a href="{{ route('pegawai', ['sort_by' => 'Nama', 'sort_order' => request('sort_order') === 'asc' ? 'desc' : 'asc']) }}">Nama</a></th>
                                            <th><a href="{{ route('pegawai', ['sort_by' => 'Jenis_Kelamin', 'sort_order' => request('sort_order') === 'asc' ? 'desc' : 'asc']) }}">Jenis Kelamin</a></th>
                                            <th><a href="{{ route('pegawai', ['sort_by' => 'Umur', 'sort_order' => request('sort_order') === 'asc' ? 'desc' : 'asc']) }}">Umur</a></th>
                                            <th><a href="{{ route('pegawai', ['sort_by' => 'No_Telp', 'sort_order' => request('sort_order') === 'asc' ? 'desc' : 'asc']) }}">No Telepon</a></th>
                                            <th><a href="{{ route('pegawai', ['sort_by' => 'Alamat', 'sort_order' => request('sort_order') === 'asc' ? 'desc' : 'asc']) }}">Alamat</a></th>
                                            <th><a href="{{ route('pegawai', ['sort_by' => 'Jabatan', 'sort_order' => request('sort_order') === 'asc' ? 'desc' : 'asc']) }}">Jabatan</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1
                                        @endphp
                                        @foreach ($pegawai as $item)
                                        <tr>
                                            <th scope = "item">{{ $no++}}</th>
                                            <td>{{ $item->Nama }}</td>
                                            <td>{{ $item->Jenis_Kelamin }}</td>
                                            <td>{{ $item->Umur }}</td>
                                            <td>{{ $item->No_Telp }}</td>
                                            <td>{{ $item->Alamat }}</td>
                                            <td>{{ $item->Jabatan }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('tema/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('tema/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('tema/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('tema/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('tema/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('tema/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('tema/js/demo/datatables-demo.js')}}"></script>

</body>

</html>