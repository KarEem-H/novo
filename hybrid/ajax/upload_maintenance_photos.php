<?php

include "../config/connection.php";

$now = date("d-m-Y H:i:s");
date_default_timezone_set("Asia/Dubai");

error_reporting(1);

$job_id = $_REQUEST['jid'];

if (!empty($_FILES)) {
 $filename = $_FILES['file']['tmp_name'];
 
 $ext = substr($_FILES['file']['name'],-4);

if( $ext == '.jpg' || $ext == 'jpeg' || $ext == '.png' || $ext == '.gif' || $ext == '.mp4' || $ext == 'jfif' ) {
    
  if($ext == '.mp4'){

    $type = 'video';

  }else{

    $type = 'image';
    
  }

  $new_name = $_FILES['file']['name'];

  $targetPath = "../uploads/higi-completion-images/";
  $targetFile = $targetPath . $_FILES['file']['name'];
  move_uploaded_file($filename, $targetFile);

$sql = mysqli_query($conn,"INSERT INTO `maintenance_after_media` (`id`, `mid`, `url`, `type`, `preview`, `uploaded_date_time`) VALUES (NULL, '$job_id', '$new_name', '$type', '$new_name', '$now')");

$sql2 = mysqli_query($conn,"UPDATE `maintenance_jobs` SET `updated_at` = '$now' WHERE mid = '$job_id'");

// echo $response;

}

if( $ext == '.pdf' || $ext == 'docx' || $ext == '.PDF') {

$new_name = $_FILES['file']['name'];

$targetPath = "../uploads/higi-completion-reports/";
$targetFile = $targetPath . $_FILES['file']['name'];
move_uploaded_file($filename, $targetFile);

$sql1 = mysqli_query($conn,"INSERT INTO `maintenance_new_attachments` (`id`, `mid`, `url`, `type`, `preview`, `uploaded_date_time`) VALUES (NULL, '$job_id', '$new_name', 'everything_else', '$new_name', '$now')");

$sql3 = mysqli_query($conn,"UPDATE `maintenance_jobs` SET `updated_at` = '$now' WHERE mid = '$job_id'");


}

}


?>