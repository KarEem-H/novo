<?php include "header.php" ?>
<?php 

if ($_SESSION['ADMIN_ID']['ID'] == "") {
    echo "<script type='text/javascript'>location.href = 'login.php';</script>";
}

$cleaners_names = '';
$events = '';


$staff_list = mysqli_query($conn,"SELECT * FROM table_staffs WHERE staff_status = 'Active' AND staff_category='Cleaning'");

 while ($row2 = mysqli_fetch_array($staff_list, MYSQLI_ASSOC))
                            
      {
          $cleaner_list[] = $row2;

      }

    foreach($cleaner_list as $staff_names){
        
        $cleaners_names.="{ id: '".$staff_names['staff_id']."', title: '".$staff_names['staff_name']."', image: '".'img/cleaners/'.$staff_names['staff_id'].".jpg' },";
    }

$task_list = mysqli_query($conn,"SELECT
t1.id,
t1.booking_id,
t1.assigned_staff_name,
t1.assigned_staff_id,
t1.cleaning_date,
t1.cleaning_slot,
t1.start_time,
t1.end_time,
t1.`status`,
t3.`customer_name`,
t3.customer_mobile,
t2.address,
t2.area,
t2.total,
t2.service_type,
t2.special_req
FROM(SELECT * FROM table_assigned_task WHERE `status` = 'Assigned') t1 LEFT JOIN (SELECT cust_id,job_ref,area,address,service_type,special_req,total FROM table_booking WHERE cleaner_allocated = 'Yes') t2 ON (t2.job_ref = t1.booking_id) LEFT JOIN (SELECT customer_id,customer_name,customer_mobile FROM table_contacts) t3 ON (t3.customer_id = t2.cust_id)");


    while ($row3 = mysqli_fetch_array($task_list, MYSQLI_ASSOC))
                            
      {
          $tasklist[] = $row3;

      }

    foreach($tasklist as $task_names){

        $customer_address = rtrim(mysqli_real_escape_string($conn,$task_names['address']));

      $details = $task_names['customer_name'].'\n'.$task_names['customer_mobile'].'\n'.$task_names['area'].'\n AED '.$task_names['total'];
        
       $events .= "{ id: '".$task_names['id']."', resourceId: '".$task_names['assigned_staff_id']."', start:'".$task_names['cleaning_date']." ".$task_names['start_time']."', end: '".$task_names['cleaning_date']." ".$task_names['end_time']."', title: '".$details."', description:'".$customer_address."', color: '#0095ff', booking_id:'".$task_names['booking_id']."'},";
    }

?>
<?php include "menubar.php" ?>
<style>
    .fc-widget-content .fc-event-container {
        height: 90px !important;
    }
    .fc-timeline-event{
        height:85px !important;
    }
    .fc-title{
        font-size:14px !important;
    }
    .modal-title{
      text-align: center !important;
    }
</style>


        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

                    <div class="panel">
                            <div class="panel-body">
                                <div class="fixed-fluid">
                                    
                                    <div class="fluid">
                                        <!-- Calendar placeholder-->
                                        <!-- ============================================ -->
                                        <div id="calendar_full"></div>
                                        <!-- ============================================ -->
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

<?php 
    
    $agent_role = $_SESSION['ADMIN_ID']['ROLE'];
    
    if($agent_role == 'Administrator'){
    
        include "admin_sidebar.php";
    
    }else{
        
        include "sidebar.php";
        
    }

?>

<?php include "footer.php" ?>

<script type="text/javascript">
 var CalendarFull = function() { // dom ready
  return {
        //main function to initiate the module
  init: function() {
  var todayDate = moment().startOf('day');
  var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
  var TODAY = todayDate.format('YYYY-MM-DD');
  var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

  $('#calendar_full').fullCalendar({
    resourceAreaWidth: 250,
    editable: true,
    draggable: true,
    overlap: false,
    scrollTime: '00:00',
    customButtons: {
    driver_schedule: {
          text: 'Driver Schedule',
          click: function(view,element) {
            var start = $('#calendar_full').fullCalendar('getDate').format('YYYY-MM-DD');
             var excel_data = $('#driver_schedule').html(); 
             var page = "ajax/download_driver_schedule.php?selected_date="+start;  
             window.location = page; 
          }
        },
        availability: {
          text: 'Availability',
          click: function(view,element) {
            var start1 = $('#calendar_full').fullCalendar('getDate').format('YYYY-MM-DD');
             // var excel_data = $('#driver_schedule').html(); 
             var page = "availability.php?selected_date="+start1;  
             window.location = page; 
          }
        }
      },
    header: {
      left: 'today prev,next driver_schedule availability',
      center: 'title',
      right: 'timelineDay'
    },
    defaultView: 'timelineDay',
    allDaySlot: false,
    axisFormat: 'h:mm A',
    timeFormat: 'h:mm ',
    minTime: '08:00:00',
    maxTime: '21:00:00',
    eventLimit: true, // allow "more" link when too many events
    navLinks: true,
    resourceLabelText: 'Cleaners',
    contentHeight: 580,
    timeFormat: 'hh(:mm) A',
    resources: [
      <?php echo $cleaners_names; ?>
    ],
    events: [
      <?php echo $events; ?>
    ],

    resourceRender: function(resourceObj, labelTds, bodyTds) {
        // labelTds.css('background', 'blue');
        
        newtitle= '<div><div class="fc-cell-content"><span class="fc-expander-space"><span class="fc-icon"></span></span><span class="fc-cell-text" style="font-weight:bold;"><img src="'+resourceObj.image+'" height="45" width="45" class="resource-pic" />'+resourceObj.title+'</span></div></div>';
        //labelTds.html('Test');
        //labelTds.html='Test';
        //resourceObj.title ='<b>'+resourceObj.title+'</b>';
        //console.log(resourceObj.title);
        labelTds.html(newtitle);
    },
     eventRender: function(event, element) {
         element.data('content', event.description);
         element.data('placement', 'top');               
         // mApp.initPopover(element);
         element.attr('href', 'javascript:void(0);');
              element.click(function() {

                  var row_id= event.id;
                  var staff_id= event.resourceId;

                    $.ajax({
                        type:"post",
                        url: 'ajax/get_calendar_details.php',
                        data:'row_id='+ row_id +'&staff_id='+staff_id,
                        
                        success: function(msg) {
                            $('#calendar_details').html(msg);                
                        }
                    });

                  bootbox.alert({
                        message: '<div id="calendar_details"></div>',
                        title: '<span style="color: #272B81;  font-weight: bold">VISIT DETAILS</span>',
                  });
              });
    },
    eventDragStart: function(event) {
      var myResource = $('#calendar_full').fullCalendar('getResourceById', event.resourceId);
      var myTime = $('#calendar_full').fullCalendar('getResourceById', event.start);
      old_staff_id = event.resourceId; 
      old_start_time = event.start.format();; 
   },
    eventDrop : function(event,delta,revertFunc) {
        var start= event.start.format();
        var defaultDuration = moment.duration($('#calendar_full').fullCalendar('option', 'defaultTimedEventDuration'));
        var endd = event.end || event.start.clone().add(defaultDuration);
              
    
   
    var end = endd.format();
    var row_id= event.id;
    var staff_id= event.resourceId;
    var booking_id= event.booking_id;
    
    
    // console.log('end is ' + endd.format());
    // console.log('start is ' + start);
    // console.log('staff_id is ' + staff_id);
    // console.log('Booking_id is ' + booking_id);

    $.ajax({
            type:"post",
            url: 'ajax/update_calendar_details.php',
            data:'row_id='+ row_id +'&staff_id='+ staff_id+ '&start='+ start + '&end=' +end +'&old_staff_id='+old_staff_id+ '&booking_id=' + booking_id+ '&old_start=' + old_start_time,            
            success: function(msg) {

                console.log(msg);
                var val = msg;


                if(val == '3'){
                    $.niftyNoty({
                        type: 'warning',
                        container : 'floating',
                        title : 'Not able to Re-Assign',
                        message : 'Please check the schedule and then Re-Assign!',
                        closeBtn : true,
                        timer : 2000,
                        onHide:function(){
                            location.reload();
                        }
                    });
                }

                if(val == '1'){
                    $.niftyNoty({
                        type: 'success',
                        container : 'floating',
                        title : 'Re-Assigned Successfully',
                        message : 'This Job Has been Re-Assigned!',
                        closeBtn : true,
                        timer : 1500,
                        onHide:function(){
                            location.reload();
                        }
                    });
                } 

                if(val != '1' && val != '3'){
                    $.niftyNoty({
                        type: 'warning',
                        container : 'floating',
                        title : 'Not able to Re-Assign',
                        message : 'Please check the schedule and then Re-assign!',
                        closeBtn : true,
                        timer : 2000,
                        onHide:function(){
                            location.reload();
                        }
                    });
                }               
            }
        });

    },
    
  });
    }
  };
}();

// readjust sizing after font load
jQuery(document).ready(function() {
  CalendarFull.init();
});
</script>