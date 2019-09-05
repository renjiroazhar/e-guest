<?php

include '../../../../config/config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "UPDATE admins SET
            username = '$username', 
            password = '$password'
            WHERE id =".$_POST['id'];

$result_query = mysqli_query($sql,$query);

if($result_query){
    return header('Location: ../../../../views/admin/layouts/admin_page.php');
}else{
    echo mysqli_error($sql);
}

?>