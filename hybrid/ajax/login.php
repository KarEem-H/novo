<?php

ini_set('session.gc_maxlifetime', 21600);

session_set_cookie_params(21600);

session_start();

include "../config/connection.php";

if (!empty($_REQUEST['userName'])) {

    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];

    // CHECK USER LOGIN
    $sql = mysqli_query($conn,"SELECT * FROM table_agents WHERE agent_name = '$userName' AND status = 'Active'");
   
    $row=mysqli_fetch_assoc($sql);

        if ($userPassword == $row['agent_password']){

            $id = $row['id'];
            $admin_name = $row['agent_name'];
            $agent_role = $row['agent_role'];
            $bookings = $row['bookings'];
            $scheduler  = $row['scheduler'];
            $coordinator = $row['coordinator'];
            $quotations = $row['quotations'];
            $inspection = $row['inspection'];
            $followup = $row['followup'];
            $payments = $row['payments'];
            $landing_page_leads = $row['landing_page_leads'];
            $complaints = $row['complaints'];
            $maintenance = $row['maintenance'];
            $reports = $row['reports'];
            $user_access = $row['user_access'];


            $_SESSION['ADMIN_ID']['ID'] = $id;
            $_SESSION['ADMIN_ID']['NAME'] = $admin_name;
            $_SESSION['ADMIN_ID']['ROLE'] = $agent_role;
            $_SESSION['ADMIN_ID']['BOOKINGS'] = $bookings;
            $_SESSION['ADMIN_ID']['SCHEDULER'] = $scheduler;
            $_SESSION['ADMIN_ID']['COORDINATOR'] = $coordinator;
            $_SESSION['ADMIN_ID']['QUOTATIONS'] = $quotations;
            $_SESSION['ADMIN_ID']['INSPECTION'] = $inspection;
            $_SESSION['ADMIN_ID']['FOLLOWUP'] = $followup;
            $_SESSION['ADMIN_ID']['PAYMENTS'] = $payments;
            $_SESSION['ADMIN_ID']['LANDING_PAGE_LEADS'] = $landing_page_leads;
            $_SESSION['ADMIN_ID']['COMPLAINTS'] = $complaints;
            $_SESSION['ADMIN_ID']['MAINTENANCE'] = $maintenance;
            $_SESSION['ADMIN_ID']['REPORTS'] = $reports;
            $_SESSION['ADMIN_ID']['USER_ACCESS'] = $user_access;

            echo "1";
            $conn->close();

        }
        else
        {
            echo "2";
        }
    
}

?>