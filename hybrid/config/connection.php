<?php

error_reporting(0);

ini_set('session.gc_maxlifetime', 21600);

session_set_cookie_params(21600);

session_start();

header("Access-Control-Allow-Origin: *");

 	$servername = "localhost";
     $username = "higiae_jijo";
     $password = "Higi@2021!";
     $dbname = "higiae_telesalesdb";

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "higiae_telesalesdb";
   
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error)
	{	
		echo "Connection Error";
	    die("Connection failed: " . $conn->connect_error);
	}


	// DATE AND TIME
$today_date = date("d-m-Y");
date_default_timezone_set("Asia/Dubai");
$current_time = date("h:i");

?>