<?php

include '../../../../config/config.php';

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$mapel = $_POST['mapel'];
$nomor_telepon = $_POST['nomor_telepon'];

$query = "UPDATE teacher SET
            nip = '$nip', 
            name = '$nama',
            course = '$mapel',
            phone = '$nomor_telepon'
            WHERE id =".$_POST['id'];

    if($nip == NULL){
        $query = "UPDATE teacher SET 
            name = '$nama',
            course = '$mapel',
            phone = '$nomor_telepon'
            WHERE id =".$_POST['id'];
    }
    
    if($mapel == NULL){
        $query = "UPDATE teacher SET 
            nip = '$nip',
            name = '$nama',
            phone = '$nomor_telepon'
            WHERE id =".$_POST['id'];
    }

    if($nomor_telepon == NULL){
        $query = "UPDATE teacher SET 
            nip = '$nip',
            name = '$nama',
            course ='$mapel'
            WHERE id =".$_POST['id'];
    }

$result_query = mysqli_query($sql,$query);

if($result_query){
    return header('Location: ../../../../views/admin/layouts/teacher_page.php');
}else{
    echo mysqli_error($sql);
}

?>