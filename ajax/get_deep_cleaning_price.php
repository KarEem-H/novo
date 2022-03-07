<?php 

    //GETTING STATE NAME FORM DROPDOWN
    $cleaning_type=$_REQUEST['cleaningType'];
    $building_type=$_REQUEST['buildingType'];


    if ($cleaning_type == 'Deep Cleaning' && $building_type == 'Apartment') {
        echo '<option value="no-push" selected disabled>Select Bedrooms</option>
             <option value="Studio" data-price="249">Studio (AED 249)</option> 
            <option value="1" data-price="349">1 BR (AED 349)</option>
            <option value="2" data-price="499">2 BR (AED 499)</option>
            <option value="3" data-price="799">3 BR (AED 799)</option>
            <option value="4" data-price="1099">4 BR (AED 1099)</option>';
    } elseif ($cleaning_type == 'Deep Cleaning' && $building_type == 'Villa') {
        echo '<option value="no-push" selected disabled>Select Bedrooms</option>
            <option value="1" data-price="599">1 BR (AED 599)</option>
            <option value="2" data-price="899">2 BR (AED 899)</option>
            <option value="3" data-price="1099">3 BR (AED 1099)</option>
            <option value="4" data-price="1499">4 BR (AED 1499)</option>
            <option value="5" data-price="1999">5 BR (AED 1999)</option>';
    }

?>