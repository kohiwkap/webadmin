<?php
    include'dbconnect.php';
    $select_post = "SELECT * FROM `admin`";
    $query_post = mysqli_query($conn,$select_post);
    $result_array = array();
    while($row = mysqli_fetch_array($query_post)){
        array_push($result_array,$row);
    }
    echo json_encode($result_array);

?>