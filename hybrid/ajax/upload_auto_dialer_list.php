<?php

include "../config/connection.php";

error_reporting(1);

    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {

    	$mobile = $column[2];

    	$now = date("d-m-Y");
    	
         $sql = mysqli_query($conn,"SELECT call_date FROM auto_dialer WHERE mobile = '$mobile' AND status ='1' AND agent_remark !='Do Not Disturb' ORDER BY call_date DESC;");

         $res = mysqli_fetch_row($sql);
         $call_date = $res[0];

         if ($call_date != ''){

         $today_date = strtotime($now); 
         $CallDate = strtotime($call_date); 

         $date_difference =  ($today_date - $CallDate)/60/60/24; 

            if($date_difference > 3){

               $sql1 = mysqli_query($conn,"SELECT mobile FROM auto_dialer WHERE mobile = '$mobile' AND status ='0' AND call_date =''");
            
               $tot_num = $sql1->num_rows;

               if($tot_num > 0){
                  
                  // DO NOTHING

               }else{

                  $sqlInsert = mysqli_query($conn,"INSERT INTO auto_dialer (name, mobile, agent_name, agent_extension,lead_source, status,call_status, upload_date, call_date, call_time, callduration, agent_remark) VALUES ('" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "','0','','" . $now . "','','','','')");
                  
               }

            }

         }else{

            $sql2 = mysqli_query($conn,"SELECT mobile FROM auto_dialer WHERE mobile = '$mobile' AND status ='0' AND call_date =''");
            
            $tot_num2 = $sql2->num_rows;

            if($tot_num2 > 0){

                  // DO NOTHING

               }else{

                  $sqlInsert1 = mysqli_query($conn,"INSERT INTO auto_dialer (name, mobile, agent_name, agent_extension,lead_source, status,call_status, upload_date, call_date, call_time, callduration, agent_remark) VALUES ('" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "','0','','" . $now . "','','','','')");

               }

            }            
            
        }
    }


?>