<?php

require 'backend/config.php';
$id = $_GET['id'];
mysqli_query($sql,'DELETE FROM guests WHERE id ='.$id);

return header('Location: showPage.php');