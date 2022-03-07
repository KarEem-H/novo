<?php 

	include "../config/connection.php";
	error_reporting(1);

	$job_id=$_REQUEST['job_id'];

	$sql = mysqli_query($conn,"SELECT * FROM `maintenance_new_attachments` WHERE mid = '$job_id'"); 

	while ($row = $sql->fetch_assoc()) {
	  
		$result[] = $row; 
	    
	}
	
	$quotation_ID = 'Quotation - Whitespot - '.$job_id;

	$sql1 = mysqli_query($conn,"SELECT quotation_id FROM `table_quotations` WHERE quotation_id = '$job_id'"); 

	$row1 = mysqli_fetch_assoc($sql1);

	// while ($row1 = $sql1->fetch_assoc()) {
	  	$my_quote_id = $row1['quotation_id'];
	  	$quotation_url = 'Quotation - Whitespot - '.$row1['quotation_id'];
	  	$quotation_file = 'Quotation - Whitespot - '.$row1['quotation_id'].'.pdf';
	  	$quotation_name = $row1['quotation_id'];
	  	$quotation_type = 'quotation';
		// $result1[] = $row1; 
	    
	// }

	// print_r($result1);

	// $all_attachements = array_merge((array)$result,(array)$result1);

	$my_result = json_encode($result);
	$result = json_decode($my_result,true);

	// $my_quotation = json_encode($result1);
	// $result1 = json_decode($my_quotation,true);


	echo '<table class="table table-hover table-vcenter">
		<thead>
		<tr>
		<th class="min-width">Files</th>
		<th class="min-width">Name</th>
		<th class="text-center">Action</th>
		</tr>
		</thead>
		<tbody>';

	if($my_quote_id !=''){

		echo '<a href="#"><img src="uploads/'.$quotation_url.'" data-image="uploads/'.$quotation_url.'" alt="" data-description=""></a>
			<tr>
			<td class="text-center">
			<a href="uploads/'.$quotation_file.'" target="_blank">
			<img src="img/files.png">
			</a>    
			</td>
			<td style="vertical-align:middle">
			<a href="uploads/'.$quotation_file.'" download="'.$quotation_url.'" target="_blank">
			<span class="text-main text-semibold">'.$quotation_name.'</span>		
			</a>
			</td>
			<td class="text-center" style="vertical-align:middle"><a href="uploads/'.$quotation_file.'" class="btn btn-primary" download="'.$quotation_url.'" target="_blank">Download</a></td>
			</tr>';

		}
		
	foreach ($result as $reports) {

		$url= $reports['url'];
		$name= explode('.',$url);
		$type= $reports['type'];

		if($type == 'everything_else'){
		$type = 'pdf';
		

		echo '<a href="#"><img src="uploads/whitespot-completion-reports/'.$url.'" data-image="uploads/whitespot-completion-reports/'.$url.'" alt="" data-description=""></a>
			<tr>
			<td class="text-center">
			<a href="uploads/whitespot-completion-reports/'.$url.'" target="_blank">
			<img src="img/files.png">
			</a>    
			</td>
			<td style="vertical-align:middle">
			<a href="uploads/whitespot-completion-reports/'.$url.'" download="'.$name[0].'" target="_blank">
			<span class="text-main text-semibold">'.$name[0].'</span>		
			</a>
			</td>
			<td class="text-center" style="vertical-align:middle"><a href="uploads/whitespot-completion-reports/'.$url.'" class="btn btn-primary" download="'.$name[0].'" target="_blank">Download</a></td>
			</tr>';

		}

	}
	
	echo '</tbody>
		</table>
		';

?>

