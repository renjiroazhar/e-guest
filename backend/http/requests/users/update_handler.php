<?php

include '../../../../config/config.php';

$nama = $_POST['nama'];
$alamat_rumah = $_POST['alamat_rumah'];
$nomor_telepon = $_POST['no_telepon'];
$keperluan = $_POST['keperluan'];
$guru = $_POST['guru'];
$nama_instansi = $_POST['nama_instansi'];
$alamat_instansi = $_POST['alamat_instansi'];

print_r($_POST);

$query = "UPDATE guest SET
            name = '$nama', 
            address = '$alamat_rumah',
            phone = '$nomor_telepon',
            need = '$keperluan',
            intendeed_teacher = '$guru',
            company_name = '$nama_instansi',
            company_address = '$alamat_instansi'
            WHERE id =".$_POST['id'];

    if($alamat_rumah == NULL ){
        $query = "UPDATE guest SET 
            name = '$nama',
            phone = '$nomor_telepon',
            need = '$keperluan',
            intendeed_teacher = '$guru',
            company_name = '$nama_instansi',
            company_address = '$alamat_instansi'
            WHERE id =".$_POST['id'];
    };

$result_query = mysqli_query($sql,$query);

if($result_query){
    return header('Location: ../../../../views/admin/layouts/table_page.php');
}else{
    echo mysqli_error($sql);
}

?>