<?php
    if(isset(($_POST['submit']))){
        
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if($user == 'Admin' && $pass == 'RPL.smkn8'){
            
            session_start();
            $_SESSION['role'] = 'admin';
            return header('Location: showPage.php');
            
            
        }else{
            echo "<script>alert('Username atau Password salah!')</script>";
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="submit" value="Kirim">
    </form>
</body>
</html>

