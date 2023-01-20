<?php

require '../../../../config.php';

session_start();
if(!isset($_SESSION['role'])){
    header('Location: ../../../../views/admin/layouts/login_page.php');
}
$id = $_GET['id'];
mysqli_query($sql,'DELETE FROM teacher WHERE id ='.$id);

return header('Location: ../../../../views/admin/layouts/teacher_page.php');

?>