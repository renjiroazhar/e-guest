<?php

include '../../../../config.php';

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

$query = "INSERT INTO admin (username, password) VALUES (
    '$username',
    '$password'
)";    

$result_query = mysqli_query($sql,$query);

if($result_query){
    return header('Location: ../../../../views/admin/layouts/admin_page.php');
    
}else{
    echo mysqli_error($sql);
}

?>