<?php

require '../../../../config/config.php';

session_start();
if(!isset($_SESSION['role'])){
    header('Location: ../../../../views/admin/layouts/login_page.php');
}
$id = $_GET['id'];
mysqli_query($sql,'DELETE FROM guest WHERE id ='.$id);

return header('Location: ../../../../views/admin/layouts/table_page.php');

?>