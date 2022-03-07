<?php
session_start();

include "../config/connection.php";

// store session data
if (isset($_SESSION['ADMIN_ID']['NAME'])){
    
    $_SESSION['ADMIN_ID']['NAME'] = $_SESSION['ADMIN_ID']['NAME']; 

}

echo $_SESSION['ADMIN_ID']['NAME'];

// $db = array();

// $get_past_bookings = mysqli_query($conn,"SELECT job_ref,cust_id,cleaning_date,cleaning_time FROM table_damac_booking WHERE STR_TO_DATE(cleaning_date,'%Y-%m-%d') = '$today_date' AND booking_status ='Booked' ORDER BY id desc");

// while ($row = mysqli_fetch_array($get_upcoming_service, MYSQLI_ASSOC)) {
    
//     $myrow[] = $row['cleaning_time'];
    
// }

// foreach($myrow as $myrow1){
    
//     $cleaning_time = $myrow1['cleaning_time'];
    
//     $timeslot = explode( '-', $cleaning_time );
    
//     $end_time = explode( ':', $timeslot[1] );
    
//     echo $end_time[0];
    
// }



// while ($t1 < $t2) {
//   $t1 = strtotime('+1 hour', $t1);
//   $timeslots[] = date('Y-m-d H:i:s', $t1);
// }

// foreach ( $timeslots as $slot ) {
//   echo $slot . '<br/>';
// }

// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => 'https://ptctest.damacgroup.com/hellodamac/api/v1/notifications/trigger-push',
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => '',
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => 'POST',
//   CURLOPT_POSTFIELDS =>'{
//  "email": "0010Y00000MaLEAQA3",
//  "template_id": 0,
//  "message": "Thanks for using our Home cleaning Service. Kindly Rate us on a scale of 5.",
//  "title": "Rate our service",
//  "payload": {
//  "account_id": "0010Y00000MaLEAQA3",
//  "booking_unit_id": "a0x1n0000057pS6AAI",
//  "party_id": "2724779",
//  "screen": "service_requests",
//  "reg_id": "1005147",
//  "sr_number": "Service Request #WSC_64893",
//  "fm_case_id": "a4X1n000000FJkdEAG"
//  },
//  "total_pending_count": 0,
//  "image_url": "https://services.damacgroup.com/DCAssets/hello-damac/notifications/txn_success.png",
//  "source_application_id": 9,
//  "dest_application_id": 2
// }',
//   CURLOPT_HTTPHEADER => array(
//     'API-TOKEN: c13d9a4e2be67d853d7428f5a9a952d6',
//     'Content-Type: text/plain'
//   ),
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;


?>