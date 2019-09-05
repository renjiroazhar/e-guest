<?php

    session_start();
    unset($_SESSION['role']);
    session_destroy();

    return header('Location: ../../../views/admin/login_page.php');
    
?>