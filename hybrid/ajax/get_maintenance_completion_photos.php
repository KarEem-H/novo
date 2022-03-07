<?php 

	include "../config/connection.php";

	$job_id=$_REQUEST['job_id'];

	$sql = mysqli_query($conn,"SELECT * FROM `maintenance_after_media` WHERE mid = '$job_id'"); 


	while ($row = $sql->fetch_assoc()) {
	  
	$result[] = $row; 
	    
	}

	$my_result = json_encode($result);
	$result = json_decode($my_result,true);



foreach($result as $photos){

	$url= $photos['url'];
	$type= $photos['type'];

	if($type == 'video'){
		$type = 'html5video';
	}

	if($type != 'everything_else'){

	echo '<a href="#"><img data-type="'.$type.'" src="uploads/whitespot-completion-images/'.$url.'" data-image="uploads/whitespot-completion-images/'.$url.'" data-videomp4="uploads/whitespot-completion-images/'.$url.'" data-videowebm="uploads/whitespot-completion-images/'.$url.'" data-videoogv="uploads/whitespot-completion-images/'.$url.'" alt="" data-description="" style="display:none"></a>';
	}
	// echo "<a href='".$url."'></a>";

}


?>

