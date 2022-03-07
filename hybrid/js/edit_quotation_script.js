    function addScope(cb) {
      // alert("Clicked, new value = " + cb.checked);

      if(cb.checked == true){
        $('#scope_of_work').show();
        $('#scope_of_work_1').show();
      }else{
        $('#scope_of_work').hide();
        $('#scope_of_work_1').hide();
      }

    }


    // DATE PICKER

    $("#service_date").datepicker({
        minDate: '0',
        dateFormat: 'dd-mm-yy',       
        onSelect: function (dateText) {
            // set date
            jQuery('#service_date').val(dateText);
            $('#quotationDate').html(dateText);

        }
    });



    function changeName(inputElement)
    {
        $('#client_name').html(inputElement.value); 

    }
    
    function changeMobile(inputElement)
    {
        $('#client_mobile').html(inputElement.value); 

    }

    function changeSubject(inputElement)
    {
        $('#client_subject').html(inputElement.value);
    }

    function changeScope(inputElement)
    {

        var id= $(inputElement).attr('id');
        $('.'+id).html(inputElement.value);

    }


    function get_tot(id){

        var fields = id.split('-');
        var ID = fields[1];
        var rate = parseFloat(jQuery('#rate-'+ID).val());
        var qty = parseFloat(jQuery('#qty-'+ID).val());
        var tot = rate * qty;


        var details = {
            'rate': rate,
            'qty': qty,
            'tot': tot
        };

        return details;
    }

    function calc_total(){
      var sum = 0;
      $(".price").each(function(){
        sum += parseFloat($(this).text());
      });

      $('.client_sub_total').text(sum);
      
        var vat = parseFloat(sum * 0.05);       
        var grand_tot = sum + vat;

      $('.client_vat').text(vat.toFixed(2));
      $('.client_total').text(grand_tot);

      return sum;
    }

    function changeQty(inputElement)
    {
        var id= $(inputElement).attr('id');
        $('.'+id).html(inputElement.value);

        var field = id.split('-');

        var price_id = field[1];

        var details = get_tot(id);

        var priceId = 'price-'+price_id;        

        document.getElementById(priceId).innerHTML = details.tot;

        calc_total();
        
    }

    function changeRate(inputElement)
    {
        var id= $(inputElement).attr('id');


        var field1 = id.split('-');

        var price_id = field1[1];
        $('.'+id).html(inputElement.value);

        var details = get_tot(id);

        var priceId = 'price-'+price_id;        

        document.getElementById(priceId).innerHTML = details.tot;  

        calc_total();      
          
    }

    function changePayment(inputElement)
    {
        $('#client_payment').html(inputElement.value);
    }


    $(document).ready(function (){

        $('#summernote_address').summernote({
            airMode: true,
            callbacks: {
                onBlur: function() {
                  var new_text1 = $('#summernote_address').summernote('code');
                  $('#client_address').html(new_text1);
                }
              },
              cleaner:{
                  action: 'both', // both|button|paste 'button' only cleans via toolbar button, 'paste' only clean when pasting content, both does both options.
                  newline: '<br>', // Summernote's default is to use '<p><br></p>'
                  notStyle: 'position:absolute;top:0;left:0;right:0', // Position of Notification
                  icon: '<i class="note-icon">[Your Button]</i>',
                  keepHtml: false, // Remove all Html formats
                  keepOnlyTags: ['<p>', '<br>', '<ul>', '<li>', '<b>', '<strong>','<i>', '<a>'], // If keepHtml is true, remove all tags except these
                  keepClasses: false, // Remove Classes
                  badTags: ['style', 'script', 'applet', 'embed', 'noframes', 'noscript', 'html'], // Remove full tags with contents
                  badAttributes: ['style', 'start'], // Remove attributes from remaining tags
                  limitChars: false, // 0/false|# 0/false disables option
                  limitDisplay: 'both', // text|html|both
                  limitStop: false // true/false
                }
        });

        $('#summernote').summernote({
            airMode: true,
            callbacks: {
                onBlur: function() {
                  var new_text = $('#summernote').summernote('code');
                  $('#summer_note_scope').html(new_text);
                }
              },
              cleaner:{
                  action: 'both',
                  newline: '<br>',
                  notStyle: 'position:absolute;top:0;left:0;right:0',
                  icon: '<i class="note-icon">[Your Button]</i>',
                  keepHtml: false,
                  keepOnlyTags: ['<p>', '<br>', '<ul>', '<li>', '<b>', '<strong>','<i>', '<a>'],
                  keepClasses: false,
                  badTags: ['style', 'script', 'applet', 'embed', 'noframes', 'noscript', 'html'],
                  badAttributes: ['style', 'start'],
                  limitChars: false,
                  limitDisplay: 'both',
                  limitStop: false
                }
        });


        $(".add_more_text").on("click", function() {

            var last_id = $('.select-div').last().attr('id');

            var myrowid = last_id.split('-');

            var i = myrowid[1];

            var html = '<div class="row new_row select-div" id="select-'+ ++i +'"><div class="col-sm-5"><p class="text-main text-sm text-uppercase text-bold">Description</p><input type="text" placeholder="Description" class="form-control input-lg description" id="service'+ i +'" onkeyup="changeScope(this);"></div><div class="col-sm-2"><p class="text-main text-sm text-uppercase text-bold">Quantity</p><input type="text" placeholder="Qty" class="form-control input-lg quantity" id="qty-'+ i +'" onkeyup="changeQty(this);"></div><div class="col-sm-3"><p class="text-main text-sm text-uppercase text-bold">Rate</p><input type="text" placeholder="Rate" class="form-control input-lg rate" id="rate-'+ i +'" onkeyup="changeRate(this);"></div><div class="col-sm-2 add_more"><div class="form-group label-floating" style="padding-top: 35px;"><a class="remove_field">- REMOVE</a></div></div></div>';

            var html1 = '<tr class="new_row display_row select-'+ +i +'"><td><strong class="service'+ i +'">XXX</strong></td><td class="text-center qty-'+ i +'">1</td><td class="text-center rate-'+ i +'">XXX</td><td class="text-right price" id="price-'+ i +'">XXX</td><a class="remove_field" style="visibility:hidden">- REMOVE</a></tr>';

            var count = $('.new_row').length;

        if (count <= 58 ){
           
            $('.select-div').last().after(html);
            $(".display_row").last().after(html1);

        }

        });

        $(document).on('click', '.remove_field', function(){
          $(this).prev('select').val('');
          $(this).closest ('.new_row').remove();

          var parents= $(this).closest('.new_row');
          var parentId = $(parents).attr("id");
          var parentClass = '.' + parentId;
          $(parentClass).remove();
          
        });

    });

    $('#submit').on('click',function(){

        $(document).on('focus','#name',function(){
            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});
        });

        $(document).on('focus','#mobile',function(){
            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});
        });

        $(document).on('focus','#email',function(){
            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});
        });

        $(document).on('focus','#address',function(){
            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});
        });

        $(document).on('focus','#subject',function(){
            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});
        });

        $(document).on('focus','#service',function(){
            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});
        });

        $(document).on('focus','#service_date',function(){
            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});
        });

        $(document).on('focus','#rate',function(){
            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});
        });

        $(document).on('focus','#payment_terms',function(){
            $(this).css({"border-color": "#e8ecec", "border-width":"1px", "border-style":"solid"});
        });
        
        

        var client_name     = $('#name').val();
        var client_mobile   = $('#mobile').val();
        var client_email    = $('#email').val();
        var client_address  = escape($('#summernote_address').summernote('code'));
        var subject         = $('#subject').val();
        var service         = $('#service0').val();
        var scope_of_work   = escape($("#summernote").summernote("code"));
        var quotation_date  = $('#service_date').val();
        var quotation_rate  = $('#rate-0').val();
        var payment_terms   = $('#payment_terms').val();
        var quotation_id   = $('#quotation_id').val();

        var description_array = [];
        $("input.description").each(function(){
            
            var des_array = $(this).val();
            var des = des_array.replace(/,/g, '-'); 
            description_array.push(des);
        });

        var quantity_array = [];
        $("input.quantity").each(function(){
            quantity_array.push($(this).val());
        });

        var rate_array = [];
        $("input.rate").each(function(){
            rate_array.push($(this).val());
        });


        var sub_total = calc_total();
        
        var my_vat = sub_total * 0.05;
        
        var vat = parseFloat(my_vat).toFixed(2);
        
        var price_total = +sub_total + +vat;        

        if(client_name == "" || client_name == null || client_mobile == "" || client_mobile == null||  client_email == "" || client_email == null || client_address == "" || client_address == "<p><br></p>" || subject == "" || subject == null || service == "" || service == null || quotation_rate == "" || quotation_rate == null || payment_terms == "" || payment_terms == null || quotation_date == "" || quotation_date == null ){

            if(client_name == "")
                {
                    jQuery("#name").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                }

                if(client_mobile == "")
                {
                    jQuery("#mobile").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                }

                if(client_email == "")
                {
                    jQuery("#email").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                    
                }

                if(client_address == "" || client_address == "<p><br></p>")
                {
                    alert('Enter Customer Address!');
                   
                }

                if(subject == "" || subject == null)
                {
                    jQuery("#subject").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                    jQuery("#subject_chosen").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                }

                if(service == "")
                {
                    jQuery("#service0").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                }

                if(quotation_date == "" || quotation_date == null)
                {
                    jQuery("#service_date").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                   
                }

                if(quotation_rate == "" || quotation_rate == null)
                {
                    jQuery("#rate-0").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                    jQuery("#service_slot_chosen").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                }

                if(payment_terms == "" || payment_terms == null)
                {
                    jQuery("#payment_terms").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                    jQuery("#payment_terms_chosen").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                }
                
                jQuery('html,body').animate({ scrollTop: 200 }, 'slow');

                return false;

            }else{

            var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

            $('#dashboard_data').append(Loader);
            $('html').addClass('.no-scroll');            

         $.ajax({
            type:"post",
            url: 'ajax/update_quotation.php',
            data:'quotation_id='+quotation_id+'&client_name='+ client_name +'&client_mobile='+ client_mobile +'&client_email='+ client_email +'&client_address='+ client_address +'&subject='+ subject + '&service='+ description_array + '&scope_of_work='+ scope_of_work +'&quantity='+ quantity_array +'&quotation_date='+ quotation_date +'&quotation_rate='+ rate_array +'&payment_terms='+ payment_terms + '&price=' + price_total + '&sub_total=' + sub_total + '&vat=' + vat,           
          
                success: function(response) {

                        $("#loaderimg").remove();
                        $('html').removeClass('no-scroll');

                        $.niftyNoty({
                                type: 'success',
                                container : 'floating',
                                title : 'Quotation Updated',
                                message : 'Quotation has been Updated successfully!',
                                closeBtn : true,
                                timer : 500,
                                onHide:function(){

                                    window.location.href='quotation_list.php';
                                    
                                }                       
                            });                   
                        }
                    });
                }     

            });