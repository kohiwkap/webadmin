<?php
    include'dbconnect.php';
    $id = $_POST['food_id'];
    $food_name = $_POST['food_name'];
    $ingredients = $_POST['ingredients'];
    $step = $_POST['step'];
    $caloriefood = $_POST['caloriefood'];
    $food_type = $_POST['food_type'];

    $select_update = "UPDATE `food` SET `food_name` = '$food_name', `ingredients` = '$ingredients' , `step` = '$step',
     `caloriefood` = '$caloriefood', `food_type` = '$food_type' WHERE `food`.`food_id`= '$id'";
    $query_update = mysqli_query($conn,$select_update);

    echo json_encode('sussec');
?>
