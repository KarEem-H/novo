<?php 

    include "../config/connection.php";
                        
    $date = $today_date;
    $dateArray = date_parse_from_format('d/m/Y', $date);
    
    $current_month = $dateArray[month];

    $filter_month = $_REQUEST['month_filter'];
    $filter_search = $_REQUEST['name_filter'];

        if ($filter_month == 'January'){
          $select_month = '1';
        }

        if ($filter_month == 'February'){
          $select_month = '2';
        }

        if ($filter_month == 'March'){
          $select_month = '3';
        }

        if ($filter_month == 'April'){
          $select_month = '4';
        }

        if ($filter_month == 'May'){
          $select_month = '5';
        }

        if ($filter_month == 'June'){
          $select_month = '6';
        }

        if ($filter_month == 'July'){
          $select_month = '7';
        }

        if ($filter_month == 'August'){
          $select_month = '8';
        }

        if ($filter_month == 'September'){
          $select_month = '9';
        }

        if ($filter_month == 'October'){
          $select_month = '10';
        }

        if ($filter_month == 'November'){
          $select_month = '11';
        }

        if ($filter_month == 'December'){
          $select_month = '12';
        }

        $our_agents = array('Eric','Mabel','Jean');

        // IF NO FILTER IS APPLIED
        if($filter_month == '' && $filter_search =='' ){

          foreach ($our_agents as $agent) {

            $agent_booking_data = mysqli_query($conn,"SELECT t1.date as mydate,t1.agent_name,IFNULL(t1.call_count,'0') as call_count,IFNULL(t2.booking_count,'0') as booking_count FROM (SELECT STR_TO_DATE(call_date, '%d-%m-%Y') AS 'date', COUNT(id) as call_count,agent_name FROM `auto_dialer` WHERE agent_name='$agent' AND agent_remark != 'No Answer' AND status='1' AND call_date!='' GROUP BY STR_TO_DATE(call_date, '%d-%m-%Y') ORDER BY 'date') t1 LEFT JOIN (SELECT STR_TO_DATE(booking_date, '%Y-%m-%d') AS 'date',COUNT(id) as booking_count, agent_name FROM `table_booking` WHERE source='Auto Dialer' AND agent_name='$agent' AND booking_date!='' GROUP BY STR_TO_DATE(booking_date, '%Y-%m-%d') ORDER BY 'date') t2 ON (t1.date = t2.date) ORDER BY mydate ASC");

            while ($agentBooking = mysqli_fetch_array($agent_booking_data, MYSQLI_ASSOC))
                                      
                {
                    $db[] = $agentBooking;
                } 

            }

          }

        // IF ONLY MONTH IS FILTERED
        if($filter_month != '' && $filter_search == ''){

            $results = '';

            foreach ($our_agents as $agent) {

                $agent_booking_data = mysqli_query($conn,"SELECT t1.date as mydate,t1.agent_name,IFNULL(t1.call_count,'0') as call_count,IFNULL(t2.booking_count,'0') as booking_count FROM (SELECT STR_TO_DATE(call_date, '%d-%m-%Y') AS 'date', COUNT(id) as call_count,agent_name FROM `auto_dialer` WHERE agent_name='$agent' AND agent_remark != 'No Answer' AND status='1' AND call_date!='' AND month(STR_TO_DATE(call_date, '%d-%m-%Y')) = '$select_month' GROUP BY STR_TO_DATE(call_date, '%d-%m-%Y') ORDER BY 'date') t1 LEFT JOIN (SELECT STR_TO_DATE(booking_date, '%Y-%m-%d') AS 'date',COUNT(id) as booking_count, agent_name FROM `table_booking` WHERE source='Auto Dialer' AND agent_name='$agent' AND booking_date!='' AND month(STR_TO_DATE(booking_date, '%Y-%m-%d')) = '$select_month' GROUP BY STR_TO_DATE(booking_date, '%Y-%m-%d') ORDER BY 'date') t2 ON (t1.date = t2.date) ORDER BY mydate ASC");

                while ($agentBooking = mysqli_fetch_array($agent_booking_data, MYSQLI_ASSOC))
                                          
                    {
                        $db[] = $agentBooking;
                    } 

                }
        }

          if($filter_search != '' && $filter_month == ''){

            $results = ''; 

                $agent_booking_data = mysqli_query($conn,"SELECT t1.date as mydate,t1.agent_name,IFNULL(t1.call_count,'0') as call_count,IFNULL(t2.booking_count,'0') as booking_count FROM (SELECT STR_TO_DATE(call_date, '%d-%m-%Y') AS 'date', COUNT(id) as call_count,agent_name FROM `auto_dialer` WHERE agent_name='$filter_search' AND agent_remark != 'No Answer' AND status='1' AND call_date!='' GROUP BY STR_TO_DATE(call_date, '%d-%m-%Y') ORDER BY 'date') t1 LEFT JOIN (SELECT STR_TO_DATE(booking_date, '%Y-%m-%d') AS 'date',COUNT(id) as booking_count, agent_name FROM `table_booking` WHERE source='Auto Dialer' AND agent_name='$filter_search' AND booking_date!='' GROUP BY STR_TO_DATE(booking_date, '%Y-%m-%d') ORDER BY 'date') t2 ON (t1.date = t2.date) ORDER BY mydate ASC");

                while ($agentBooking = mysqli_fetch_array($agent_booking_data, MYSQLI_ASSOC))
                                          
                    {
                        $db[] = $agentBooking;
                    }    
           
          }

          if($filter_month != '' && $filter_search != ''){

            $results = '';

                $agent_booking_data = mysqli_query($conn,"SELECT t1.date as mydate,t1.agent_name,IFNULL(t1.call_count,'0') as call_count,IFNULL(t2.booking_count,'0') as booking_count FROM (SELECT STR_TO_DATE(call_date, '%d-%m-%Y') AS 'date', COUNT(id) as call_count,agent_name FROM `auto_dialer` WHERE agent_name='$filter_search' AND agent_remark != 'No Answer' AND status='1' AND call_date!='' AND month(STR_TO_DATE(call_date, '%d-%m-%Y')) = '$select_month' GROUP BY STR_TO_DATE(call_date, '%d-%m-%Y') ORDER BY 'date') t1 LEFT JOIN (SELECT STR_TO_DATE(booking_date, '%Y-%m-%d') AS 'date',COUNT(id) as booking_count, agent_name FROM `table_booking` WHERE source='Auto Dialer' AND agent_name='$filter_search' AND booking_date!='' AND month(STR_TO_DATE(booking_date, '%Y-%m-%d')) = '$select_month' GROUP BY STR_TO_DATE(booking_date, '%Y-%m-%d') ORDER BY 'date') t2 ON (t1.date = t2.date) ORDER BY mydate ASC");

                while ($agentBooking = mysqli_fetch_array($agent_booking_data, MYSQLI_ASSOC))
                                          
                    {
                        $db[] = $agentBooking;
                    }

          }


  $tot = count($db);
  $serialno=1;

  if ($tot > 0) {

    foreach ($db as $row)  {
         $data[] = array(
           "id"             =>  $serialno++,
           "date"           =>  $row['mydate'],
           "agent_name"     =>  $row['agent_name'],
           "call_count"     =>  $row['call_count'],
           "booking_count"  =>  $row['booking_count']
         );
      }
}

  $output = array(
       "draw"             =>  isset($_POST["draw"]) ? $_POST["draw"] : 1,
       "recordsTotal"     =>  $tot,
       "recordsFiltered"  =>  $tot,
       "data"             =>  $data
      );


  echo json_encode($output);

 

?>