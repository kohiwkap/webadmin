<?php
   include 'dbconnect.php';
 	$id = $_POST['id']; 
  	$select_post = "SELECT * FROM disease WHERE id_disease = '$id' ";
  	$query_post = mysqli_query($conn,$select_post);  	
  	$row = mysqli_fetch_array($query_post);
   echo json_encode($row);

?>