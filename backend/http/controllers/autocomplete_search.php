<?php

    $user = 'root';
    $pass = '';
    $db = 'e-guest';
    $local = 'localhost';

    //connect with the database
    $database = new mysqli($user,$pass,$db,$local);

    //get search term
    $searchTerm = $_GET['term'];

    //get matched data from skills table
    $query = $database->query("SELECT * FROM teacher WHERE name LIKE '%".$searchTerm."%' ORDER BY id ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['title'];
    }

    //return json data
    echo json_encode($data);

?>