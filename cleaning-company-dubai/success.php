<?php

include "config/connection.php";


$booking_ref = $_SESSION['booking_ref'];

$update_payment_status = mysqli_query($conn,"UPDATE table_booking SET payment_status = 'Paid' WHERE job_ref = '$booking_ref'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Cleaning Service Dubai</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    
    <style>
        body {
          min-height:100%;
          background:linear-gradient(0deg, rgb(0 0 0 / 30%), rgb(162 158 158)), url(https://higitech.me/test-lp/img/home-cleaning-services-dubai.jpg);
          background-size:cover;
        }
    </style>
    
    <!-- Global site tag (gtag.js) - Google Ads: 365884645 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-365884645"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-365884645');
</script>


</head>
<body>

<div id="success">
  <div class="icon icon--order-success svg">
       <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
        <g fill="none" stroke="#8EC343" stroke-width="2">
           <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
           <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
        </g>
       </svg>
   </div>
	<h3><span style="background-color: transparent; color: #ffffff">We have successfully received your booking. </span></h3><br>
  	<small style="font-size: 100%;color: #ffffff">One of our agent will call to confirm the schedule. If you have any queries you can reac us on 800 HME(463)</small>
</div>
</body>
</html>