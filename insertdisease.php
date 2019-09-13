<?php
    include'dbconnect.php';
    $name_disease = $_POST['name_disease'];
    $symptom = $_POST['symptom'];
    $direction = $_POST['direction'];
    $canfood = $_POST['canfood'];
    $cannotfood = $_POST['cannotfood'];

    $select_insert="INSERT INTO `disease` (`id_disease`, `name_disease`,`symptom`, `direction`, `canfood`, `cannotfood`) 
    VALUES (NULL, '$name_disease', '$symptom', '$direction', '$canfood', '$cannotfood');";

    $query_insert = mysqli_query($conn,$select_insert);
    echo json_encode('sussec');
?>
