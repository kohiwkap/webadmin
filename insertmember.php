<?php
    include'dbconnect.php';    
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $Birthday = $_POST['Birthday'];
    $blood = $_POST['blood'];
    $congenital_disease = $_POST['congenital_disease'];
    $Be_allergic = $_POST['Be_allergic'];
    $food_allergic = $_POST['food_allergic'];
    $select_insert="INSERT INTO `member` (`user_id`, `username`, `name`, `password`,
     `gender`, `Birthday`, `blood`, `congenital_disease`, `Be_allergic`, `food_allergic`) 
     VALUES (NULL, '$username', '$name', '$password', '$gender', '$Birthday', '$blood', '$congenital_disease', '$Be_allergic', '$food_allergic');";
    $query_insert = mysqli_query($conn,$select_insert);
    echo json_encode('sussec');
?>