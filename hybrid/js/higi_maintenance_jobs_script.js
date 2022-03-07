$(document).ready(function(){

     $maintenance_access = localStorage.getItem('maintenance');

        if($maintenance_access == '1'){
    
         $("#upcoming, #inprogress, #completed").sortable({
                connectWith: ".tasklist",
                placeholder: "task-placeholder",
                forcePlaceholderSize: true,
                update: function (event, ui) {
                    
                    var id = ui.item.attr("id");
                    var target_id = this.id;                
                    $("#demo-output").html(id + "Target = " + target_id);
                    if (this === ui.item.parent()[0]) {
    
                        update_job_status(id,target_id);
                        
                    }
                }
            }).disableSelection();
    
        }

         function update_job_status(id,target){

            var job_id = id;
            var target = target;

            $.ajax({  
                type: "POST",  
                url: "ajax/update_maintenance_job_status.php",
                data: "job_ref=" + job_id + "&target=" + target,
                success: function(response){ 
                        
                        $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Status Updated!',
                            message : 'You have successfully updated the job status!',
                            closeBtn : true,
                            timer : 1200,
                            onHide:function(){
                                $("#upcoming").html('');
                                $("#inprogress").html('');
                                $("#completed").html('');
                                GetData(); 
                            }
                        }); 
                    }

               });
            
            
         }   


            GetData();

            function GetData(){

                $.ajax({  
                    type: "POST",  
                    url: "ajax/get_higi_maintenance_job_list.php",
                    dataType: 'JSON',
                    success: function(response){                      

                     var upcoming_jobs = response[0].new_jobs;
                     var inprogress_jobs = response[0].inprogress_jobs;
                     var completed_jobs = response[0].completed_jobs;
                     
                    $("#upcoming").append(upcoming_jobs);
                    $("#inprogress").append(inprogress_jobs);
                    $("#completed").append(completed_jobs);

                    }

                });

            }


            $(document).on('click', '.view_notes', function(){

                var job_ref=$(this).data('id'); 
                var job_title=$(this).data('value'); 

                $.ajax({
                    type:"post",
                    url: 'ajax/get_maintenance_notes.php',   
                    data:'job_ref='+ job_ref+ '&job_title='+job_title,
                    success: function(msg) {                
                        $('#notes_div').html(msg);                
                    }
                });        

                bootbox.dialog({
                    title: "#" +job_ref + "-" + job_title,
                    message: '<div id="notes_div"></div>',
                    buttons: {
                        success: {
                            label: "close",
                            className: "btn-primary",
                            callback: function() {
                                $("#upcoming").html('');
                                $("#inprogress").html('');
                                $("#completed").html('');
                                GetData(); 
                            } 
                            
                        }
                    }
                });

            });


        $(document).on('click', '.reject_job, .on_hold', function(){

        var job_ref = $(this).data('id');
        var job_status = $(this).data('value');

        bootbox.dialog({
            title: "Reason to mark " + job_status,
            message:'<div class="row"> '+ 
            '<div class="col-md-12"> ' +
            '<form class="form-horizontal"> ' +
            '<div class="form-group"> ' +
            '<label class="col-md-4 control-label" for="name">Remarks/Comments</label> ' +
            '<div class="col-md-6"> ' +
            '<textarea id="reject_reason" class="form-control input-md"></textarea>' +
            '<input type="hidden" id="job_status" class="form-control input-md" value="'+job_status+'">' +
            '<input type="hidden" id="job_ref" class="form-control input-md" value="'+job_ref+'">' +
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
                        var job_ref = $('#job_ref').val();
                        var job_status = $('#job_status').val();
                        var reject_reason = $('#reject_reason').val();

                        if (reject_reason == "" || reject_reason == null){
                            if(reject_reason == "")
                            {
                                jQuery("#reject_reason").css({"border-color": "#e21b20", "border-width":"2px", "border-style":"double"});

                            }

                            jQuery('html,body').animate({ scrollTop: 200 }, 'slow');

                            return false;
                        } else {

                            $.ajax({
                                type:"post",
                                 url: 'ajax/reject_hold_maintenance_job.php',   
                                 data:'job_ref='+ job_ref + '&reject_reason=' + reject_reason + '&job_status=' + job_status,
                                success: function(msg) {  

                                $.niftyNoty({
                                        type: 'success',
                                        container : 'floating',
                                        title : 'Status Updated!',
                                        message : 'You have successfully updated the job status!',
                                        closeBtn : true,
                                        timer : 1000,
                                        onHide:function(){
                                            $("#upcoming").html('');
                                            $("#inprogress").html('');
                                            $("#completed").html('');
                                            GetData(); 
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


    $(document).on("click", ".upload_photos", function(){

            var job_id = $(this).data('id');
            var job_status = $(this).data('value');

            bootbox.dialog({
                title: "Job Completed Photos and Report - #" + job_id,
                message: '<div id="maintenance_completion_photos">'+
                                '<form id="completion_photos" action="ajax/upload_maintenance_photos.php?jid='+job_id +'" class="dropzone">'+
                                '<div class="dz-default dz-message">'+
                                    '<div class="dz-icon">'+
                                        '<i class="demo-pli-upload-to-cloud icon-5x"></i>'+
                                    '</div>'+
                                    '<div>'+
                                        '<span class="dz-text">Drop files to upload</span>'+
                                        '<p class="text-sm text-muted">or click to pick manually</p>'+
                                    '</div>'+
                                '</div>'+
                                '<div class="fallback">'+
                                    '<input name="file" type="file" multiple>'+
                                '</div>'+
                            '</form>'+
                        '</div>',
                buttons: {
                    confirm: {
                        label: "close"
                    }
                }

            });
            Dropzone.autoDiscover = false;
            try {
                var myDropzone = new Dropzone("#completion_photos" , {
                    paramName: "file", // The name that will be used to transfer the file
                    maxFilesize: 2, // MB
                    addRemoveLinks : false,
                    acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf,.docx,.mp4,.jfif",
                    success: function( file, response ){                       

                    }
                });
            } catch(e) {
              //  alert('Dropzone.js does not support older browsers!');
            }
           
            
        });


    $(document).on("click", ".completion_gallery", function(){

        var job_id = $(this).data('id');
        var job_title = $(this).data('value');

        $.ajax({
            url : "ajax/get_maintenance_completion_photos.php",
            asynch : true,
            cache : false,
            data:'job_id='+ job_id,
            success: function (data) {
               my_data = data;                

                bootbox.dialog({
                title: "Job Completion Photos - " + job_id,
                message: '<div id="completion_photos" style="display:none">'+my_data+'</div><div id="reports"></div>',
                buttons: {
                    confirm: {
                        label: "close"
                    }
                }
            });                    

            $.ajax({
                url: 'ajax/get_maintenance_completion_docx.php',   
                asynch : true,
                cache : false,
                data:'job_id='+ job_id,
                success: function(msg) {
                    $("#reports").html(msg);                                  
                }
            }); 

            $("#completion_photos").unitegallery({
                tile_enable_shadow: false
            });


            }
        });
                
    });
    
    $(document).on('click', '.approve_quote', function(){

        var Id=$(this).data('id');  
        var mid=$(this).data('value');  

        $.ajax({
            type:"post",
            url: 'ajax/approve_maintenance_quotation_status.php',   
            data:'id='+ Id + '&mid=' + mid,
            success: function(msg) {                
                $('#quote_status').html(msg);                
            }
        });    

        bootbox.dialog({
            title: "Approve Quotation",
            message: '<div id="quote_status"></div>',
            buttons: {
                success: {
                    label: "Update",
                    className: "btn-primary",
                    callback: function() {
                        var Id                  = $('#Id').val();                        
                        var mid                 = $('#mid').val();                        
                        var quotation_status    = $('#quotation_status').val();
                        var agent_remarks       = $('#agent_remarks').val();
                        var service_date        = $('#service_date').val();
                        var start_time          = $('#start_time').val();
                        var end_time            = $('#end_time').val();

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
                                    url: 'ajax/update_maintenance_quotation_status.php',
                                    data:'Id=' + Id + '&quotation_status=' + quotation_status + '&agent_remarks=' + agent_remarks + '&service_date=' + service_date + '&start_time=' + start_time + '&end_time=' + end_time + '&mid=' + mid,
                                    success: function(msg) {
                                        location.href = "whitespot_maintenance_jobs.php";               
                                    }

                                });

                            }                        
                    }
                }

            }
        });

    });
    
    $(document).on('click', '.approve_clear_maintenance_job', function(){

        var job_ref = $(this).data('id');
        
        bootbox.dialog({
            title: "Approve and Clear Job",
            message:'Are You Sure? Do you want to approve and clear this job?'+
            '<input type="hidden" id="mid" class="form-control input-md" value="'+job_ref+'">',
            buttons: {
                success: {
                    label: "Yes",
                    className: "btn-primary",
                    callback: function() {
                        var mid = $('#mid').val();

                        $.ajax({
                            type:"post",
                            url: 'ajax/approve_and_clear_maintenance_job.php' ,   
                            data:'mid='+ mid,

                            success: function(msg) {
                                $("#upcoming").html('');
                                $("#inprogress").html('');
                                $("#completed").html('');
                                GetData();              
                            }
                        });                       
                    }
                }
            }
        });
    });


// DOCUMENT END - ADD SCRIPTS ABOVE THIS

});