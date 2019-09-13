<?php
include'dbconnect.php';
$food_name = $_POST['food_name'];
$ingredients = $_POST['ingredients'];
$step = $_POST['step'];
$caloriefood = $_POST['caloriefood'];
$food_type = $_POST['food_type'];

$select_insert="INSERT INTO `food` (`food_id`, `food_name`, `ingredients`,
 `step`, `caloriefood`, `food_type`) VALUES (NULL, '$food_name', '$ingredients', 
 '$step', '$caloriefood', '$food_type');";

$query_insert = mysqli_query($conn,$select_insert);
    echo json_encode('sussec');
?>
