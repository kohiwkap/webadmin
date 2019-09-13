<?php
    include'dbconnect.php';
    $id = $_POST['id_disease'];
    $name_disease = $_POST['name_disease'];
    $symptom = $_POST['symptom'];
    $direction = $_POST['direction'];
    $canfood = $_POST['canfood'];
    $cannotfood = $_POST['cannotfood'];

    $select_update = "UPDATE `disease` SET `name_disease` = '$name_disease', `symptom` = '$symptom' , `direction` = '$direction',
     `canfood` = '$canfood', `cannotfood` = '$cannotfood' WHERE `disease`.`id_disease`= '$id'";
    $query_update = mysqli_query($conn,$select_update);

    echo json_encode('sussec');
?>
