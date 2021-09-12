<?php
$conn = new mysqli('localhost', 'root', '', 'ajaxform');
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
if(mysqli_query($conn, "INSERT INTO customers(name, email, mobile) VALUES('" . $name . "', '" . $email . "', '" . $mobile . "')")) {

	echo "<img src='check.png'>";
} else {
	//echo "Error: " . $sql . "" . mysqli_error($conn);
	echo "Please Try Agine";
}
mysqli_close($conn);
?>