	jQuery(function ($) {
	    "use strict";
	    $('form#wrapped').attr('action', 'thank-you.php');
	    $("#wizard_container").wizard({
	        stepsWrapper: "#wrapped",
	        submit: ".submit",
	        beforeSelect: function (event, state) {
	            if ($('input#website').val().length != 0) {
	                return false;
	            }
	            if (!state.isMovingForward)
	                return true;
	            var inputs = $(this).wizard('state').step.find(':input');
	            return !inputs.length || !!inputs.valid();
	        }
	    }).validate({            
	        errorPlacement: function (error, element) {
	            if (element.is(':radio') || element.is(':checkbox')) {
	                error.insertBefore(element.next());
	            } else {
	                error.insertAfter(element);
	            }
	        }
	    });
	    //  progress bar
	    $("#progressbar").progressbar();
	    $("#wizard_container").wizard({
	        afterSelect: function (event, state) {
	            $("#progressbar").progressbar("value", state.percentComplete);
	            $("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
	        }
	    });
	    //  date picker
	    $('#service_date').daterangepicker({
	        autoUpdateInput: false,
            alwaysShowCalendars:true,
            inline:true,
            minDate: new Date(),
	        "singleDatePicker": true,	        
	        locale: {
	            cancelLabel: 'Clear'
	        }
	    });
	    $('#service_date').on('apply.daterangepicker', function (ev, picker) {
	        $(this).val(picker.startDate.format('DD-MM-Y'));
	    });
	    $('#service_date').on('cancel.daterangepicker', function (ev, picker) {
	        $(this).val('');
	    });


	    var normal_details = get_normal_cleaning_details();


		function get_normal_cleaning_details() {

        var num_hours = parseInt(jQuery('#num_hours').val());
        var num_cleaners = parseInt(jQuery('#num_cleaners').val());
        var is_material = jQuery('#is_material').val();
        var cleaning_type = jQuery('#service_type').val();
        var payment_method = jQuery('#payment_method').val();
        var is_cod = (payment_method == "cash" ? true : false);
        var has_material = (is_material == "on" ? true : false);
        var rate = 30;
        if(num_hours >= 4) {
            rate = 30;
        }
        if(num_hours == 3){
            rate= 40;
        }
        if(num_hours == 2){
            rate= 50;
        }
        var rate_material = 10;
        var material_charges = (has_material ? rate_material * num_hours * num_cleaners : 0);
        var subtotal = num_hours > 0 && num_cleaners > 0 ? (rate * num_hours * num_cleaners) : 0;
        var vat_rate = 0.05;
        var vat = (subtotal + material_charges) * 0.05;
        var cod_rate = 5;
        var cod = is_cod ? cod_rate : 0;
        var total = subtotal + vat + cod + material_charges;
        // var total = subtotal;
        
        // 2 digits vat
        if(vat >= 0) {
            vat = vat.toFixed(2);
        }
        
      
        var details = {
            'service_type': cleaning_type,
            'num_hours': jQuery('#num_hours').val(),
            'num_cleaners': jQuery('#num_cleaners').val(),
            'is_material': is_material,            
            'is_material_txt': (jQuery('#is_material').val() == "on" ? 'Yes' : 'No'), 
            'payment_method': payment_method,
            'is_cod': is_cod,
            'rate': rate,
            'rate_material': rate_material,
            'material_charges': material_charges,
            'vat_rate': vat_rate,
            'vat': vat,
            'subtotal': subtotal,
            'cod': cod,
            'total': total
        };

        return details;


    }

    function get_deep_cleaning_details(){

        var obj_num_beds = jQuery('#num_bedroom option:checked');
        var num_beds_price = obj_num_beds.data('price');
        var num_beds_rooms = obj_num_beds.attr('value');
        var building_type = jQuery('#building_type').val();
        var subtotal = num_beds_price;
        // var vat_rate = 0.05;
        // var vat = num_beds_price * vat_rate;
        var total = subtotal;
        var cleaning_type = jQuery('#service_type').val();
        
        var payment_method = jQuery('#payment_method').val();
        var is_cod = (payment_method == "cash" ? true : false);        
        var material_charges = 0;
        var vat = 0;
        var cod_rate = 5;
        var cod = is_cod ? cod_rate : 0;
        var total = subtotal + cod;
        // var total = subtotal;
        var num_hours;
        var num_cleaners;

        if(building_type == 'Apartment'){
            if(num_beds_rooms == 1 || num_beds_rooms == 'Studio'){
                num_hours = 4;
                num_cleaners = 1;
            }
            if(num_beds_rooms == 2 ){
                num_hours = 4;
                num_cleaners = 2;
            }
            if(num_beds_rooms == 3 ){
                num_hours = 4;
                num_cleaners = 2;
            }
            if(num_beds_rooms == 4 ){
                num_hours = 8;
                num_cleaners = 3;
            }
            if(num_beds_rooms == 5 ){
                num_hours = 8;
                num_cleaners = 4;
            }

        }
        if(building_type == 'Villa'){

            // VILLA
            if(num_beds_rooms == 1 ){
                num_hours = 4;
                num_cleaners = 2;
            }
            if(num_beds_rooms == 2 ){
                num_hours = 4;
                num_cleaners = 3;
            }
            if(num_beds_rooms == 3 ){
                num_hours = 8;
                num_cleaners = 5;
            }
            if(num_beds_rooms == 4 ){
                num_hours = 8;
                num_cleaners = 5;
            }
            if(num_beds_rooms == 5 ){
                num_hours = 8;
                num_cleaners = 6;
            }

        }
        
      
        var details = {
            'service_type': cleaning_type,
            'num_hours': num_hours,
            'num_cleaners': num_cleaners,
            'is_material_txt': 'Yes', 
            'payment_method': payment_method,
            'is_cod': is_cod,
            'material_charges': material_charges,
            'vat': vat,
            'subtotal': subtotal,
            'cod': cod,
            'total': total
        };
            
            return details;

        }
        

    function show_summary() {

        var details = get_normal_cleaning_details();

       // calculate total
        jQuery('#material_charge').val(details.material_charges);
        jQuery('#sub_total').val(details.subtotal);
        jQuery('#vat').val(details.vat);
        jQuery('#cod').val(details.cod);
        jQuery('#total').val(details.total);
        jQuery('#num_bedroom').val('-');

        // PAYMENT SUMMARY
        jQuery('#serviceType').html(details.service_type);
        jQuery('#display_num_hours').html(details.num_hours);
        jQuery('#display_num_cleaners').html(details.num_cleaners);
        jQuery('#display_sub_total').html(details.subtotal);
        jQuery('#display_material_charges').html(details.material_charges);
        jQuery('#display_vat').html(details.vat);
        jQuery('#display_cod_charges').html(details.cod);
        jQuery('#display_total').html(details.total);

    }

    function show_summary_deep() {

        var details = get_deep_cleaning_details();

       // calculate total
        jQuery('#material_charge').val(details.material_charges);
        jQuery('#sub_total').val(details.subtotal);
        jQuery('#vat').val(details.vat);
        jQuery('#cod').val(details.cod);
        jQuery('#total').val(details.total);
        jQuery('#num_hours').val(details.num_hours);
        jQuery('#num_cleaners').val(details.num_cleaners);

        // PAYMENT SUMMARY
        jQuery('#serviceType').html(details.service_type);
        jQuery('#display_num_hours').html(details.num_hours);
        jQuery('#display_num_cleaners').html(details.num_cleaners);
        jQuery('#display_sub_total').html(details.subtotal);
        jQuery('#display_material_charges').html(details.material_charges);
        jQuery('#display_vat').html(details.vat);
        jQuery('#display_cod_charges').html(details.cod);
        jQuery('#display_total').html(details.total);

    }

    jQuery('#is_material').on('change click blur keyup keydown', function () {  
    
        var cleaning_type = $('#service_type').val();
        if (cleaning_type == 'Normal Cleaning') {
            show_summary();
        }
    });

    jQuery('#num_hours').on('change click blur keyup keydown', function () {        
        show_summary();
    });
    
    jQuery('#num_cleaners').on('change click blur keyup keydown', function () {
        show_summary();
    });

    jQuery('#num_bedroom').on('change', function () {
        show_summary_deep();
    });

    jQuery('#building_type').on('change click blur keyup keydown', function () {
        var cleaning_type = $('#service_type').val();

        if (cleaning_type == 'Normal Cleaning') {
            show_summary();

        }else{
            show_summary_deep();
        }
    });
    

    jQuery('.payment_button').on('click', function () {
        // removed checked
        jQuery('.payment_button').removeClass('checked');       

        // add checked
        jQuery(this).addClass('checked');

        jQuery('#payment_method').val(jQuery(this).data('type'));

        var cleaning_type = $('#service_type').val();

        if (cleaning_type == 'Normal Cleaning') {
            show_summary();

        }else{
            show_summary_deep();
        }


    });



	});