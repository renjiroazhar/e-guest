<?php

session_start();

if (!isset($_SESSION['role'])) { //not logged in

    //redirect to homepage
    return header('Location: ../../views/admin/login_page.php');

} else { //logged in

}

?>