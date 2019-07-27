<?php

include 'config.php';

$nama = $_POST['nama'];
$alamat_rumah = $_POST['alamat_rumah'];
$nomor_telepon = $_POST['no_telepon'];
$nik = $_POST['nik'];
$keperluan = $_POST['keperluan'];
$guru = $_POST['guru'];
$nama_instansi = $_POST['nama_instansi'];
$alamat_instansi = $_POST['alamat_instansi'];

$query = "UPDATE guests SET name = '$nama', 
          address = '$alamat_rumah',
          phone = '$nomor_telepon',
          nik = '$nik',
          need = '$keperluan',
          intendeed_teacher = '$guru',
          company_name = '$nama_instansi',
          company_address = '$alamat_instansi'
          WHERE id =".$_POST['id'] ;


if($nama_instansi == NULL ){
    $query = "UPDATE guests SET 
          name = '$nama',
                    address = '$alamat_rumah',
          phone = '$nomor_telepon',
          nik = '$nik',
          need = '$keperluan',
          intendeed_teacher = '$guru',
          company_address = '$alamat_instansi'
          WHERE id =".$_POST['id'] ;
}
if($alamat_instansi == NULL){
    $query = "UPDATE guests SET 
          name = '$nama',

                    address = '$alamat_rumah',
          phone = '$nomor_telepon',
          nik = '$nik',
          need = '$keperluan',
          intendeed_teacher = '$guru',
          company_name = '$nama_instansi'
          WHERE id =".$_POST['id'] ;

}

$result_query = mysqli_query($sql,$query);

if($result_query){
    return header('Location: ../inputPage.php');
}else{
    echo mysqli_error($sql);
}