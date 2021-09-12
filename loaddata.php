
<?php

$conn = new mysqli('localhost', 'root', '', 'ajaxform');



$selectdata = " SELECT * FROM customers";

$query = mysqli_query($conn,$selectdata);

while($row = mysqli_fetch_array($query)){

 echo "<p>".$row['mobile']."</p>";
}


?>