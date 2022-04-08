<?php

include '../../../config/config.php';

$res = mysqli_query($sql,'SELECT * FROM guest WHERE status=0');

?>

 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User - Konfirmasi</title>

  <!-- Custom fonts for this template-->
  <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Website Icon -->
  <link rel="icon" type="image/png" href="../../../assets/img/logo smkn 8 semarang.png"/>

  <!-- Page level plugin CSS-->
  <link href="../../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../../assets/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top bg-color">

  <div id="wrapper">

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Daftar Tamu
            <a href="../index.php" style="margin-left: 85%;">Kembali</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
            <div style="height: 495px; overflow: auto;">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Keperluan</th>
                    <th>Guru/Staff Tujuan</th>
                    <th>Nama Instansi</th>
                    <th>Alamat Instansi</th>
                    <th>Jam Masuk</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i = 1; while($result = mysqli_fetch_assoc($res)):?>
                        <tr>
                            <td><?=$i?></td>
                            <td><?=$result['name']?></td>
                            <td><?=$result['address']?></td>
                            <td><?=$result['phone']?></td>
                            <td><?=$result['need']?></td>
                            <td><?=$result['intendeed_teacher']?></td>
                            <td><?=$result['company_name']?></td>
                            <td><?=$result['company_address']?></td>
                            <td><?=$result['created_at']?></td>
                            <td>
                                <a href="../../../backend/http/requests/users/update_status.php?id=<?=$result['id']?>">Keluar</a>
                            </td>
                        </tr>
                    <?php $i++; endwhile;?>
                </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © RPL SMK Negeri 8 Semarang 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="../../../vendor/jquery/jquery.min.js"></script>
  <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../../../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../../../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../../assets/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../../../assets/js/demo/datatables-demo.js"></script>

</body>

</html>
