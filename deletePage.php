<?php

require 'backend/config.php';

session_start();
if(!isset($_SESSION['role'])){
    header('Location: login.php');
}
$id = $_GET['id'];
mysqli_query($sql,'DELETE FROM guests WHERE id ='.$id);

return header('Location: showPage.php');

?>