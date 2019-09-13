<?php
   include 'dbconnect.php';
 	$id = $_POST['id']; 
  	$select_post = "SELECT * FROM `food` WHERE food_id = '$id' ";
  	$query_post = mysqli_query($conn,$select_post);  	
  	$row = mysqli_fetch_array($query_post);
   echo json_encode($row);

?>