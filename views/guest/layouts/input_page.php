<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Diri</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../../assets/img/logo smkn 8 semarang.png"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../../vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../../vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../../assets/css/main.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" href="../../../assets/css/style.css" type="text/css" />
	<!--===============================================================================================-->
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

</head>
<body style="background-color: #666666;">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100-input-page">				
						<!-- Below input form -->
						<div class="container" style="padding: 10px 70px 50px 70px;">
							<p style="text-align: center; margin: 30px 0 20px 0; font-size: 30px;"><B>Lengkapi Data Diri</B></p>
							<div class="row">
								<div class="col-sm-5">
									<form action="../../../backend/http/requests/users/input_handler.php" method="POST" >
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
											<label for="teachers">Guru/Staff yang dituju</label>
											<input id="teachers" type="text" required name="guru" class="form-control" aria-describedby="emailHelp" placeholder="">
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
										<button class="btn btn-success m-t-20" style="margin: 20px 20px 0px 0px; width: 100px; text-decoration: none;" type="submit" >Kirim</button>
									</form>
									<a href="../index.php">
									<button class="btn btn-danger m-t-20" style="margin: 20px 70px 0px 0px; width: 100px; text-decoration: none;">Kembali</button>
									</a>
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
								<img src="../../../assets/img/clock.png">
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

		
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script>
		$(function() {
			$("#teachers").autocomplete({
				source: "../../../backend/http/controllers/autocomplete_search.php",
				select: function( event, ui ) {
					event.preventDefault();
					$("#teachers").val(ui.item.id);
				}
			});
		});
		</script>
		<?php
		if(isset($_POST['submit'])){ 
			$teachers = $_POST['teachers']; 
			echo 'Teachers: '.$teachers;
		}
		?>
		<!--===============================================================================================-->
		<script src="../../../vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="../../../vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="../../../vendor/bootstrap/js/popper.js"></script>
		<script src="../../../vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="../../../vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="../../../vendor/daterangepicker/moment.min.js"></script>
		<script src="../../../vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="../../../vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="../../../assets/js/main.js"></script>

	</body>
	</html>