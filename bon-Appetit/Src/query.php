<?php

require './conn.php';

$sql = "SELECT * FROM item";

$result = mysqli_query($bonapetit_db,$sql) or die ("Bad Query: $sql");

	echo "<table border = '1'>";
	
	echo "<tr><td>Name</td><td>category</td><td>Description</td></tr>";
while($row = mysqli_fetch_assoc($result)){
	
	
}
echo "</table>";
?>