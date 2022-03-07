	jQuery(function ($) {
	    "use strict";
	    $('form#wrapped').attr('action', 'form-submit.php');
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
	    $('input[name="dates"]').daterangepicker({
	        autoUpdateInput: false,
            minDate: new Date(),
	        "singleDatePicker": true,	        
	        locale: {
	            cancelLabel: 'Clear'
	        },
	        beforeShowDay: function (date) {
                if (date.getDay() == 6) {
                    return [false, ''];
                } else {
                    return [true, ''];
                }
            }
	    });
	    
	    
	    $('input[name="dates"]').on('apply.daterangepicker', function (ev, picker) {
	        $(this).val(picker.startDate.format('DD-MM-Y'));
	    });
	    
	    $('input[name="dates"]').on('cancel.daterangepicker', function (ev, picker) {
	        $(this).val('');
	    });

	    var details = get_details();

		function get_details() {

        var num_hours = parseInt(jQuery('#num_hours').val());
        var num_cleaners = parseInt(jQuery('#num_cleaners').val());
        var is_material = jQuery('#is_material').val();
        
        var payment_method = jQuery('#payment_method').val();
        var is_cod = (payment_method == "cash" ? true : false);
        var has_material = (is_material == "on" ? true : false);
        var rate = 25;
        if(num_hours >= 4) {
            rate = 25;
        }
        if(num_hours == 3){
            rate= 35;
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
            'booking_type': num_hours,
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

    function show_summary() {

        var details = get_details();

       // calculate total
        jQuery('#material_charge').val(details.material_charges);
        jQuery('#sub_total').val(details.subtotal);
        jQuery('#vat').val(details.vat);
        jQuery('#cod').val(details.cod);
        jQuery('#total').val(details.total);

        // PAYMENT SUMMARY
        jQuery('#display_num_hours').html(details.num_hours);
        jQuery('#display_num_cleaners').html(details.num_cleaners);
        jQuery('#display_sub_total').html(details.subtotal);
        jQuery('#display_material_charges').html(details.material_charges);
        jQuery('#display_vat').html(details.vat);
        jQuery('#display_cod_charges').html(details.cod);
        jQuery('#display_total').html(details.total);

    }

    jQuery('#is_material').on('change click blur keyup keydown', function () {

    var mat = jQuery(this).is(':checked');
    if(mat == true)
    {
        jQuery('#is_material').val('on');
    }else{
        jQuery('#is_material').val('off');
    }
        show_summary();
    });

    jQuery('#num_hours').on('change click blur keyup keydown', function () {        
        show_summary();
    });
    
    jQuery('#num_cleaners').on('change click blur keyup keydown', function () {
        show_summary();
    });
    

    jQuery('.payment_button').on('click', function () {
        // removed checked
        jQuery('.payment_button').removeClass('checked');       

        // add checked
        jQuery(this).addClass('checked');

        jQuery('#payment_method').val(jQuery(this).data('type'));

        show_summary();

    });

});