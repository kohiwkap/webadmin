<?php
    include'dbconnect.php';
    $uid = $_POST['uid'];

    $select_insert= "DELETE FROM  `exercise` WHERE `exercise`.`exercise_id` = $uid";
    $query_insert = mysqli_query($conn,$select_insert);
    echo json_encode('sussec');
?>