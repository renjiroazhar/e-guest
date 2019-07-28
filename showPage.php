<?php
include 'backend/config.php';

session_start();
if(!isset($_SESSION['role'])){
    header('Location: login.php');
}


$res = mysqli_query($sql,'SELECT * FROM guests');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Guest</title>
</head>
<body>
    <a href="inputPage.php">Buat Data</a>
    <table border="1">
        <thead>
            <tr>
                <td>No.</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Nomor Telepon</td>
                <td>NIK</td>
                <td>Kebutuhan</td>
                <td>Guru Berkenan</td>
                <td>Nama Perusahaan</td>
                <td>Alamat Perusahaan</td>
                <td>Dibuat</td>
                <td>Diedit</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; while($result = mysqli_fetch_assoc($res)):?>
                <tr>
                    <td><?=$i?></td>
                    <td><?=$result['name']?></td>
                    <td><?=$result['address']?></td>
                    <td><?=$result['phone']?></td>
                    <td><?=$result['nik']?></td>
                    <td><?=$result['need']?></td>
                    <td><?=$result['intendeed_teacher']?></td>
                    <td><?=$result['company_name']?></td>
                    <td><?=$result['company_address']?></td>
                    <td><?=$result['created_at']?></td>
                    <td><?=$result['updated_at']?></td>
                    <td>
                        <a href="editPage.php?id=<?=$result['id']?>">Edit</a>
                        <a href="deletePage.php?id=<?=$result['id']?>">Delete</a>
                    </td>
                </tr>
            <?php $i++; endwhile;?>
        </tbody>
    </table>
</body>
</html>