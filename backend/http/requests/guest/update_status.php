<?php

require '../../../../config.php';
date_default_timezone_set("Asia/Jakarta");
$date = date("Y/m/d H:i:s");

$id = $_GET['id'];
$keluar = 'UPDATE guest SET status = 1, exit_time = "'.$date.'"  WHERE id = '.$id;
$query = mysqli_query($sql, $keluar);

if($query){
    header('Location: ../../../../views/users/layouts/confirm_page.php');
}else{
    echo mysqli_error($sql);
}

?>
