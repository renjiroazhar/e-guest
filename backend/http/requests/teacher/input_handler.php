<?php

include '../../../../config.php';

$nip = htmlspecialchars($_POST['nip']);
$nama = htmlspecialchars($_POST['nama']);
$mapel = htmlspecialchars($_POST['mapel']);
$nomor_telepon = htmlspecialchars($_POST['nomor_telepon']);
$query = null;

  if($nip == NULL){
      $query = "INSERT INTO teacher (name, course, phone) VALUES (
          '$nama',
          '$mapel',
          '$nomor_telepon'
      )";    
  }

  if($mapel == NULL){
      $query = "INSERT INTO teacher (nip, name, phone) VALUES (
          '$nip',
          '$nama',
          '$nomor_telepon'
      )";
  }

  if($nomor_telepon == NULL){
      $query = "INSERT INTO teacher (nip, name, course) VALUES (
          '$nip',
          '$nama',
          '$mapel'
      )";
  }

  $query = "INSERT INTO teacher (nip, name, course, phone) VALUES (
    '$nip',
    '$nama',
    '$mapel',
    '$nomor_telepon'
  )";

echo PHP_EOL.$query;
$result_query = mysqli_query($sql,$query);

if($result_query){
    return header('Location: ../../../../views/admin/layouts/teacher_page.php');
    
}else{
    echo mysqli_error($sql);
}

?>