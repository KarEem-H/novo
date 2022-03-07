<?php 

include "../config/connection.php";

$sql = mysqli_query($conn,"SELECT * FROM `table_staffs`");

while ($row = $sql->fetch_assoc()) {
	
    $result[] = $row; 
    
}

echo json_encode($result);




?>