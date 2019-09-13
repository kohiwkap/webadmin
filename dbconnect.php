<?php
    $conn = mysqli_connect("localhost","root","","eatforhealth");
        if($conn->connect_error){
            die("Connection failed: " .$conn->connect_error);
        }
        $conn->set_charset("utf8");
?>
