<?php

 require '../../../config/config.php';
 
 $id = $_GET['id'];

 $command = 'SELECT * FROM guest WHERE id = '.$id;
 $query = mysqli_query($sql,$command);
 $result = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Website Icon -->
	<link rel="icon" type="image/png" href="../../../assets/img/logo smkn 8 semarang.png"/>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	
</head>
<body onload="window.print()">
	<div class="container " style="padding: 0 60px 20px 60px; margin-top: 40px; margin-bottom: 70px;">
		<br>
		<table width="100%">
			<tr>
				<td width="25" align="center"><img src="../../../assets/img/logo smkn 8 semarang.png" width="150%" style="padding-bottom: 15px;"></td>
				<td width="50" align="center">
					<div style="line-height: 0.5">
					<p style="text-align: center;font-family: times new roman; font-size: 18px">PEMERINTAH PROVINSI JAWA TENGAH</p>
					<p style="text-align: center;font-family: times new roman; font-size: 18px">DINAS PENDIDIKAN DAN KEBUDAYAAN</p>
				</div>
					<p style="text-align: center;font-family: times new roman; font-size: 20px"><B>SEKOLAH MENENGAH KEJURUAN NEGERI 8 SEMARANG</B></p>
					<div style="line-height: 0.5">
					<p style="text-align: center;">Jalan Pandanaran II Nomor 12 Kota Semarang Kode Pos 50243 Telepon 024-8312190</p>
					<p style="text-align: center;">Faksimile 024-8440321 Surat Elektronik <u>
					smkn8.semarang@yahoo.co.id</u></p>
					</div>
				</td>
				<td width="25" align="center"></td>
			</tr>
		</table>

		<hr style="height: 3px; color: #000000; background-color: #000000;">
		
		<div class="line3" style="line-height: .8;">
			<p style="text-align: left; margin-top: 70px;">Nomor : 05/SPK-3/VI/2016</p>
			<p style="text-align: left;">Perihal : Permohonan ijin kunjungan</p>
		</div>
		<div class="line4" style="line-height: .6;">
			<p style="text-align: left; margin-top: 30px;">Kepada</p>
			<p style="text-align: left;">Kepala Sekolah</p>
			<p style="text-align: left;">PT <?=$result['company_name']?></p>
			<p style="text-align: left;">Jalan <?=$result['company_address']?></p>
			<p style="text-align: left;">Semarang</p>
		</div>
		<p style="text-align: left; margin-top: 130px;">Dengan hormat,</p>
		<p style="text-align: justify;">Dalam rangka kegiatan memenuhi uji kompetensi siswa – siswi Sekolah Menengah Kejuruan khususnya di jurusan teknik industri kelas XI, kami selaku pihak sekolah bermaksud untuk memohon ijin untuk mengunjungi Pabrik PT. Karya Megah Food and Beverage. Kegiatan ini rencananya akan dilaksanakan pada:</p>

		<div style="line-height: 1.1;">
			<p>Hari/ Tanggal       : <?=date('D, m F Y',strtotime($result['created_at']))?></p>
			<p>Waktu               : <?=date('H:i',strtotime($result['created_at']))?></p>
		</div>

		<p style="text-align: justify;">Kegiatan kunjungan ini meliputi melihat kegiatan produksi dan memperagakan serta mencoba alat – alat kerja dengan didampingi instruktur dari guru pembimbing dan diawasi oleh pihak perusahaan dengan sebelumnya ada kuliah umum singkat mengenai profil perusahaan, kegiatan produksi, dan K3 perusahaan dari pihak perusahaan yang berkaitan.</P>
			<p style="text-align: justify;">Demikian surat permohonan ijin kami, atas perhatian dan kerja sama Bapak/ Ibu kami sampaikan terima kasih.</p>
			<div style="line-height: 1.1; margin-top: 220px; float: right;">
				<p style="text-align: center;">Ditetapkan di Semarang</p>
				<p style="text-align: center;">Pada tanggal : <?=date('d-m-Y',strtotime($result['created_at']))?></p>
				<p style="text-align: center; margin-bottom: 110px">Kepala Sekolah</p>
				<p style="text-align: center;"><U>Drs. LULUK WIBOWO, S.S.T.,M.T.</U></p>
				<P style="text-align: center;">Pembina</P>
				<p style="text-align: center;">NIP 19670408 199702 1 002</p>
			</div>
		</div>

	</form>
</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>