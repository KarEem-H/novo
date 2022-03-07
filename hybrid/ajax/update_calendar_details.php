<?php 

include "../config/connection.php";

$row_id=$_REQUEST['row_id'];
$old_staff_id=$_REQUEST['old_staff_id'];
$staffID=$_REQUEST['staff_id'];
$startDate=$_REQUEST['start'];
$endDate=$_REQUEST['end'];
$booking_id=$_REQUEST['booking_id'];
$oldStartDate=$_REQUEST['old_start'];

$oldstartdate = explode( 'T', $oldStartDate );
$old_start_date = $oldstartdate[0];
$old_start_time = $oldstartdate[1];

$startdate = explode( 'T', $startDate );
$start_date = $startdate[0];
$start_time_1 = $startdate[1];

$enddate = explode( 'T', $endDate );
$end_date = $enddate[0];
$end_time_1 = $enddate[1];

$start_time = date("G:i:s", strtotime($startdate[1]));
$end_time = date("G:i:s", strtotime($enddate[1]));
$cleaningSlot = date("G:i", strtotime($startdate[1]));

$getDate = mysqli_query($conn,"SELECT cleaning_date FROM `table_booking` WHERE job_ref = '$booking_id'");
$row_getDate = mysqli_fetch_assoc($getDate);
$booking_date = $row_getDate['cleaning_date'];

