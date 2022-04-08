<?php

  if(count($_POST)>0) {
    $conn = mysqli_connect("localhost", "root", "", "e-guest");
    $result = mysqli_query($conn,"SELECT * FROM admin WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
    $count  = mysqli_num_rows($result);
    if ($count==0) {
      return header('Location: login_page.php?msg=1');
    } else {
      session_start();
      $_SESSION['role'] = 'admin';
      return header('Location: ./index.php');
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

   <!-- Website Icon -->
   <link rel="icon" type="image" href="../../assets/img/logo smkn 8 semarang.png"/>

  <!-- Custom styles for this template-->
  <link rel="stylesheet" type="text/css" href="../../assets/css/sb-admin.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/util.css">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Masuk</div>
      <div class="card-body">
        <center>
            <div class=" p-t-10 p-b-40">
                <img src="../../assets/img/logo smkn 8 semarang.png" alt="..." style="height: 150px; width: 150px;">
            </div>
        </center>
        <form action="" method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input id="username" type="text" name="username" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
              <label for="inputEmail">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input id="password" type="password" name="password" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <input type="checkbox" onclick="myFunction()"> Show Password
          <div class="m-t-15" style="color: #FF0000; text-align: center; width: 100%">
            <?php if(isset($_GET['msg'])) { echo 'Username atau password yang Anda masukkan salah!'; } ?>
          </div>

          <input class="btn btn-primary btn-block m-t-35" type="submit" name="submit" onclick="saveData()" value="Masuk">
        </form>
      </div>
    </div>
  </div>

  
  <!-- An function to show password -->
  <script>
    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>

  <script type="text/javascript"> 
    function saveData() {
      var username = document.getElementById('username');
      var password = document.getElementById('password');
      sessionStorage.setItem('username', username.value);
      sessionStorage.setItem('password', password.value);
      return true;
    } 
  </script>

  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>


