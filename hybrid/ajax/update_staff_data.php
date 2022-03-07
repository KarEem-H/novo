<?php 

include ("../config/connection.php");

$fieldname  = $_REQUEST['name'];
$value=$_REQUEST['value'];
$id=$_REQUEST['pk'];


$sql = mysqli_query($conn,"UPDATE table_staffs SET `$fieldname` = '$value' WHERE id = '$id'");


?>