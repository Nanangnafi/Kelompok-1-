<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Poliwangi</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="adminDashboard.php">
                <div class="sidebar-brand-icon rotate-n-10">
                    <img src="img/poliwangi.png" alt="" height="40">
                </div>
                <div class="sidebar-brand-text mx-3">Poliwangi</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="adminDashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Data Akademik</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="mahasiswaori.php">Mahasiswa</a>
                        <a class="collapse-item" href="pendaftaran_KP.php">Pendaftaran KP</a>
                        <a class="collapse-item" href="IjinProjek.php">Surat Izin KP</a>
                        <a class="collapse-item" href="lembar_kerja.php">Lembar Kerja KP</a>
                        <a class="collapse-item" href="pendaftaran.php">Pendaftaran Ujian KP</a>
                        <a class="collapse-item" href="jadwalujian.php">Jadwal Ujian KP</a>
                        <a class="collapse-item" href="unggah_nilai.php">Nilai</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                       

                        <!-- Nav Item - Messages -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hii Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

<?php

    //panggil koneksi database
    include "koneksi.php"
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mengunggah Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
    <div class="mt-3">
  <h3 class="text-center">Mengunggah Nilai Mahasiswa</h3>
  </div>

  <div class="card mt-3">
  <div class="card-header bg-info text-white">
    Nilai Mahasiswa
  </div>
  <div class="card-body">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-dark mb-3" data-bs-toggle="modal" data-bs-target="#modaltambah">
  Tambah data
</button>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Kelas</th>
            <th>Nilai PBO</th>
            <th>Nilai K3</th>
            <th>Nilai WEB</th>
            <th>Nilai MATEMATIKA</th>
            <th>Aksi</th>
        </tr>
        <?php

        //persiapan menampilkan data
        $no = 1;
        $tampil = mysqli_query($koneksi, "SELECT * FROM nilai ORDER BY id DESC");
        while($data = mysqli_fetch_array($tampil)) :

        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?=$data['nama'] ?></td>
            <td><?=$data['nim'] ?></td>
            <td><?=$data['kelas'] ?></td>
            <td><?=$data['nilai_pbo'] ?></td>
            <td><?=$data['nilai_k3'] ?></td>
            <td><?=$data['nilai_web'] ?></td>
            <td><?=$data['nilai_matematika'] ?></td>
           
            <td>
                <a href="a" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>">Ubah</a>
                <a href="a" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $no ?>">Hapus</a>
            </td>
        </tr>

<!-- Awal ModalModal ubah 1111 -->
<div class="modal fade modal-lg" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Form Tambah Nilai</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="aksi_crudun.php">
      <input type="hidden" name="id" value="<?= $data['id']?>">
      
      <div class="modal-body">


      
      <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama</label>
  <input type="text" class="form-control" name="tnama" value="<?= $data['nama'] ?>" placeholder="Maskukkan Nama Lengkap Anda!">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nim</label>
  <input type="number" class="form-control" name="tnim" value="<?= $data['nim'] ?>"placeholder="Masukkan NIM Anda">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Kelas</label>
  <input type="text" class="form-control" name="tkelas" value="<?= $data['kelas'] ?>" placeholder="Masukkan Kelas Paralel Anda">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nilai PBO</label>
  <input type="number" class="form-control" name="tnilai_pbo" value="<?= $data['nilai_pbo'] ?>" placeholder="Masukkan Nilai Mata Kuliah">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nilai K3</label>
  <input type="number" class="form-control" name="tnilai_k3" value="<?= $data['nilai_k3'] ?>" placeholder="Masukkan Nilai Mata Kuliah">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nilai WEB</label>
  <input type="number" class="form-control" name="tnilai_web" value="<?= $data['nilai_web'] ?>" placeholder="Masukkan Nilai Mata Kuliah">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nilai MTK</label>
  <input type="number" class="form-control" name="tnilai_matematika" value="<?= $data['nilai_matematika'] ?>" placeholder="Masukkan Nilai Mata Kuliah">
</div>


      

      
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="bubah">Ubah</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
       

      </div>
      </form>
    </div>
  </div>
</div>
   <!-- Akhir ModalModal ubah --> 


   <!-- Awal ModalModal Hapus -->
<div class="modal fade modal-lg" id="modalHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>Konfirmasi Hapus Data
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="aksi_crudun.php">
      <input type="hidden" name="id" value="<?= $data['id']?>">
      
      <div class="modal-body">
      
          <h5 class="text-center">Apakah anda yakin menghapus data ini ? <br>
          <span class="text-danger"><?= $data['nama'] ?> - <?= $data['nim'] ?></span>
        </h5>
      
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="bhapus">Hapus</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
       

      </div>
      </form>
    </div>
  </div>
</div>
   <!-- Akhir ModalModal Hapus --> 

      <?php endwhile; ?>
    </table>



    <div class=" modal fade" id="ModalUbah<?= $No ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Ubah Data</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
      <form method="POST" action="aksi_crudun.php">
      <div class="modal-body">
      
      <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama</label>
  <input type="text" class="form-control" name="tnama" placeholder="Maskukkan Nama Lengkap Anda!">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nim</label>
  <input type="number" class="form-control" name="tnim" placeholder="Masukkan NIM Anda">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Kelas</label>
  <input type="text" class="form-control" name="tkelas" placeholder="Masukkan Kelas Paralel Anda">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nilai PBO</label>
  <input type="number" class="form-control" name="tnilai_pbo" placeholder="Masukkan Nilai Mata Kuliah">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nilai K3</label>
  <input type="number" class="form-control" name="tnilai_k3" placeholder="Masukkan Nilai Mata Kuliah">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nilai WEB</label>
  <input type="number" class="form-control" name="tnilai_web" placeholder="Masukkan Nilai Mata Kuliah">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nilai MTK</label>
  <input type="number" class="form-control" name="tnilai_matematika" placeholder="Masukkan Nilai Mata Kuliah">
</div>


      

      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
       

      </div>
      </form>
    </div>
  </div>
</div>
   <!-- Akhir ModalModal tambah--> 
  </div>
</div>
  </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; e-learningPoliwangi</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bersiap untuk mengakhiri?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" di bawah ini jika anda ingin mengakhiri sesi!</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                    <a class="btn btn-primary" href="index.php">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>