if($oldStartDate == $startDate){


		//$check_validation = mysqli_query($conn,"SELECT * FROM table_assigned_task WHERE cleaning_date = '$booking_date' AND assigned_staff_id = '$staffID' AND (start_time < '$start_time' AND end_time > '$start_time' OR start_time < '$end_time' AND end_time > '$end_time' OR start_time > '$start_time' AND start_time < '$end_time' OR end_time > '$start_time' AND end_time < '$end_time' OR start_time = '$start_time' AND end_time = '$end_time')  And status = 'assigned' AND booking_id != '$booking_id'");
		$check_validation = mysqli_query($conn,"SELECT * FROM table_assigned_task WHERE cleaning_date = '$booking_date' AND assigned_staff_id = '$staffID' AND (start_time < CAST('$start_time' AS time) AND end_time > CAST('$start_time' AS time) OR start_time < '$end_time' AND end_time > CAST('$end_time' AS time) OR start_time > CAST('$start_time' AS time) AND start_time < CAST('$end_time' AS time) OR end_time > CAST('$start_time' AS time) AND end_time < CAST('$end_time' AS time) OR start_time = CAST('$start_time' AS time) AND end_time = CAST('$end_time' AS time) OR start_time < CAST('$start_time' AS time) AND end_time = CAST('$end_time' AS time) OR start_time = CAST('$start_time' AS time) AND end_time > CAST('$end_time' AS time))  And status = 'assigned' AND booking_id != '$booking_id'");

		$validation_pass =  mysqli_num_rows($check_validation);
		if($validation_pass > 0){
			echo '3';
		}else{
		
			$status = 'Assigned';
			$sql = mysqli_query($conn,"UPDATE table_assigned_task SET status='un_assigned' WHERE booking_id = '$booking_id' AND assigned_staff_id = '$old_staff_id'");

			$staff_details = mysqli_query($conn,"SELECT * FROM table_staffs WHERE staff_id = '$staffID'");
			$row1 = mysqli_fetch_assoc($staff_details);

			$staffName = $row1['staff_name'];

			$staff_details = mysqli_query($conn,"INSERT into table_assigned_task (`booking_id`,`assigned_staff_name`,`assigned_staff_id`,`cleaning_date`,`cleaning_slot`,`start_time`,`end_time`,`status`)VALUE ('$booking_id','$staffName','$staffID','$start_date','$cleaningSlot','$start_time','$end_time','$status')");


			$staff_list_query = mysqli_query($conn,"SELECT assigned_staff_name FROM table_assigned_task WHERE booking_id = '$booking_id' AND status = 'Assigned'");
			
			$result_of_Staff = array();
			while($list_all_staff = mysqli_fetch_assoc($staff_list_query)){
				$result_of_Staff[] = $list_all_staff['assigned_staff_name'];
			}
			$names_str = implode(" , ",$result_of_Staff);
			$update_staff_id = mysqli_query($conn,"UPDATE table_booking SET cleaners = '$names_str',cleaning_time = '$cleaningSlot' WHERE job_ref = '$booking_id'");

			echo '1';
		}

		
}else{
		
	if($old_staff_id == $staffID){

		$check_validation = $staff_list = mysqli_query($conn,"SELECT * FROM table_assigned_task WHERE cleaning_date = '$booking_date' AND assigned_staff_id = '$staffID' AND (start_time < CAST('$start_time' AS time) AND end_time > CAST('$start_time' AS time) OR start_time < '$end_time' AND end_time > CAST('$end_time' AS time) OR start_time > CAST('$start_time' AS time) AND start_time < CAST('$end_time' AS time) OR end_time > CAST('$start_time' AS time) AND end_time < CAST('$end_time' AS time) OR start_time = CAST('$start_time' AS time) AND end_time = CAST('$end_time' AS time) OR start_time < CAST('$start_time' AS time) AND end_time = CAST('$end_time' AS time) OR start_time = CAST('$start_time' AS time) AND end_time > CAST('$end_time' AS time))  And status = 'assigned' AND booking_id != '$booking_id'");

		//echo "SELECT * FROM table_assigned_task WHERE cleaning_date = '$booking_date' AND assigned_staff_id = '$staffID' AND (start_time < CAST('$start_time' AS time) AND end_time > CAST('$start_time' AS time) OR start_time < '$end_time' AND end_time > CAST('$end_time' AS time) OR start_time > CAST('$start_time' AS time) AND start_time < CAST('$end_time' AS time) OR end_time > CAST('$start_time' AS time) AND end_time < CAST('$end_time' AS time) OR start_time = CAST('$start_time' AS time) AND end_time = CAST('$end_time' AS time) OR start_time < CAST('$start_time' AS time) AND end_time = CAST('$end_time' AS time))  And status = 'assigned' AND booking_id != '$booking_id'";

		$validation_pass = mysqli_num_rows($check_validation);
		
		if($validation_pass > 0){
			echo '3';
		}else{

			$cleaner_list = mysqli_query($conn,"SELECT assigned_staff_id FROM table_assigned_task WHERE booking_id = '$booking_id' And status = 'assigned'");
	
			$error_codes = array();
			while($my_cleaners = mysqli_fetch_assoc($cleaner_list)){
				$c_names = $my_cleaners['assigned_staff_id'];
				$staff_check = mysqli_query($conn,"SELECT * FROM table_assigned_task WHERE cleaning_date = '$booking_date' AND assigned_staff_id = '$c_names' AND (start_time < '$start_time' AND end_time > '$start_time' OR start_time < '$end_time' AND end_time > '$end_time' OR start_time > '$start_time' AND start_time < '$end_time' OR end_time > '$start_time' AND end_time < '$end_time' OR start_time = '$start_time' AND end_time = '$end_time')  And status = 'assigned' AND booking_id != '$booking_id'");
				$tot = mysqli_num_rows($staff_check);
				if ( $tot > 0) {
					$error_codes[] = '3';
				}else{
					$error_codes[] = '0';
				}
	
			}
			if(in_array('3',$error_codes)){
				echo '3';
			}else{
				$sql = mysqli_query($conn,"UPDATE table_assigned_task SET start_time = '$start_time', end_time = '$end_time' WHERE booking_id = '$booking_id' AND status='Assigned'");
	
				$update_staff_id = mysqli_query($conn,"UPDATE table_booking SET cleaning_time = '$cleaningSlot' WHERE job_ref = '$booking_id'");
				echo "1";
			}

		}

		

		

	}else{
		

		$check_validation = $staff_list = mysqli_query($conn,"SELECT * FROM table_assigned_task WHERE cleaning_date = '$booking_date' AND assigned_staff_id = '$staffID' AND (start_time < CAST('$start_time' AS time) AND end_time > CAST('$start_time' AS time) OR start_time < '$end_time' AND end_time > CAST('$end_time' AS time) OR start_time > CAST('$start_time' AS time) AND start_time < CAST('$end_time' AS time) OR end_time > CAST('$start_time' AS time) AND end_time < CAST('$end_time' AS time) OR start_time = CAST('$start_time' AS time) AND end_time = CAST('$end_time' AS time) OR start_time < CAST('$start_time' AS time) AND end_time = CAST('$end_time' AS time) OR start_time = CAST('$start_time' AS time) AND end_time > CAST('$end_time' AS time))  And status = 'assigned'");
		//$check_validation = $staff_list = mysqli_query($conn,"SELECT * FROM table_assigned_task WHERE cleaning_date = '$booking_date' AND assigned_staff_id = '$staffID' AND start_time <= '$start_time' AND  end_time >= '$end_time' And status = 'assigned'");
		
		$validation_pass = mysqli_num_rows($check_validation);
		
		if($validation_pass > 0){
			echo '3';
		}else{
			$cleaner_list = mysqli_query($conn,"SELECT assigned_staff_id FROM table_assigned_task WHERE booking_id = '$booking_id' AND status='Assigned'");

			while ($my_cleaners = mysqli_fetch_array($cleaner_list, MYSQLI_ASSOC))
								
		  {
			  $my_cleaner_id[] = $my_cleaners;
	
		  }
		  
	
		  foreach($my_cleaner_id as $val)
				{
					$get_val =  $val['assigned_staff_id'];
					if($get_val == '')
					{
						unset($get_val);
					}
					if ($get_val == $old_staff_id) {
	
						$new_list[] = $staffID;
						unset($get_val);
	
					}
					$new_list[] = $get_val;
	
				}
	
				$my_new_cleaner_list = array_filter($new_list);
	
				// $my_cleaner_id = explode(',',$my_new_cleaner_list);
	
	
				foreach($my_new_cleaner_list as $c_id){
		
					$staff_check = mysqli_query($conn,"SELECT id FROM table_assigned_task WHERE status='Assigned' AND assigned_staff_id = '$c_id' AND cleaning_date = '$start_date' AND start_time >= '$start_time' AND end_time <= '$end_time' AND booking_id !='$booking_id'");
					$tot = mysqli_num_rows($staff_check);
					if ( $tot < 0) {
						echo "2";
					}else{
		
								$staff_details = mysqli_query($conn,"SELECT * FROM table_staffs WHERE staff_id = '$c_id'");
									$row1 = mysqli_fetch_assoc($staff_details);
		
									$staffName = $row1['staff_name'];
		
								if($c_id == $staffID){
		
									$sql_delete = mysqli_query($conn,"DELETE FROM table_assigned_task WHERE booking_id = '$booking_id' AND status='Assigned' AND assigned_staff_id ='$old_staff_id'");
		
									$staff_details = mysqli_query($conn,"INSERT INTO table_assigned_task (`booking_id`,`assigned_staff_name`,`assigned_staff_id`,`cleaning_date`,`cleaning_slot`,`start_time`,`end_time`,`status`)VALUE ('$booking_id','$staffName','$c_id','$start_date','$cleaningSlot','$start_time','$end_time','Assigned')");
									
								}else{
		
								$staff_details = mysqli_query($conn,"UPDATE table_assigned_task SET cleaning_date = '$start_date',cleaning_slot = '$cleaningSlot', start_time = '$start_time',end_time = '$end_time',status='Assigned' WHERE assigned_staff_id = '$c_id' AND booking_id='$booking_id' ORDER BY id DESC LIMIT 1");
		
							}
		
							$result[] = $staffName;
					
					}
		
				}
		
				$names_str = implode(" , ",$result);
		
				$update_staff_id = mysqli_query($conn,"UPDATE table_booking SET cleaners = '$names_str',cleaning_time = '$cleaningSlot' WHERE job_ref = '$booking_id'");
				echo "1";
			}
		}		
}


?>