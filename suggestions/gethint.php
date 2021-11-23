<?php 

if (isset($_REQUEST["q"])) {

	$q = $_REQUEST["q"];
	$conn = new mysqli('localhost','root','','ajaxform');
	$dataselect = $conn->query("SELECT * FROM customers WHERE name LIKE '%%%$q%%%' ");

	if ($dataselect->num_rows>0) {
		while ($data = $dataselect->fetch_assoc()) {
			$data=$data['name'];
			echo $data.", ";
			}

		}else{
			echo "SORRY!";
		}
}


//
if (isset($_REQUEST["get_option"])) {

	$q = $_REQUEST["get_option"];
	$conn = new mysqli('localhost','root','','ajaxform');
	$dataselect = $conn->query("SELECT * FROM customers WHERE name='$q' ");

	if ($dataselect->num_rows>0) {
		while ($data = $dataselect->fetch_assoc()) {
			$data=$data['name'];
			
				echo "<option value='nupur'>".$data."</option>";

			 } }else{
			echo "SORRY!";
		}
}








?>