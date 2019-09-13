<?php
    include'dbconnect.php';    
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $select_insert="INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES (NULL, '$name', '$username', '$password');";
    $query_insert = mysqli_query($conn,$select_insert);
    echo json_encode('sussec');
?>