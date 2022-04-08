<?php

include '../../../config/config.php';
include '../../../backend/http/controllers/validation.php';

$res = mysqli_query($sql,'SELECT * FROM guest');

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daftar Tamu</title>
  
	<!-- Website Icon -->
	<link rel="icon" type="image/png" href="../../../assets/img/logo smkn 8 semarang.png"/>

  <!-- Custom fonts for this template-->
  <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../../assets/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">e-Guest Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Cari..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
     
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <div style="margin: 0.25rem 1.5rem;">
            <p><b>Logged in as:</b></p>
            <p id="username"></p>
            <p id="password" class="hidetext"></p>
            <a href="./admin_page.php">
              <center>
                <p>Edit</p>
              </center>
            </a>
          </div>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" style="color: red;">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

     <!-- Sidebar -->
     <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./statistic_page.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Statistik</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-table"></i>
          <span>Daftar Tamu</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./teacher_page.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Daftar Guru</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./admin_page.php">
          <i class="fas fa-user-cog"></i>
          <span>Daftar Admin</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Daftar Tamu</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
              Daftar Tamu
            <a href="" data-toggle="modal" data-target="#addData" style="margin-left: 80%">
              <button type="button" class="btn btn-primary" style="color: #ffffff; background-color: #007bff">
                Tambah +
              </button>
            </a>
            </div>
          <div class="card-body">
            <div class="table-responsive">
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
                    <th>Jam Keluar</th>
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
                            <td><?=$result['exit_time']?></td>
                            <td align="center">
                                <a href="#" onclick='checkData(<?php echo json_encode($result); ?>);' data-toggle="modal" data-target="#editData"><i class="fas fa-edit" style="color: #007bff;"></i></a>
                                <a href="../../../backend/http/requests/users/delete_handler.php?id=<?=$result['id']?>"><i class="fas fa-trash" style="color: #f0555a;"></i></a>
                                <a href="./mail_page.php?id=<?=$result['id']?>" target="_blank"><i class="fas fa-print" style="color: #00ae69;"></i></a>
                            </td>
                        </tr>
                    <?php $i++; endwhile;?>
                </tbody>
              </table>
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

  <!-- Add Data Modal -->
  <div id="addData" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="padding: 20px 50px 20px 50px; background-image: url('../../../assets/img/bg_01.jpg')">
				<div class="row">
	 			  <div class="col-sm-5">
           <form action="../../../backend/http/requests/users/input_handler.php" method="POST">
								<div class="form-group">
										<label for="exampleInputEmail1">Nama</label>
										<input required name="nama" type="text" class="form-control" aria-describedby="emailHelp" placeholder="">
										<small class="form-text text-muted">Nama Lengkap Anda</small>
								</div>
								<div class="form-group">
										<label for="exampleInputEmail1">Alamat Rumah</label>
										<textarea class="form-control" name="alamat_rumah" id="exampleFormControlTextarea1" rows="3"></textarea>
										<small class="form-text text-muted">(Opsional)</small>
								</div>
								<div class="form-group">
										<label for="exampleInputEmail1">NO Telepon</label>
										<input type="number" required name="no_telepon" class="form-control" aria-describedby="emailHelp" placeholder="" maxlength="16">
										<small class="form-text text-muted">Masukkan No Telepon Anda</small>
								</div>
								<div class="form-group">
										<label for="exampleInputEmail1">Guru/Staff yang dituju</label>
										<input type="text" required name="guru" class="form-control" aria-describedby="emailHelp" placeholder="">
									  <small class="form-text text-muted">Orang Yang Anda Tuju</small>
						  	</div>
						</div>

						<div class="col-sm-2">
						</div>

		 				<div class="col-sm-5">
								<div class="form-group">
										<label for="exampleFormControlTextarea1">Keperluan</label>
										<textarea class="form-control" required name="keperluan" id="exampleFormControlTextarea1" rows="3"></textarea>
										<small class="form-text text-muted">Alasan/Keperluan Anda</small>
								</div>
								<div class="form-group">
										<label for="exampleInputPassword1">Nama Instansi</label>
										<input type="text" required name="nama_instansi" class="form-control" id="exampleInputPassword1" placeholder="">
										<small class="form-text text-muted">Nama Instansi Anda</small>
								</div>
								<div class="form-group">
										<label for="exampleInputEmail1">Alamat Instansi</label>
										<textarea class="form-control" required name="alamat_instansi" id="exampleFormControlTextarea1" rows="3"></textarea>
										<small class="form-text text-muted">Alamat Instansi Anda</small>
								</div>
								<button class="btn btn-success m-t-20" style="margin: 20px 20px 15px 0px; width: 100px; text-decoration: none;" type="submit" >Kirim</button>
								</form>
	 	  				<button class="btn btn-danger m-t-20" style="margin: 20px 70px 15px 0px; width: 100px; text-decoration: none;" data-dismiss="modal">Kembali</button>
						</div>
					</div>
				</div>
      </div>
    </div>
  </div>

  <!-- Edit Data Modal -->
  <div id="editData" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Edit Data Diri</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="padding: 20px 50px 20px 50px; background-image: url('../../../assets/img/bg_01.jpg')">
				<div class="row">
	 			  <div class="col-sm-5">
             <form action="../../../backend/http/requests/users/update_handler.php" method="POST">
              <input type="hidden" name="id" id="id_edit" value="<?=$result['id']?>">
			  				<div class="form-group">
		  							<label for="exampleInputEmail1">Nama</label>
										<input type="text" required name="nama" id="nama_edit" value="<?=$result['name']?>" class="form-control" aria-describedby="emailHelp" placeholder="">
										<small class="form-text text-muted">Nama Lengkap Anda</small>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Alamat Rumah</label>
										<textarea class="form-control" name="alamat_rumah" id="alamatRumah_edit" rows="3"><?=$result['address']?></textarea>
										<small class="form-text text-muted">(Opsional)</small>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">NO Telepon</label>
										<input type="number" required name="no_telepon" id="noTelepon_edit" value="<?=$result['phone']?>" class="form-control" aria-describedby="emailHelp" placeholder="" maxlength="16">
										<small class="form-text text-muted">Masukan No Telepon Anda</small>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Guru/Staff yang dituju</label>
										<input type="text" required name="guru" id="guru_edit" value="<?=$result['intendeed_teacher']?>" class="form-control" aria-describedby="emailHelp" placeholder="">
										<small class="form-text text-muted">Orang Yang Anda Tuju</small>
									</div>
							</div>

							<div class="col-sm-2">
							</div>

							<div class="col-sm-5">
									<div class="form-group">
										<label for="exampleFormControlTextarea1">Keperluan</label>
										<textarea class="form-control" required name="keperluan" id="keperluan_edit" rows="3"><?=$result['need']?></textarea>
										<small class="form-text text-muted">Alasan/Keperluan Anda</small>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Nama Instansi</label>
										<input type="text" required name="nama_instansi" id="namaInstansi_edit" value="<?=$result['company_name']?>" class="form-control" id="exampleInputPassword1" placeholder="">
										<small class="form-text text-muted">Nama Instansi Anda</small>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Alamat Instansi</label>
										<textarea class="form-control" required name="alamat_instansi" id="alamatInstansi_edit" rows="3"><?=$result['company_address']?></textarea>
										<small class="form-text text-muted">Alamat Instansi Anda</small>
									</div>
									<button class="btn btn-success m-t-20" style="margin: 20px 20px 15px 0px; width: 100px; text-decoration: none;" type="submit" >Kirim</button>
								</form>
	 	  					<button class="btn btn-danger m-t-20" style="margin: 20px 70px 15px 0px; width: 100px; text-decoration: none;" data-dismiss="modal">Kembali</button>
						</div>
					</div>
				</div>
      </div>
    </div>
  </div>

  <!-- Logout Modal -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ingin keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Keluar" jika ingin mengakhiri sesi Anda.</div>
        <div class="modal-footer">
          <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-danger" href="../../../backend/http/controllers/logout.php" onclick="sessionStorage.clear()">
            Keluar
          </a>
        </div>
      </div>
    </div>
  </div>

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
  
  <!-- Get data -->
  <script>
    function checkData(guests) {
        const {id, name, address, phone, intendeed_teacher, need, company_name, company_address } = guests;

        const idInput = document.getElementById('id_edit');
        const nameInput = document.getElementById('nama_edit')
        const addressInput =document.getElementById('alamatRumah_edit')
        const phoneInput = document.getElementById('noTelepon_edit')
        const intendeed_teacherInput = document.getElementById('guru_edit')
        const needInput =document.getElementById('keperluan_edit')
        const company_nameInput = document.getElementById('namaInstansi_edit')
        const company_addressInput = document.getElementById('alamatInstansi_edit')

        idInput.value = id;
        nameInput.value = name;
        addressInput.value = address;
        phoneInput.value = phone;
        intendeed_teacherInput.value = intendeed_teacher;
        needInput.value = need;
        company_nameInput.value = company_name;
        company_addressInput.value = company_address
        
        // const data = {
        //   nameInput: name.value,
        //   addressInput: address.value,
        //   phoneInput: phone.value,
        //   intendeed_teacherInput: intendeed_teacher.value,
        //   needInput: need.value,
        //   company_nameInput: company_name.value,
        //   company_addressInput: company_address.value
        // }
        // console.log(data)
    }
  </script>
  
  <!-- Get data from session -->
  <script type="text/javascript">
    const username = sessionStorage.getItem("username");
    const password = sessionStorage.getItem("password");

    const usernameP = document.getElementById('username')
    const passwordP = document.getElementById('password')

    usernameP.textContent = username
    passwordP.textContent = password
  </script>

</body>

</html>
