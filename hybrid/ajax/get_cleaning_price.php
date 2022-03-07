<?php 
    include "../config/connection.php";

    //GETTING STATE NAME FORM DROPDOWN
    $cleaning_type=$_REQUEST['cleaningType'];
    $building_type=$_REQUEST['buildingType'];


    if ($cleaning_type == 'Deep Cleaning' && $building_type == 'apartment') {
        echo '<option value="no-push" selected disabled>Select Bedrooms</option>
             <option value="Studio" data-price="200">Studio (AED 200)</option> 
            <option value="1 BR" data-price="300">1 BR (AED 300)</option>
            <option value="2 BR" data-price="450">2 BR (AED 450)</option>
            <option value="3 BR" data-price="695">3 BR (AED 695)</option>
            <option value="Penthouse" data-price="1495">PENTHOUSE (AED 1495)</option>';
    } elseif ($cleaning_type == 'Deep Cleaning' && $building_type == 'villa') {
        echo '<option value="no-push" selected disabled>Select Bedrooms</option>
            <option value="1 BR" data-price="599">1 BR (AED 500)</option>
            <option value="2 BR" data-price="850">2 BR (AED 850)</option>
            <option value="3 BR" data-price="1050">3 BR (AED 1050)</option>
            <option value="4 BR" data-price="1450">4 BR (AED 1450)</option>
            <option value="5 BR" data-price="2380">5 BR (AED 2380)</option>
            <option value="6 BR" data-price="3333">6 BR (AED 3333)</option>';
    }
    
    if ($cleaning_type == 'AMC' && $building_type == 'villa') {
        echo '<option value="no-push" selected disabled>Select Bedrooms</option>
            <option value="2 BR" data-price="3149">2 BR (AED 2999)</option>
            <option value="3 BR" data-price="4199">3 BR (AED 3999)</option>
            <option value="4 BR" data-price="5249">4 BR (AED 4999)</option>
            <option value="5 BR" data-price="6299">5 BR (AED 5999)</option>';
    } elseif ($cleaning_type == 'AMC' && $building_type == 'townhouse') {
        echo '<option value="no-push" selected disabled>Select Bedrooms</option>
            <option value="2 BR" data-price="2624">2 BR (AED 2499)</option>
            <option value="3 BR" data-price="3674">3 BR (AED 3499)</option>
            <option value="4 BR" data-price="4724">4 BR (AED 4499)</option>
            <option value="5 BR" data-price="6824">5 BR (AED 6499)</option>';
    }

?>