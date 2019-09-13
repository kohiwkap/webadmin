<?php
    include'dbconnect.php';    
    $exercise_name = $_POST['exercise_name'];
    $exercise_time = $_POST['exercise_time'];
    $exercise_cal = $_POST['exercise_cal'];
    $exercise_type = $_POST['exercise_type'];   

    $select_insert="INSERT INTO `exercise` (`exercise_id`, `exercise_name`, `exercise_time`, `exercise_cal`, `exercise_type`) VALUES
     (NULL, '$exercise_name', '$exercise_time', '$exercise_cal', '$exercise_type');";
    $query_insert = mysqli_query($conn,$select_insert);
    echo json_encode('sussec');
?>