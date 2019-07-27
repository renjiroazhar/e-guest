<?php
 require 'backend/config.php';

 if($_GET['id'] == NULL){
     return header('Location: inputPage.php');
 }
 
 $id = $_GET['id'];
 $command = 'SELECT * FROM guests WHERE id = '.$id;
 $query = mysqli_query($sql,$command);
 $result = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/logo smkn 8 semarang.png"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<!--===============================================================================================-->

</head>
<body style="background-color: #666666;">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100-input-page">				
						<!-- Below input form -->
						<div class="container" style="padding: 10px 70px 70px 70px;">
							<p style="text-align: center; margin-bottom: 40px; font-size: 30px;"><B>Form Input Data Diri</B></p>
							<div class="row">
								<div class="col-sm-5">
									<form action="backend/update_handler.php" method="POST" >
                                        <input type="hidden" name="id" value="<?=$result['id']?>">
										<div class="form-group">
											<label for="exampleInputEmail1">Nama</label>
											<input name="nama" value="<?=$result['name']?>"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
											<small id="emailHelp" class="form-text text-muted">Nama Lengkap</small>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">NIK</label>
											<input type="number" name="nik" value="<?=$result['nik']?>"  class="form-control" id="NIK" aria-describedby="emailHelp" placeholder="">
											<small id="emailHelp" class="form-text text-muted">Nomor Induk Kependudukan</small>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Alamat Rumah</label>
											<input type="text" name="alamat_rumah" value="<?=$result['address']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
											<small id="emailHelp" class="form-text text-muted">Alamat</small>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Nama Instansi</label>
											<input type="text" value="<?=$result['company_name']?>" name="nama_instansi" class="form-control" id="exampleInputPassword1" placeholder="">
											<small class="form-text text-muted">(Optional)</small>
										</div>
										
								</div>
								<div class="col-sm-2">
								</div>
								<div class="col-sm-5">
										<div class="form-group">
											<label for="exampleInputEmail1">Guru/Staff yang dituju</label>
											<input type="text" value="<?=$result['intendeed_teacher']?>" name="guru" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
											<small id="emailHelp" class="form-text text-muted">Yang dituju</small>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">NO Telepon</label>
											<input type="number" name="no_telepon" value="<?=$result['phone']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="085226285034" maxlength="16">
											<small id="emailHelp" class="form-text text-muted">Masukan No telp</small>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Alamat Instansi</label>
											<input type="text" name="alamat_instansi" value="<?=$result['company_address']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
											<small id="emailHelp" class="form-text text-muted">(Optional)</small>
										</div>
										<div class="form-group">
											<label for="exampleFormControlTextarea1">Keperluan</label>
											<textarea class="form-control" name="keperluan" id="exampleFormControlTextarea1" rows="3"><?=$result['need']?></textarea>
										</div>
										
												<button  class="btn btn-success" style="margin-right: 70px; width: 100px; text-decoration: none;" type="submit" >Kirim</button>
									</form>
								</div>
							</div>
						</div>

						<!-- End -->

						<!-- Below button pop up and cancel -->
						<!-- Button Pop Kirim -->
						<!-- <a href="#popup">
							<button type="button" class="btn btn-success" style="margin-right: 70px; width: 100px; text-decoration: none;">Kirim</button>
						</a> -->
						<div id="popup">
							<div class="window">
								<a href="" class="close-button" title="Close" style="font-family: times new roman">X</a>
								<br>
								<br>
								<h1 style="font-family: times new roman">Pesan sudah terkirim</h1>
								<br>
								<br>
								<img src="images/clock.png">
								<br>
								<br>
								<p style="font-size: 18px; font-family: times new roman">Silahkan tunggu beberapa menit<br/>
									Hingga keperluan anda ditindaklanjuti<br/>oleh guru/karyawan yang dituju</br>
								</p>
								<br>
								<br>
								<p style="color: grey; font-size: 14px; font-family: times new roman">*Untuk menutup jendela ini, klik tombol X di kanan atas</p>
							</div>
						</div>
						
						<!-- End -->

					</div>
				</div>
			</div>
		</div>

		<!--===============================================================================================-->
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="js/main.js"></script>

	</body>
	</html>