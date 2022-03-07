<?php 

include "../config/connection.php";

$date = $today_date;
$dateArray = date_parse_from_format('d/m/Y', $date);

$current_month = date('m');

$filter_value = $_REQUEST['filter'];

if($filter_value == 'Current Month'){
    
    $current_month = date('m');
}

if($filter_value == 'Last Month'){
    $current_month = date('m')-1;
}

// $current_month_booking = mysqli_query($conn,"SELECT DAYOFMONTH(status_changed_date) AS 'date', COUNT(*) AS 'value' FROM table_quotations WHERE month(status_changed_date) = '$current_month' AND quotation_status='Won' GROUP BY DAYOFMONTH(status_changed_date) ORDER BY 'date'");

$current_month_booking = mysqli_query($conn,"SELECT DATE_FORMAT(AAA.date_field, '%d-%m') as y,IFNULL(BBB.id,0) as won FROM (SELECT date_field
FROM
(
    SELECT date_field
    FROM
    (
        SELECT MAKEDATE(YEAR(NOW()),1) +
        INTERVAL ($current_month-1) MONTH +
        INTERVAL daynum DAY date_field
        FROM
        (
            SELECT t*10+u daynum FROM
            (SELECT 0 t UNION SELECT 1 UNION SELECT 2 UNION SELECT 3) A,
            (SELECT 0 u UNION SELECT 1 UNION SELECT 2 UNION SELECT 3
            UNION SELECT 4 UNION SELECT 5 UNION SELECT 6 UNION SELECT 7
            UNION SELECT 8 UNION SELECT 9) B ORDER BY daynum
        ) AA
    ) AA WHERE MONTH(date_field) = '$current_month'
) AAA) AAA LEFT JOIN (SELECT `status_changed_date` AS 'date_field', COUNT(`id`) as id FROM `table_quotations` WHERE quotation_status='Won' GROUP BY status_changed_date) BBB ON (AAA.date_field = BBB.date_field) ORDER BY AAA.date_field ASC");

while ($row = $current_month_booking->fetch_assoc()) {
	
    $result[] = $row; 
    
}

echo json_encode($result);


?>