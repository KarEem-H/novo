$(document).ready(function() {   
    
    function fetchdata(){
        
        $.ajax({
              url: 'ajax/refresh_session.php',
              cache: false,
              complete: function () {}
            });
        }
        
    setInterval(fetchdata,60000);

    $(document).on('click', '#collect-feedback-btn-bootbox', function(){

        var job_ref=$(this).data('id'); 

        $.ajax({
            type:"post",
            url: 'ajax/get_customer_details.php',   
            data:'job_ref='+ job_ref,
            success: function(msg) {                
                 $('#gen_rec').html(msg);                
            }
        });        

        bootbox.dialog({
            title: "Feedback Form",
            message: '<div id="gen_rec"></div>',
            buttons: {
                success: {
                    label: "Submit",
                    className: "btn-primary",
                    callback: function() {
                        var job_ref = $('#job_id').val();
                        var cust_id = $('#cust_id').val();
                        var cleaning_date = $('#cleaning_date').val();
                        var cleaner_on_time = $('#cleaner_on_time').val();
                        var uniform = $('#uniform').val();
                        var followed_instruction = $('#followed_instruction').val();
                        var completed_on_time = $('#completed_on_time').val();
                        var attitude = $('#attitude').val();
                        var cleaner_name = $('#cleaner_name').val();
                        var regular = $('#regular').val();
                        var rating = $('#rating').val();
                        var size_of_apartment = $('#size_of_apartment').val();
                        var remarks = $('#remarks').val();

                        $.ajax({
                            type:"post",
                            url: 'ajax/insert_feedback.php',
                            data:'job_ref='+ job_ref + '&cust_id='+ cust_id + '&cleaning_date='+ cleaning_date + '&cleaner_on_time=' + cleaner_on_time + '&uniform=' + uniform + '&followed_instruction=' + followed_instruction + '&completed_on_time='+ completed_on_time + '&attitude='+ attitude + '&cleaner_name='+ cleaner_name + '&regular='+ regular + '&rating='+ rating + '&remarks='+ remarks+ '&size_of_apartment='+ size_of_apartment,
                            success: function(msg) {
                                location.href = "follow_up.php";              
                            }

                        });
                        
                    }
                }
            }
        });
  
    });

    $(document).on('click', '#quotation-status-btn-bootbox', function(){

        var Id=$(this).data('id');  

        $.ajax({
            type:"post",
            url: 'ajax/get_quotation_status.php',   
            data:'id='+ Id,
            success: function(msg) {                
                $('#quote_status').html(msg);                
            }
        });    

        bootbox.dialog({
            title: "Update Quotation Status",
            message: '<div id="quote_status"></div>',
            buttons: {
                success: {
                    label: "Update",
                    className: "btn-primary",
                    callback: function() {
                        var Id                  = $('#Id').val();                        
                        var quotation_status    = $('#quotation_status').val();
                        var agent_remarks       = $('#agent_remarks').val();
                        var service_date        = $('#service_date').val();
                        var start_time          = $('#start_time').val();
                        var end_time            = $('#end_time').val();

                        if(quotation_status == 'Won'){

                            if ( service_date == "" || service_date == null ||  start_time == "" || start_time == null ||  end_time == "" || end_time == null ){


                                if(service_date == "")
                                {
                                    jQuery("#service_date").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                                }

                                if(start_time == "")
                                {
                                    jQuery("#start_time").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                                }

                                if(end_time == "")
                                {
                                    jQuery("#end_time").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                                }

                                jQuery('html,body').animate({ scrollTop: 200 }, 'slow');

                                return false;
                            } else {

                                $.ajax({
                                    type:"post",
                                    url: 'ajax/update_quotation_status.php',
                                    data:'Id=' + Id + '&quotation_status=' + quotation_status + '&agent_remarks=' + agent_remarks + '&service_date=' + service_date + '&start_time=' + start_time + '&end_time=' + end_time,
                                    success: function(msg) {
                                        location.href = "quotation_list.php";               
                                    }

                                });

                            }
                        }else{

                            $.ajax({
                                type:"post",
                                url: 'ajax/update_quotation_status.php',
                                data:'Id=' + Id + '&quotation_status=' + quotation_status + '&agent_remarks=' + agent_remarks,
                                success: function(msg) {
                                    location.href = "quotation_list.php";               
                                }

                            });

                        }
                    }
                }

            }
        });

    });
    
    $(document).on('click', '#jobsheet-status-btn-bootbox', function(){

        var Id=$(this).data('id');

        bootbox.dialog({
            title: "Update Jobsheet Status",
            message: '<div id="quote_status"><div class="row"><div class="col-md-12"><form class="form-horizontal"><div class="form-group"><label class="col-md-4 control-label" for="name">Status</label><div class="col-md-6"><select id="jobsheet_status" class="form-control input-md"><option>In Progress</option><option>Completed</option><option>Cancelled</option></select><input type="hidden" id="Id" class="form-control input-md" value="'+ Id +'"></div></div><div class="form-group"><label class="col-md-4 control-label" for="name">Remark</label><div class="col-md-6"><textarea id="agent_remarks" class="form-control input-md"></textarea></div></div></form></div></div></div>',
            buttons: {
                success: {
                    label: "Update",
                    className: "btn-primary",
                    callback: function() {
                        var Id = $('#Id').val();                        
                        var jobsheet_status = $('#jobsheet_status').val();
                        var agent_remarks = $('#agent_remarks').val();

                        var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

                        $('#dashboard_data').append(Loader);
                        $('html').addClass('.no-scroll'); 

                            $.ajax({
                                type:"post",
                                url: 'ajax/update_jobsheet_status.php',
                                data:'Id=' + Id + '&jobsheet_status=' + jobsheet_status + '&agent_remarks=' + agent_remarks,
                                success: function(msg) {

                                $("#loaderimg").remove();
                                $('html').removeClass('no-scroll');

                                window.location.reload();              
                            }

                        });
                    }
                }
            }
        });
  
    });

   $(document).on('click', '#mark-cancelled-btn-bootbox', function(){

        var Id =$(this).data('id');

        bootbox.dialog({
            title: "Cancel Job",
            message:'<div class="row"> '+ 
                    '<div class="col-md-12"> ' +
                     '<form class="form-horizontal"> ' + 
                     '<div class="form-group"> ' +
                    '<label class="col-md-4 control-label" for="name">Cancellation Reason</label> ' +
                    '<div class="col-md-6"> ' +
                    '<select id="reject_reason" class="form-control input-md">' +
                    '<option selected disabled>Select Reason</option>' +
                    '<option>Add Additional Service</option>' +
                    '<option>Remove Additional Service</option>' +
                    '<option>Customer Mind Change</option>' +
                    '<option>Reschedule</option>' +
                    '<option>Cleaner Absent</option>' +
                    '<option>Others</option>' +
                    '</select>' +
                    '</div> ' +
                    '</div>' +
                     '<div class="form-group"> ' +
                     '<label class="col-md-4 control-label" for="name">Remark</label> ' +
                     '<div class="col-md-6"> ' +
                     '<textarea id="agent_remark" class="form-control input-md"></textarea>' +
                     '<input type="hidden" id="Id" class="form-control input-md" value="'+Id+'">' +
                     '</div> ' +
                     '</div> ' + 
                     '</form>' + 
                     '</div>' + 
                     '</div>',
            buttons: {
                success: {
                    label: "Yes",
                    className: "btn-primary",
                    callback: function() {
                        var Id = $('#Id').val();
                        var reject_reason = $('#reject_reason').val();
                        var agent_remark = $('#agent_remark').val();

                        if (reject_reason == "" || reject_reason == null || agent_remark == "" || agent_remark == null){
                             if(reject_reason == "")
                            {
                                jQuery("#reject_reason").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                                
                            }

                            if(agent_remark == "")
                            {
                                jQuery("#agent_remark").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                        

                        jQuery('html,body').animate({ scrollTop: 200 }, 'slow');

                            return false;
                        } else {

                        $.ajax({
                            type:"post",
                            url: 'ajax/mark_cancelled.php' ,   
                            data:'Id='+ Id+'&reject_reason='+ reject_reason+'&agent_remark='+ agent_remark,

                            success: function(msg) {
                                // location.href="job_list.php"; 
                                window.location.reload();              
                            }
                        });                       
                    }
                    }
                }
            }
        });
    });

    $(document).on('click', '#mark-completed-btn-bootbox', function(){

        var Id =$(this).data('id');

        bootbox.dialog({
            title: "Job Completed",
            message:'Are You Sure? Do you want to mark the job as Completed?'+
            '<input type="hidden" id="Id" class="form-control input-md" value="'+Id+'">',
            buttons: {
                success: {
                    label: "Yes",
                    className: "btn-primary",
                    callback: function() {
                        var Id = $('#Id').val();

                        $.ajax({
                            type:"post",
                            url: 'ajax/mark_completed.php' ,   
                            data:'Id='+ Id,

                            success: function(msg) {
                                // location.href="job_list.php";
                                window.location.reload();               
                            }
                        });                       
                    }
                }
            }
        });
    });

    $(document).on('click', '#mark-paid-btn-bootbox', function(){

        var Id=$(this).data('id');       

        bootbox.dialog({
            title: "Update Payment Status",
            message: '<div id="payment"><div class="row"><div class="col-md-12"><form class="form-horizontal"><div class="form-group"><label class="col-md-4 control-label" for="name">Status</label><div class="col-md-6"><select id="payment_status" class="form-control input-md"><option>Un Paid</option><option>No Answer</option><option>Dispute</option><option>Outside the Country</option><option>Payment Link Sent</option><option>Call Back</option><option>Pay on Next Visit</option><option>Pickup Payment</option><option>Bank Transfer</option><option>Cancelled</option><option>Partially Paid</option><option>Pay at End of Month</option><option>Paid</option></select></div></div><div class="form-group"><label class="col-md-4 control-label" for="name">Remark</label><div class="col-md-6"><textarea id="agent_remark" class="form-control input-md"></textarea><input type="hidden" id="Id" class="form-control input-md" value="'+Id+'"></div></div></form></div></div></div>',
            buttons: {
                success: {
                    label: "Update",
                    className: "btn-primary",
                    callback: function() {
                        var Id = $('#Id').val();                        
                        var payment_status = $('#payment_status').val();
                        var agent_remark = $('#agent_remark').val();

                        $.ajax({
                            type:"post",
                            url: 'ajax/update_payment_status.php',
                            data:'Id=' + Id + '&payment_status=' + payment_status +'&agent_remark='+ agent_remark,
                            success: function(msg) {
                                location.href = "payment_list.php";               
                            }

                        });
                        
                    }
                }
            }
        });
  
    });

    $(document).on('click', '#mark-unpaid-btn-bootbox', function(){

        var Id=$(this).data('id');       

        bootbox.dialog({
            title: "Update Payment Status",
            message: '<div id="payment"><div class="row"><div class="col-md-12"><form class="form-horizontal"><div class="form-group"><label class="col-md-4 control-label" for="name">Status</label><div class="col-md-6"><select id="payment_status" class="form-control input-md"><option>Un Paid</option><option>Dispute</option><option>Cancelled</option><option>Pay at End of Month</option></select></div></div><div class="form-group"><label class="col-md-4 control-label" for="name">Remark</label><div class="col-md-6"><textarea id="agent_remark" class="form-control input-md"></textarea><input type="hidden" id="Id" class="form-control input-md" value="'+Id+'"></div></div></form></div></div></div>',
            buttons: {
                success: {
                    label: "Update",
                    className: "btn-primary",
                    callback: function() {
                        var Id = $('#Id').val();                        
                        var payment_status = $('#payment_status').val();
                        var agent_remark = $('#agent_remark').val();

                        $.ajax({
                            type:"post",
                            url: 'ajax/update_payment_status.php',
                            data:'Id=' + Id + '&payment_status=' + payment_status +'&agent_remark='+ agent_remark,
                            success: function(msg) {
                                location.href = "payment_list.php";               
                            }

                        });
                        
                    }
                }
            }
        });
  
    });

    $(document).on('click', '#mark-paid-agent-btn-bootbox', function(){

        var Id=$(this).data('id');       

        bootbox.dialog({
            title: "Update Payment Status",
            message: '<div id="payment"><div class="row"><div class="col-md-12"><form class="form-horizontal"><div class="form-group"><label class="col-md-4 control-label" for="name">Status</label><div class="col-md-6"><select id="payment_status" class="form-control input-md"><option>Un Paid</option><option>No Answer</option><option>Dispute</option><option>Outside the Country</option><option>Payment Link Sent</option><option>Call Back</option><option>Pay on Next Visit</option><option>Pickup Payment</option><option>Bank Transfer</option><option>Cancelled</option><option>Partially Paid</option><option>Pay at End of Month</option><option>Paid</option></select></div></div><div class="form-group"><label class="col-md-4 control-label" for="name">Remark</label><div class="col-md-6"><textarea id="agent_remark" class="form-control input-md"></textarea><input type="hidden" id="Id" class="form-control input-md" value="'+Id+'"></div></div></form></div></div></div>',
            buttons: {
                success: {
                    label: "Update",
                    className: "btn-primary",
                    callback: function() {
                        var Id = $('#Id').val();                        
                        var payment_status = $('#payment_status').val();
                        var agent_remark = $('#agent_remark').val();

                        $.ajax({
                            type:"post",
                            url: 'ajax/update_payment_status.php',
                            data:'Id=' + Id + '&payment_status=' + payment_status +'&agent_remark='+ agent_remark,
                            success: function(msg) {
                                location.href = "follow_up.php";               
                            }

                        });
                        
                    }
                }
            }
        });
  
    });

    $(document).on('click', '#add-to-brilion-btn-bootbox', function(){

        var job_ref=$(this).data('id'); 

        $.ajax({
            type:"post",
            url: 'ajax/get_booking_details.php',   
            data:'job_ref='+ job_ref,
            success: function(msg) {                
                 $('#gen_rec').html(msg);                
            }
        });        

        bootbox.dialog({
            title: "Booking Details",
            message: '<div id="gen_rec"></div>',
            buttons: {
                success: {
                    label: "Schedule",
                    className: "btn-primary",
                    callback: function() {
                        var job_ref = $('#job_id').val();
                        var agent_name = $('#agent_name').val();

                        $.ajax({
                            type:"post",
                            url: 'ajax/add_to_brilion.php',
                            data:'job_ref='+ job_ref + '&agent_name=' + agent_name,
                            success: function(msg) {
                               window.location.reload();              
                            }

                        });
                        
                    }
                },
                copy: {
                    label: 'Copy',
                    className: 'btn-info',
                    callback: function(){
                      document.getElementById("copy_me").select();
                      document.execCommand("copy",false);

                      $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Copied!',
                            message : 'The booking details has been copied!',
                            closeBtn : true,
                            timer : 1000,
                            onHide:function(){
                            }
                        });
                    }
                }
            }
        });
  
    });
    
    $(document).on('click', '#remove-from-brilion-btn-bootbox', function(){

        var row_id=$(this).data('id'); 

        bootbox.dialog({
            title: "Booking Details",
            message: 'Are You Sure? Do you want to remove this job from Brilion?'+
            '<input type="hidden" id="row_id" class="form-control input-md" value="'+row_id+'">',
            buttons: {
                success: {
                    label: "Remove",
                    className: "btn-primary",
                    callback: function() {
                        var row_id = $('#row_id').val();
                        var agent_name = $('#agent_name').val();

                        $.ajax({
                            type:"post",
                            url: 'ajax/remove_from_brilion.php',
                            data:'row_id='+ row_id + '&agent_name=' + agent_name,
                            success: function(msg) {
                               window.location.reload();              
                            }

                        });
                        
                    }
                },
                copy: {
                    label: 'Copy',
                    className: 'btn-info',
                    callback: function(){
                      document.getElementById("copy_me").select();
                      document.execCommand("copy",false);

                      $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Copied!',
                            message : 'The booking details has been copied!',
                            closeBtn : true,
                            timer : 1000,
                            onHide:function(){
                            }
                        });
                    }
                }
            }
        });
  
    });


    $(document).on('click', '#add_complaints', function(){

        var Id=$(this).data('id'); 

        $.ajax({
            type:"post",
            url: 'ajax/get_customer_complaints.php',
            success: function(msg) {                
                 $('#complaints').html(msg);                
            }
        });      

        bootbox.dialog({
            title: "Open a Ticket",
            message: '<div id="complaints"></div>',
            buttons: {
                success: {
                    label: "Create",
                    className: "btn-primary",
                    callback: function() {  

                        var service_date        = $('#service_date').val();
                        var start_time          = $('#start_time').val();
                        var end_time            = $('#end_time').val();
                        var customer_name       = $('#customer_name').val();
                        var customer_mobile     = $('#customer_mobile').val();
                        var customer_address    = $('#customer_address').val();
                        var job_amount          = $('#job_amount').val();
                        var cleaner_name        = $('#cleaner_name').val(); 
                        var remarks             = $('#remarks').val();
                        var agent_name          = $('#agent_name').val();

                        if (customer_name == "" || customer_name == null || customer_mobile == "" || customer_mobile == null||  service_date == "" || service_date == null ||  remarks == "" || remarks == null ||  customer_address == "" || customer_address == null ){
                             if(customer_name == "")
                            {
                                jQuery("#customer_name").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            if(customer_mobile == "")
                            {
                                jQuery("#customer_mobile").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            if(service_date == "")
                            {
                                jQuery("#service_date").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            if(remarks == "")
                            {
                                jQuery("#remarks").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            if(customer_address == "")
                            {
                                jQuery("#customer_address").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            jQuery('html,body').animate({ scrollTop: 200 }, 'slow');

                            return false;
                        } else {

                        $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Complaint Registered',
                            message : 'New Ticket has been created successfully!',
                            closeBtn : true,
                            timer : 1000,
                            onHide:function(){

                            $.ajax({
                                type:"post",
                                url: 'ajax/insert_customer_complaint.php',
                                data:'service_date=' + service_date + '&start_time=' + start_time + '&end_time=' + end_time + '&customer_name=' + customer_name + '&customer_mobile=' + customer_mobile + '&customer_address=' + customer_address + '&job_amount=' + job_amount + '&cleaner_name=' + cleaner_name + '&remarks=' + remarks + '&agent_name=' + agent_name,
                                success: function(msg) {
                                    window.location.reload();               
                                        }

                                    });                        
                                }
                            });

                        }
                    }
                }
            }
        });
  
    });

    $(document).on('click', '#complaints-status-btn-bootbox', function(){

        var Id=$(this).data('id');       

        bootbox.dialog({
            title: "Update Ticket Status",
            message: '<div id="complaint_status"><div class="row"><div class="col-md-12"><form class="form-horizontal"><div class="form-group"><label class="col-md-3 control-label" for="name">Status</label><div class="col-md-6"><select id="ticket_status" class="form-control input-md"><option>Open</option><option>In Progress</option><option>Closed</option></select><input type="hidden" id="Id" class="form-control input-md" value="'+ Id +'"></div></div><div class="form-group"><label class="col-md-3 control-label" for="name">Remarks</label><div class="col-md-6"><textarea id="agent_remarks" class="form-control input-md"></textarea></div></div></form></div></div></div>',
            buttons: {
                success: {
                    label: "Update",
                    className: "btn-primary",
                    callback: function() {
                        var Id = $('#Id').val();                        
                        var ticket_status = $('#ticket_status').val();
                        var agent_remarks  = $('#agent_remarks').val();

                            $.ajax({
                                type:"post",
                                url: 'ajax/update_complaints_status.php',
                                data:'Id=' + Id + '&ticket_status=' + ticket_status + '&agent_remarks=' + agent_remarks,
                                success: function(msg) {
                                    location.href = "complaints_list.php";               
                                }

                            });
                        
                    }
                }
            }
        });
  
    });

    $(document).on('click', '#add_user', function(){

        var Id=$(this).data('id'); 

        $.ajax({
            type:"post",
            url: 'ajax/get_user_details.php',
            success: function(msg) {                
                 $('#users').html(msg);                
            }
        });      

        bootbox.dialog({
            title: "Create New User",
            message: '<div id="users"></div>',
            buttons: {
                success: {
                    label: "Create",
                    className: "btn-primary",
                    callback: function() {  

                        var agent_name          = $('#agent_name').val();
                        var agent_password      = $('#agent_password').val();
                        var agent_extension     = $('#agent_extension').val();
                        var agent_role          = $('#agent_role').val();

                        $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'User Created',
                            message : 'New User has been created successfully!',
                            closeBtn : true,
                            timer : 1000,
                            onHide:function(){

                            $.ajax({
                                type:"post",
                                url: 'ajax/insert_new_user.php',
                                data:'agent_name=' + agent_name + '&agent_password=' + agent_password + '&agent_extension=' + agent_extension + '&agent_role=' + agent_role,
                                success: function(msg) {
                                        location.href = "users.php";               
                                    }

                                });                        
                            }
                        });
                    }
                }
            }
        });
  
    });
    
    $(document).on('click', '#view-my-booking-btn-bootbox', function(){

        var job_ref=$(this).data('id'); 

        $.ajax({
            type:"post",
            url: 'ajax/get_booking_details.php',   
            data:'job_ref='+ job_ref,
            success: function(msg) {                
                 $('#gen_rec').html(msg);                
            }
        });        

        bootbox.dialog({
            title: "Booking Details",
            message: '<div id="gen_rec"></div>',
            buttons: {
                success: {
                    label: "Close",
                    className: "btn-primary",
                    callback: function() {
                       
                        
                    }
                }
            }
        });
  
    });

    $(document).on('click', '#schedule_job', function(){

        var Id=$(this).data('id'); 

        $.ajax({
            type:"post",
            url: 'ajax/schedule_job.php',
            data:'id='+ Id,
            success: function(msg) {                
                $('#schedule').html(msg);                
            }
        });      

        bootbox.dialog({
            title: "Schedule Job",
            message: '<div id="schedule"></div>',
            buttons: {
                success: {
                    label: "Add to Brillion",
                    className: "btn-primary",
                    callback: function() {  

                        var Id                  = $('#Id').val();
                        var start_date          = $('#start_date').val();
                        var start_time          = $('#start_time').val();
                        var end_time            = $('#end_time').val();
                        var quotation_id        = $('#quotation_id').val();

                        if ( start_date == "" || start_date == null || start_time == "" || start_time == null ){


                            if(start_date == "")
                            {
                                jQuery("#start_date").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }
                            
                            if(start_time == "")
                            {
                                jQuery("#start_time").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }


                            jQuery('html,body').animate({ scrollTop: 200 }, 'slow');

                            return false;

                        } else {

                            $.ajax({
                                type:"post",
                                url: 'ajax/update_job_schedule.php',
                                data:'id='+ Id +'&start_date=' + start_date +'&start_time=' + start_time +'&end_time=' + end_time + '&quotation_id=' + quotation_id,
                                success: function(msg) {

                                    $.niftyNoty({
                                        type: 'success',
                                        container : 'floating',
                                        title : 'Job Scheduled',
                                        message : 'The job has been scheduled successfully!',
                                        closeBtn : true,
                                        timer : 1000,
                                        onHide:function(){
                                            window.location.reload();               
                                            }

                                    }); 

                                }
                            });

                        }
                    }
                }
            }
        });

    });
    
    $(document).on('click', '#copy-inspection-btn-bootbox', function(){

        var inspection_id = $(this).data('id'); 

        $.ajax({
            type:"post",
            url: 'ajax/copy_inspection_details.php',   
            data:'inspection_id='+ inspection_id,
            success: function(msg) {                
                 $('#gen_rec').html(msg);                
            }
        });

        bootbox.dialog({
            title: "Inspection Details",
            message: '<div id="gen_rec"></div>',
            buttons: {
                copy: {
                    label: 'Copy',
                    className: 'btn-info',
                    callback: function(){
                      document.getElementById("copy_text").select();
                      document.execCommand("copy",false);

                      $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Copied!',
                            message : 'Inspection Details Copied to Clipboard',
                            closeBtn : true,
                            timer : 1000,
                            onHide:function(){
                            }
                        });
                    }
                }
            }
        });
  
    });
    
    $(document).on('click', '#add_cancellation', function(){

        var Id=$(this).data('id'); 

        $.ajax({
            type:"post",
            url: 'ajax/get_cancellation_form.php',
            success: function(msg) {                
                 $('#cancellation').html(msg);                
            }
        });      

        bootbox.dialog({
            title: "Create Cancellation",
            message: '<div id="cancellation"></div>',
            buttons: {
                success: {
                    label: "Submit",
                    className: "btn-primary",
                    callback: function() {  

                        var service_date        = $('#service_date').val();
                        var start_time          = $('#start_time').val();
                        var end_time            = $('#end_time').val();
                        var customer_name       = $('#customer_name').val();
                        var customer_mobile     = $('#customer_mobile').val();
                        var customer_address    = $('#customer_address').val();
                        var customer_type       = $('#customer_type').val();
                        var job_amount          = $('#job_amount').val();
                        var cleaner_name        = $('#cleaner_name').val(); 
                        var rescheduled         = $('#rescheduled').val();
                        var reason              = $('#reason').val();
                        var agent_name          = $('#agent_name').val();

                        if (customer_name == "" || customer_name == null || customer_mobile == "" || customer_mobile == null||  service_date == "" || service_date == null ||  customer_type == "" || customer_type == null ||  customer_address == "" || customer_address == null ){
                             if(customer_name == "")
                            {
                                jQuery("#customer_name").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            if(customer_mobile == "")
                            {
                                jQuery("#customer_mobile").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            if(customer_type == "")
                            {
                                jQuery("#customer_type").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            if(service_date == "")
                            {
                                jQuery("#service_date").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            if(reason == "")
                            {
                                jQuery("#reason").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            if(customer_address == "")
                            {
                                jQuery("#customer_address").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            jQuery('html,body').animate({ scrollTop: 200 }, 'slow');

                            return false;
                        } else {

                        $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Cancellation Added!',
                            message : 'New Cancellation has been created successfully!',
                            closeBtn : true,
                            timer : 1000,
                            onHide:function(){

                            $.ajax({
                                type:"post",
                                url: 'ajax/insert_cancellation.php',
                                data:'service_date=' + service_date + '&start_time=' + start_time + '&end_time=' + end_time + '&customer_name=' + customer_name + '&customer_mobile=' + customer_mobile + '&customer_address=' + customer_address + '&customer_type=' + customer_type + '&job_amount=' + job_amount + '&cleaner_name=' + cleaner_name + '&reason=' + reason + '&rescheduled=' + rescheduled + '&agent_name=' + agent_name,
                                    success: function(msg) {
                                            location.href = "recurring_cancellations.php";                
                                        }

                                    });                        
                                }
                            });

                        }
                    }
                }
            }
        });
        
    });
  
    
    $(document).on('click', '#change_payment_status', function(){

        var cust_id=$(this).data('id');  

        $.ajax({
            type:"post",
            url: 'ajax/get_outstanding_amount.php' ,   
            data:'cust_id='+ cust_id,
            success: function(msg) {               
                 $('#outstanding_amount').val(msg);                
            }
        });     

        bootbox.dialog({
            title: "Update Payment Status",
            message: '<div id="payment"><div class="row"><div class="col-md-12"><form class="form-horizontal"><div class="form-group"><label class="col-md-4 control-label" for="name">Amount Received</label><div class="col-md-6"><input type="text" class="form-control input-md" id="outstanding_amount" val=""></div></div><div class="form-group"><label class="col-md-4 control-label" for="name">Status</label><div class="col-md-6"><select id="payment_status" class="form-control input-md"><option>Un Paid</option><option>No Answer</option><option>Dispute</option><option>Outside the Country</option><option>Payment Link Sent</option><option>Call Back</option><option>Pay on Next Visit</option><option>Pickup Payment</option><option>Bank Transfer</option><option>Cancelled</option><option>Pay at End of Month</option><option>Partially Paid</option><option>Paid</option></select></div></div><div class="form-group"><label class="col-md-4 control-label" for="name">Remark</label><div class="col-md-6"><textarea id="agent_remark" class="form-control input-md"></textarea><input type="hidden" id="cust_id" class="form-control input-md" value="'+cust_id+'"></div></div></form></div></div></div>',
            buttons: {
                success: {
                    label: "Update",
                    className: "btn-primary",
                    callback: function() {
                        
                        var cust_id = $('#cust_id').val();  
                        var outstanding_amount = $('#outstanding_amount').val();
                        var payment_status = $('#payment_status').val();
                        var agent_remark = $('#agent_remark').val();

                        $.ajax({
                            type:"post",
                            url: 'ajax/update_unpaid_jobs_status.php',
                            data:'cust_id=' + cust_id +'&paid_amount=' + outstanding_amount +'&payment_status=' + payment_status +'&agent_remark='+ agent_remark,
                            success: function(msg) {
                                location.href = "unpaid_jobs.php";               
                            }

                        });
                        
                    }
                }
            }
        });
        
    });
    
    
    $(document).on('click', '#add_internal_ticket', function(){

        var Id=$(this).data('id'); 

        $.ajax({
            type:"post",
            url: 'ajax/get_internal_ticket_form.php',
            success: function(msg) {                
                 $('#internal_ticket').html(msg);                
            }
        });      

        bootbox.dialog({
            title: "Create Internal Ticket",
            message: '<div id="internal_ticket"></div>',
            buttons: {
                success: {
                    label: "Submit",
                    className: "btn-primary",
                    callback: function() {  

                        var service_date        = $('#service_date').val();
                        var service_type        = $('#service_type').val();
                        var department          = $('#department').val();
                        var customer_name       = $('#customer_name').val();
                        var customer_mobile     = $('#customer_mobile').val();
                        var job_amount          = $('#job_amount').val();
                        var staff_name          = $('#staff_name').val(); 
                        var comments            = $('#comments').val();
                        var issue               = $('#issue').val();
                        var agent_name          = $('#agent_name').val();

                        if (customer_name == "" || customer_name == null || customer_mobile == "" || customer_mobile == null||  service_date == "" || service_date == null ||  service_type == "" || service_type == null ||  staff_name == "" || staff_name == null){
                             if(customer_name == "")
                            {
                                jQuery("#customer_name").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            if(customer_mobile == "")
                            {
                                jQuery("#customer_mobile").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            if(service_type == "")
                            {
                                jQuery("#service_type").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            if(service_date == "")
                            {
                                jQuery("#service_date").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            if(issue == "")
                            {
                                jQuery("#issue").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            if(staff_name == "")
                            {
                                jQuery("#staff_name").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }

                            jQuery('html,body').animate({ scrollTop: 200 }, 'slow');

                            return false;
                        } else {

                        $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Ticket Added!',
                            message : 'New Ticket has been created successfully!',
                            closeBtn : true,
                            timer : 1000,
                            onHide:function(){

                            $.ajax({
                                type:"post",
                                url: 'ajax/insert_internal_ticket.php',
                                data:'service_date=' + service_date + '&service_type=' + service_type + '&department=' + department + '&customer_name=' + customer_name + '&customer_mobile=' + customer_mobile + '&job_amount=' + job_amount + '&staff_name=' + staff_name + '&issue=' + issue + '&comments=' + comments + '&agent_name=' + agent_name,
                                success: function(msg) {
                                            location.href = "internal_issues.php";              
                                        }

                                    });                        
                                }
                            });

                        }
                    }
                }
            }
        });
  
    });
    
    $(document).on('click', '#add_callout', function(){

    var Id=$(this).data('id'); 

    $.ajax({
        type:"post",
        url: 'ajax/get_callout_form.php',
        success: function(msg) {                
            $('#callout').html(msg);                
        }
    });      

    bootbox.dialog({
        title: "Create Callout",
        message: '<div id="callout"></div>',
        buttons: {
            success: {
                label: "Submit",
                className: "btn-primary",
                callback: function() {  

                    var service_date        = $('#service_date').val();
                    var start_time          = $('#start_time').val();
                    var unit                = $('#unit_number').val();
                    var building            = $('#building_name').val();
                    var source              = $('#source').val();
                    var technician          = $('#technician').val();
                    var agent_name          = $('#agent_name').val();
                    var details             = $('#details').val();

                    if (service_date == "" || service_date == null || start_time == "" || start_time == null ||  unit == "" || unit == null ||  building == "" || building == null ||  source == "" || source == null || technician == "" || technician == null){
                        if(service_date == "")
                        {
                            jQuery("#service_date").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(start_time == "")
                        {
                            jQuery("#start_time").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(unit == "")
                        {
                            jQuery("#unit_number").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(building == "")
                        {
                            jQuery("#building_name").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(source == "")
                        {
                            jQuery("#source").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(technician == "")
                        {
                            jQuery("#technician").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }



                        jQuery('html,body').animate({ scrollTop: 200 }, 'slow');

                        return false;
                        
                    } else {

                        $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Callout Added!',
                            message : 'New Callout has been created successfully!',
                            closeBtn : true,
                            timer : 1000,
                            onHide:function(){

                                $.ajax({
                                    type:"post",
                                    url: 'ajax/insert_callout.php',
                                    data:'service_date=' + service_date + '&start_time=' + start_time + '&unit=' + unit + '&building=' + building + '&source=' + source + '&technician=' + technician + '&agent_name=' + agent_name + '&details=' + details,
                                    success: function(msg) {

                                        location.href = "callouts.php";   

                                    }

                                });                        
                            }
                        });

                    }
                }
            }
        }
    });

});

$(document).on('click', '#copy-callout', function(){

    var Id = $(this).data('id'); 

    $.ajax({
        type:"post",
        url: 'ajax/copy_callout_details.php',   
        data:'id='+ Id,
        success: function(msg) {                
            $('#gen_rec').html(msg);                
        }
    });

    bootbox.dialog({
        title: "Callout Details",
        message: '<div id="gen_rec"></div>',
        buttons: {
            copy: {
                label: 'Copy',
                className: 'btn-info',
                callback: function(){
                    document.getElementById("copy_text").select();
                    document.execCommand("copy",false);

                    $.niftyNoty({
                        type: 'success',
                        container : 'floating',
                        title : 'Copied!',
                        message : 'Callout Details Copied to Clipboard',
                        closeBtn : true,
                        timer : 1000,
                        onHide:function(){
                        }
                    });
                }
            }
        }
    });

});
    
    
    $(document).on('click', '#re-schedule-btn', function(){

        var Id=$(this).data('id'); 

        $.ajax({
            type:"post",
            url: 'ajax/reschedule_damac_booking.php',
            data:'id='+ Id,
            success: function(msg) {                
                $('#schedule').html(msg);                
            }
        });      

        bootbox.dialog({
            title: "Re-Schedule Job",
            message: '<div id="schedule"></div>',
            buttons: {
                success: {
                    label: "Update",
                    className: "btn-primary",
                    callback: function() {  

                        var Id                  = $('#Id').val();
                        var service_date        = $('#service_date').val();
                        var service_time        = $('#service_time').val();
                        var job_ref             = $('#job_ref').val();

                        if ( service_date == "" || service_date == null || service_time == "" || service_time == null){


                            if(service_date == "")
                            {
                                jQuery("#service_date").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                            }


                            jQuery('html,body').animate({ scrollTop: 200 }, 'slow');

                            return false;

                        } else {

                            $.ajax({
                                type:"post",
                                url: 'ajax/update_new_damac_schedule.php',
                                data:'id='+ Id +'&service_date=' + service_date + '&service_time=' + service_time + '&job_ref=' + job_ref,
                                success: function(msg) {

                                    $.niftyNoty({
                                        type: 'success',
                                        container : 'floating',
                                        title : 'Job Re-Scheduled',
                                        message : 'The job has been re-scheduled successfully!',
                                        closeBtn : true,
                                        timer : 1000,
                                        onHide:function(){
                                            window.location.reload();               
                                        }

                                    }); 

                                }
                            });

                        }
                    }
                }
            }
        });

    });
    
    
    $(document).on('click', '#cancel-inspection-btn', function(){

        var Id =$(this).data('id');

        bootbox.dialog({
            title: "Cancel Inspection",
            message:'<div class="row"> '+ 
            '<div class="col-md-12">' +
            '<form class="form-horizontal">' +             
            '<div class="form-group"> ' +
            '<label class="col-md-4 control-label" for="name">Remark</label> ' +
            '<div class="col-md-6"> ' +
            '<textarea id="agent_remark" class="form-control input-md"></textarea>' +
            '<input type="hidden" id="Id" class="form-control input-md" value="'+Id+'">' +
            '</div> ' +
            '</div> ' + 
            '</form>' + 
            '</div>' + 
            '</div>',
            buttons: {
                success: {
                    label: "Submit",
                    className: "btn-primary",
                    callback: function() {
                        var Id = $('#Id').val();
                        var agent_remark = $('#agent_remark').val();

                        if(agent_remark == "")
                            {
                                jQuery("#agent_remark").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                                jQuery('html,body').animate({ scrollTop: 200 }, 'slow');

                                return false;

                            }else{

                            $.ajax({
                                type:"post",
                                url: 'ajax/cancel_inspection.php' ,   
                                data:'Id='+ Id +'&agent_remark=' + agent_remark,

                                success: function(msg) {
                                    window.location.reload();               
                                }
                            });  
                        }                     
                    }
                }
            }
        });
    });
    
    $(document).on('click', '#add-to-brilion-inspection', function(){

    var inspection_id = $(this).data('id'); 

    $.ajax({
        type:"post",
        url: 'ajax/copy_inspection_details.php',   
        data:'inspection_id='+ inspection_id,
        success: function(msg) {                
            $('#gen_rec').html(msg);                
        }
    });

    bootbox.dialog({
            title: "Inspection Details",
            message: '<div id="gen_rec"></div>',
            buttons: {
                success: {
                    label: "Schedule",
                    className: "btn-primary",
                    callback: function() {
                        var row_id = $('#row_id').val();
                        var agent_name = $('#agent_name').val();

                        $.ajax({
                            type:"post",
                            url: 'ajax/add_to_brilion_inspection.php',
                            data:'row_id='+ row_id + '&agent_name=' + agent_name,
                            success: function(msg) {
                                window.location.reload();              
                            }

                        });

                    }
                },
                copy: {
                    label: 'Copy',
                    className: 'btn-info',
                    callback: function(){
                        document.getElementById("copy_me").select();
                        document.execCommand("copy",false);

                        $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Copied!',
                            message : 'Inspection Details Copied to Clipboard',
                            closeBtn : true,
                            timer : 1000,
                            onHide:function(){
                            }
                        });
                    }
                }
            }
        });

    });
    
    $(document).on('click', '#edit_callout', function(){

    var Id=$(this).data('id'); 

    $.ajax({
        type:"post",
        url: 'ajax/edit_callout_form.php',
        data:'id='+ Id,
        success: function(msg) {                
            $('#callout').html(msg);                
        }
    });      

    bootbox.dialog({
        title: "Edit Callout",
        message: '<div id="callout"></div>',
        buttons: {
            success: {
                label: "Update",
                className: "btn-primary",
                callback: function() {  

                    var id                  = $('#Id').val();
                    var service_date        = $('#service_date').val();
                    var start_time          = $('#start_time').val();
                    var unit                = $('#unit_number').val();
                    var building            = $('#building_name').val();
                    var source              = $('#source').val();
                    var technician          = $('#technician').val();
                    var agent_name          = $('#agent_name').val();
                    var details             = $('#details').val();
                    var status              = $('#status').val();

                    if (service_date == "" || service_date == null || start_time == "" || start_time == null ||  unit == "" || unit == null ||  building == "" || building == null ||  source == "" || source == null || technician == "" || technician == null){
                        if(service_date == "")
                        {
                            jQuery("#service_date").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(start_time == "")
                        {
                            jQuery("#start_time").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(unit == "")
                        {
                            jQuery("#unit_number").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(building == "")
                        {
                            jQuery("#building_name").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(source == "")
                        {
                            jQuery("#source").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(technician == "")
                        {
                            jQuery("#technician").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }



                        jQuery('html,body').animate({ scrollTop: 200 }, 'slow');

                        return false;
                        
                    } else {

                        $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Callout Updated!',
                            message : 'Your Callout has been updated successfully!',
                            closeBtn : true,
                            timer : 1000,
                            onHide:function(){

                                $.ajax({
                                    type:"post",
                                    url: 'ajax/update_callout.php',
                                    data: 'id=' + id + '&service_date=' + service_date + '&start_time=' + start_time + '&unit=' + unit + '&building=' + building + '&source=' + source + '&technician=' + technician + '&agent_name=' + agent_name + '&details=' + details +'&status=' + status,
                                    success: function(msg) {

                                        location.href = "callouts.php";   

                                    }

                                });                        
                            }
                        });

                    }
                }
            }
        }
    });

});

$(document).on('click', '#update-callout-status', function(){

        var Id=$(this).data('id');       

        bootbox.dialog({
            title: "Update Callout Status",
            message: '<div><div class="row"><div class="col-md-12"><form class="form-horizontal"><div class="form-group"><label class="col-md-4 control-label" for="name">Status</label><div class="col-md-6"><select id="callout_status" class="form-control input-md"><option>New</option><option>In Progress</option><option>Completed</option><option>Cancelled</option></select></div></div><div class="form-group"><label class="col-md-4 control-label" for="name">Remark</label><div class="col-md-6"><textarea id="agent_remark" class="form-control input-md"></textarea><input type="hidden" id="Id" class="form-control input-md" value="'+Id+'"></div></div></form></div></div></div>',
            buttons: {
                success: {
                    label: "Update",
                    className: "btn-primary",
                    callback: function() {
                        var Id = $('#Id').val();                        
                        var callout_status = $('#callout_status').val();
                        var agent_remark = $('#agent_remark').val();

                        $.ajax({
                            type:"post",
                            url: 'ajax/update_callout_status.php',
                            data:'Id=' + Id + '&callout_status=' + callout_status +'&agent_remark='+ agent_remark,
                            success: function(msg) {
                                // location.href = "callouts.php";             
                            }

                        });

                    }
                }
            }
        });

    });
    
$(document).on('click', '#add_maintenance', function(){

    var Id=$(this).data('id'); 

    $.ajax({
        type:"post",
        url: 'ajax/get_maintenance_form.php',
        success: function(msg) {                
            $('#maintenance').html(msg);                
        }
    });      

    bootbox.dialog({
        title: "Create Maintenance Job",
        message: '<div id="maintenance"></div>',
        buttons: {
            success: {
                label: "Submit",
                className: "btn-primary",
                callback: function() {  

                    var service_date          =     $('#service_date').val();
                    var start_time            =     $('#start_time').val();
                    var unit                  =     $('#unit_number').val();
                    var building              =     $('#building_name').val();
                    var address               =     $('#address').val();
                    var source                =     $('#source').val();
                    var category              =     $('#category').val();
                    var cust_name             =     $('#cust_name').val();
                    var cust_mobile           =     $('#cust_mobile').val();
                    var cust_email            =     $('#cust_email').val();
                    var agent_name            =     $('#agent_name').val();
                    var job_title             =     $('#job_title').val();
                    var job_description       =     $('#job_description').val();

                    if ( service_date == "" || service_date == null || start_time == "" || start_time == null ||  unit == "" || unit == null ||  building == "" || building == null || job_title == "" || job_title == null || cust_name == "" || cust_name == null || job_description == "" || job_description == null || address == "" || address == null ){
                        if(service_date == "")
                        {
                            jQuery("#service_date").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(start_time == "")
                        {
                            jQuery("#start_time").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(unit == "")
                        {
                            jQuery("#unit_number").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(building == "")
                        {
                            jQuery("#building_name").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(source == "")
                        {
                            jQuery("#source").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }


                        if(cust_name == "")
                        {
                            jQuery("#cust_name").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }                        

                        if(address == "")
                        {
                            jQuery("#address").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(job_title == "")
                        {
                            jQuery("#job_title").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }

                        if(job_description == "")
                        {
                            jQuery("#job_description").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});
                        }


                        jQuery('html,body').animate({ scrollTop: 200 }, 'slow');

                        return false;
                        
                    } else {

                        $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Maintenance Job Added!',
                            message : 'New Maintenance Job has been created successfully!',
                            closeBtn : true,
                            timer : 1000,
                            onHide:function(){

                                $.ajax({
                                    type:"post",
                                    url: 'ajax/insert_maintenance_job.php',
                                    data:'service_date=' + service_date + '&start_time=' + start_time + '&unit=' + unit + '&building=' + building + '&source=' + source + '&address=' + address + '&agent_name=' + agent_name + '&job_title=' + job_title + '&job_description=' + job_description + '&cust_name=' + cust_name + '&cust_mobile=' + cust_mobile + '&cust_email=' + cust_email + '&category=' + category,
                                    success: function(msg) {

                                        // location.href = "maintenance_jobs.php";   

                                    }

                                });                        
                            }
                        });

                    }
                }
            }
        }
    });

});

$(document).on('click', '#add-to-brilion-maintenance', function(){

        var row_id=$(this).data('id'); 

        $.ajax({
            type:"post",
            url: 'ajax/get_maintenance_booking_details.php',   
            data:'row_id='+ row_id,
            success: function(msg) {                
                $('#gen_rec').html(msg);                
            }
        });        

        bootbox.dialog({
            title: "Booking Details",
            message: '<div id="gen_rec"></div>',
            buttons: {
                success: {
                    label: "Schedule",
                    className: "btn-primary",
                    callback: function() {
                        var job_ref = $('#job_id').val();
                        $.ajax({
                            type:"post",
                            url: 'ajax/add_to_brilion_maintenance.php',
                            data:'job_ref='+ job_ref,
                            success: function(msg) {
                                window.location.reload();              
                            }

                        });

                    }
                },
                copy: {
                    label: 'Copy',
                    className: 'btn-info',
                    callback: function(){
                        document.getElementById("copy_me").select();
                        document.execCommand("copy",false);

                        $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Copied!',
                            message : 'The Maintenance details has been copied!',
                            closeBtn : true,
                            timer : 1000,
                            onHide:function(){
                            }
                        });
                    }
                }
            }
        });

    });
    
    $(document).on('click', '#view-my-maintenance-details', function(){

        var row_id=$(this).data('id'); 

        $.ajax({
            type:"post",
            url: 'ajax/get_my_maintenance_booking_details.php',   
            data:'row_id='+ row_id,
            success: function(msg) {                
                $('#gen_rec').html(msg);                
            }
        });        

        bootbox.dialog({
            title: "Booking Details",
            message: '<div id="gen_rec"></div>',
            buttons: {                
                copy: {
                    label: 'Copy',
                    className: 'btn-info',
                    callback: function(){
                        document.getElementById("copy_me").select();
                        document.execCommand("copy",false);

                        $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Copied!',
                            message : 'The Maintenance details has been copied!',
                            closeBtn : true,
                            timer : 1000,
                            onHide:function(){
                            }
                        });
                    }
                }
            }
        });

    });
    
   $(document).on('click', '#mark-paid', function(){

        var row_id=$(this).data('id'); 

       $.ajax({
            type:"post",
            url: 'ajax/get_received_amount.php' ,   
            data:'job_id='+ row_id,
            success: function(msg) {                
                 $('#gen_rec').html(msg);                
            }
        });        

        bootbox.dialog({
            title: "Generate Receipt",
            message: '<div id="gen_rec"></div>',
            buttons: {
                success: {
                    label: "Generate Receipt",
                    className: "btn-primary",
                    callback: function() {
                        var receipt_amount  = $('#receipt_amount').val();
                        var job_ref         = $('#job_ref').val();
                        var payment_type    = $('#payment_type').val();
                        var payment_date    = $('#payment_date').val();
                        var receipt_ref     = $('#receipt_ref').val();
                        var remarks         = $('#finance_remarks').val();

                            $.ajax({
                                type:"post",
                                url: 'ajax/generate_receipt.php',
                                data:'job_ref='+ job_ref + '&receipt_ref='+ receipt_ref +'&receipt_amount='+ receipt_amount + '&payment_type=' + payment_type + '&payment_date=' + payment_date + '&remarks=' + remarks, 

                                success: function(msg) {

                                    $.niftyNoty({
                                            type: 'success',
                                            container : 'floating',
                                            title : 'Receipt Generated',
                                            message : 'receipt has been generated successfully!',
                                            closeBtn : true,
                                            timer : 500,
                                            onHide:function(){

                                                $previous_url = document.referrer;

                                                if ($previous_url === 'https://higitech.me/hybrid/completed_bookings.php') {
                                                    window.location.href='completed_bookings.php';
                                                }else{
                                                    window.location.reload();                                         
                                                }
                                                
                                            }                       
                                        });
                                           
                                }

                            });
                        
                    }
                }
            }
        });
  
    });
    
        $(document).on('click', '#add_staff', function(){

        var Id=$(this).data('id'); 

        $.ajax({
            type:"post",
            url: 'ajax/get_staff_details.php',
            success: function(msg) {                
                 $('#users').html(msg);                
            }
        });      

        bootbox.dialog({
            title: "Create New Staff",
            message: '<div id="users"></div>',
            buttons: {
                success: {
                    label: "Create",
                    className: "btn-primary",
                    callback: function() {  

                        var staff_id         = $('#staff_id').val();
                        var staff_name       = $('#staff_name').val();
                        var staff_category   = $('#staff_category').val();

                        $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Staff Created',
                            message : 'New Staff has been created successfully!',
                            closeBtn : true,
                            timer : 1000,
                            onHide:function(){

                            $.ajax({
                                type:"post",
                                url: 'ajax/insert_new_staff.php',
                                data:'staff_id=' + staff_id + '&staff_name=' + staff_name + '&staff_category=' + staff_category,
                                success: function(msg) {
                                    
                                        location.href = "staffs.php";               
                                    }

                                });                        
                            }
                        });
                    }
                }
            }
        });
  
    });

$(document).on('click', '#assign-crew', function(){

        var row_id=$(this).data('id');

        $.ajax({
            type:"post",
            url: 'ajax/get_staff_list.php',
            data:'row_id='+ row_id,
            
            success: function(msg) {
                $('#staff_table').html(msg);                
            }
        });

        bootbox.dialog({
            title: "Assign Cleaner",
            message:'<div id="staff_table"></div>',
            buttons: {
                success: {
                    label: "Assign",
                    className: "btn-primary",
                    callback: function() {
                        var staff_id = $('#staff_list').val();
                        var driver_id = $('#driver_list').val();
                        var booking_id=$('#bookingid').val();

                        if(staff_id !=''){

                            $.ajax({
                                type:"post",
                                url: 'ajax/assign_staff.php',
                                data:'booking_id='+ booking_id + '&staff_id='+ staff_id+ '&driver_id='+ driver_id, 

                                success: function(msg) {
                                    $.niftyNoty({
                                        type: 'success',
                                        container : 'floating',
                                        title : 'Job Scheduled',
                                        message : 'Job Has been Scheduled successfully!',
                                        closeBtn : true,
                                        timer : 1000,
                                        onHide:function(){
                                           
                                            window.location.reload(); 
                                            
                                        }                       
                                    });              
                                }

                            });
                        }
                        
                    }
                }
            }
        });
    });
    
    

});