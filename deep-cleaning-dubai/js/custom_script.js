	
    $(document).on('change', '#properties', function () {

            selectval = $(this).val();

            

            if (selectval == 'Apartment') {

         $('#cat_list').empty().append('<select class="wide required form-control" name="room" id="room"><option value="">Types of Room</option><option data-price="199" value="Studio">Studio</option><option data-price="299" value="1 Bedroom">1 Bedroom</option><option data-price="449" value="2 Bedroom">2 Bedroom</option><option data-price="699" value="3 Bedroom ">3 Bedroom </option><option data-price="1499" value="4 Bedroom">Penthouse</option></select>');

                    } else if (selectval == 'Villa') {

                    $('#cat_list').empty().append('<select class="wide required form-control" name="room" id="room"><option value="">Types of Room</option><option data-price="849" value="2 Bedroom">2 Bedroom</option><option data-price="1049" value="3 Bedroom ">3 Bedroom </option><option data-price="1449" value="4 Bedroom">4 Bedroom</option><option data-price="2399" value="5 Bedroom">5 Bedroom</option></select>');
                   

            }

    });


    

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
	        isInvalidDate: function(date) {
            if (date.day() == 0 || date.day() == 1 || date.day() == 2 || date.day() == 3 || date.day() == 4 || date.day() == 5 || date.day() == 6)
              return false;
            return true;
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


        var room = jQuery('#room').val();
        var properties = jQuery('#properties').val();
        var selected = $('#room').find('option:selected');            
        var price = selected.data('price'); 
        
        var payment_method = jQuery('#payment_method').val();
        var is_cod = (payment_method == "cash" ? true : false);

        var subtotal = price;
        var vat_rate = 0.05;
        var vat = (subtotal) * 0.05;
        var cod_rate = 5;
        var cod = is_cod ? cod_rate : 0;
        var total = subtotal + vat + cod;
        // var total = subtotal;
        
        // 2 digits vat
        if(vat >= 0) {
            vat = vat.toFixed(2);
        }
        
      
        var details = {

            'properties': properties,
            'room': room,
            'payment_method': payment_method,
            'is_cod': is_cod,
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
        jQuery('#sub_total').val(details.subtotal);
        jQuery('#vat').val(details.vat);
        jQuery('#cod').val(details.cod);
        jQuery('#total').val(details.total);

        // PAYMENT SUMMARY
        jQuery('#types_of_properties').html(details.properties);
        jQuery('#types_of_rooms').html(details.room);
        jQuery('#display_sub_total').html(details.subtotal);
        jQuery('#display_vat').html(details.vat);
        jQuery('#display_cod_charges').html(details.cod);
        jQuery('#display_total').html(details.total);

    }


    $(document).on('change', '#room', function () {

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

   