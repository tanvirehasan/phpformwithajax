<?php 

// Database connection
$conn = new mysqli('localhost', 'root', '', 'ajaxform');

// Insert data Query
$sql = "INSERT INTO formdata ( name, mobile, address, city )
VALUES ( '".$_POST['name']."' , '".$_POST['mobile']."', '".$_POST['address']."', '".$_POST['city']."')";

if (mysqli_query($conn,$sql)) {
      echo "Insert your form record successfully";
} 
?>