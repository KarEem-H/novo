<?php 

include "../config/connection.php";

$date = $today_date;
$dateArray = date_parse_from_format('d/m/Y', $date);

$current_month = $dateArray[month];

$current_month_booking = mysqli_query($conn,"SELECT DAYOFMONTH(booking_date) AS 'elapsed', COUNT(*) AS 'value' FROM table_booking WHERE booking_status !='Cancelled' AND month(booking_date) = '$current_month' GROUP BY DAYOFMONTH(booking_date) ORDER BY 'elapsed'");

while ($row = $current_month_booking->fetch_assoc()) {
	
    $result[] = $row; 
    
}

echo json_encode($result);


?>