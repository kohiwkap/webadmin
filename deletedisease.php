<?php
    include'dbconnect.php';
    $uid = $_POST['uid'];

    $select_insert= "DELETE FROM `disease` WHERE `disease`.`id_disease` = $uid";
    $query_insert = mysqli_query($conn,$select_insert);
    echo json_encode('sussec');
?>
