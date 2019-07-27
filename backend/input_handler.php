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

$query = "INSERT INTO guests (name,address,phone,nik,need,intendeed_teacher,company_name,company_address) VALUES (
    '$nama',
    '$alamat_rumah',
    '$nomor_telepon',
    '$nik',
    '$keperluan',
    '$guru',
    '$nama_instansi',
    '$alamat_instansi'
)";

if($nama_instansi == NULL ){
    
$query = "INSERT INTO guests (name,address,phone,nik,need,intendeed_teacher,company_name,company_address) VALUES (
    '$nama',
    '$alamat_rumah',
    '$nomor_telepon',
    '$nik',
    '$keperluan',
    '$guru',
    '$alamat_instansi'
)";    
}
if($alamat_instansi == NULL){
    
$query = "INSERT INTO guests (name,address,phone,nik,need,intendeed_teacher,company_name,company_address) VALUES (
    '$nama',
    '$alamat_rumah',
    '$nomor_telepon',
    '$nik',
    '$keperluan',
    '$guru',
    '$nama_instansi'
)";

}

$result_query = mysqli_query($sql,$query);

if($result_query){
    return header('Location: ../inputPage.php');
}else{
    echo mysqli_error($sql);
}