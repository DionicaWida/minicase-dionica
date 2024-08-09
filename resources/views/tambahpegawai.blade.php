<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Data Pasien</title>

    <!-- Custom fonts for this template -->
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Data Pegawai</h1>
                </div>
                <!-- /.container-fluid -->
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="card shadow mb-4 col-6 ">
                    {{-- <div class="card col-lg-8"> --}}
                      <div class="card-body">
                        <form action="/insertpegawai" method="POST">
                          @csrf
                          <div class="mb-6">
                              <label for="exampleInputEmail1" class="form-label"><span></span>Nama</label>
                              <input type="text" name="Nama" pattern="[A-Za-z\s]+" title="Masukkan huruf" class="form-control" style="text-transform: capitalize;" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('Nama')}}" required>
                          </div>
                          <br>
                          
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"><span></span>Jenis Kelamin</label>
                            <select class="form-control select-2" name="Jenis_Kelamin" aria-label="Default select example" value = "{{old('Jenis_Kelamin')}}" required>
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="1">Laki Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                          </div>
                                    
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"><span ></span>Umur</label>
                            <input type="text" name="Umur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "{{old('Umur')}}" required>
                          </div>
                                     
                        <div class="mb-3">
                              <label for="No_Telp" class="form-label"><span></span>No Telp</label>
                              <input type="text" id="No_Telp" name="No_Telp" class="form-control" pattern="[0-9]+" title="Masukkan angka" aria-describedby="emailHelp" required value="{{old('No_Telp')}}" maxlength="13">
                              
                          </div>

                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"><span ></span>Alamat</label>
                            <input type="text" name="Alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "{{old('Alamat')}}" required>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label"><span ></span>Jabatan</label>
                            <input type="text" name="Jabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "{{old('Alamat')}}" required>
                          </div>
                          <button type="submit" class="btn btn-dio">Submit</button>
                        </form>
                  </div>
                </div></div></div>

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