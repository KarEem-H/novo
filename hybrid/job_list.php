<?php include "header.php" ?>
<?php 

if ($_SESSION['ADMIN_ID']['ID'] == "") {
    echo "<script type='text/javascript'>location.href = 'login.php';</script>";
}

?>
<?php include "menubar.php" ?>

<style type="text/css">
  .dt-button {
    padding: 10px;
    border: 2px solid;
    margin: 5px;
    display: none;
}

.dataTables_length{
  width: 30%;
  float: left;
  padding-top: 5px;
}

@media screen and (max-width: 767px){

  .dataTables_length{
    display: none !important;
  }
}
</style>

  
  <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                 <div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                      <div class="col-md-6">
                        <h1 class="page-header text-overflow">Future Bookings</h1>
                      </div>
                      <div class="col-md-6" style="text-align: right">
                        <a class="btn btn-info" id="push_job_data">Push Data</a>
                      </div>
                    </div>                    
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->
                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
              <!-- Contact Toolbar -->
              <!---------------------------------->
              <div class="panel">
                <div class="panel-body">
                  <div id="demo-custom-toolbar2" class="table-toolbar-left col-sm-12 col-md-12" style="padding: 18px;" width="100%">
                        <a href="#!" class="btn btn-default btn-active-purple btn-excel">Excel</a>
                        <a href="#!" class="btn btn-default btn-active-purple btn-csv">CSV</a>
                        <a href="#!" class="btn btn-default btn-active-purple btn-pdf">PDF</a>
                        <a href="#!" class="btn btn-default btn-active-purple btn-print">Print</a>
                        <div class="btn-group mar-rgt" id="date_range" style="margin-left: 15px !important;">
                            <input class="date_range_filter date form-control" type="text" id="min" placeholder="From" />
                        </div>
                        <div class="btn-group mar-rgt" id="date_range" style="margin-left: 0px;">
                            <input class="date_range_filter date form-control" type="text" placeholder="To" id="max" />
                        </div>
                    </div>
                  
                    <table id="future_leads_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th data-sortable="true">ID</th>
                                <th data-sortable="true">Job Date</th>
                                <th data-sortable="true">Job Time</th>
                                <th data-sortable="true">Customer Name</th>
                                <th data-sortable="true">Customer Mobile</th>
                                <th data-align="center" data-sortable="true">Address</th>
                                 <th data-align="center" data-sortable="true">Service Type</th>
                                <th data-align="center" data-sortable="true">Num of SA</th>
                                <th data-align="center" data-sortable="true">Num of Hours</th>
                                <th data-align="center" data-sortable="true">Total Hours</th>
                                <th data-align="center" data-sortable="true" >Job Amount</th>
                                <th data-align="center" data-sortable="true">Booking Status</th>
                                <th data-align="center" data-sortable="true">Agent</th>
                                <th data-align="center" data-formatter="statusFormatter1">Schedule</th>
                                <th data-align="center" data-formatter="statusFormatter2">View</th>
                                <th data-align="center" data-formatter="statusFormatter">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php

                        $today_date = date("Y-m-d");
                        date_default_timezone_set("Asia/Dubai");

                        $sql = mysqli_query($conn,"SELECT t1.id,t1.cust_id,t1.cleaning_date,t1.cleaning_time,t1.total,t1.booking_status,t2.customer_mobile,t2.customer_id,t2.customer_name,t1.address,t1.service_type,t1.add_to_brilion,t1.agent_name,t1.cleaner_allocated,t1.num_of_hours,t1.num_of_cleaners FROM (SELECT id, cust_id, cleaning_date, cleaning_time,service_type, total, booking_status, address, add_to_brilion,agent_name,cleaner_allocated,num_of_hours,num_of_cleaners FROM table_booking WHERE `approved_by_coordinator` != 'Yes' AND `approved_by_scheduler` != 'Yes' AND cleaning_date > '$today_date' AND `booking_status` !='Cancelled' AND agent_name !='' AND cust_id !='') t1 LEFT JOIN (SELECT customer_id, customer_name, customer_mobile,address FROM table_contacts) t2 ON (t1.cust_id = t2.customer_id) ORDER BY t1.cleaning_date ASC");

                        $tot = count($sql);
                          $serialno=1;
                          if ( $tot > 0) {

                          while ($row = $sql->fetch_assoc()) {

                                $db[] = $row;
                            }   
                                  
                          foreach ($db as $row) {        

                              ?>

                          <tr>
                              <td><?php echo $serialno++ ?></td>
                              <td><?php echo $row['cleaning_date'] ?></td>
                              <td><?php echo $row['cleaning_time'] ?></td>
                              <td><?php echo $row['customer_name'] ?></td>
                              <td><?php echo $row['customer_mobile'] ?></td>
                              <td style="width: 18%"><?php echo $row['address'] ?></td>
                              <td><?php echo $row['service_type'] ?></td>
                              <td><?php echo $row['num_of_cleaners'] ?></td>
                              <td><?php echo $row['num_of_hours'] ?></td>
                              <td><?php echo $row['num_of_hours'] * $row['num_of_cleaners'] ?></td>
                              <td><?php echo $row['total'] ?></td>
                              <td><?php echo $row['booking_status'] ?></td>
                              <td><?php echo $row['agent_name'] ?></td>
                              <?php 
                              if ($row['cleaner_allocated'] == "Yes") {

                                ?>
                                  <td>Job Scheduled</td>
                                  <?php
                              }

                              if ($row['cleaner_allocated'] != "Yes") { ?>

                                  <td><button id="assign-crew" data-id="<?php echo $row['id'] ?>" class="btn btn-info"> Schedule </button></td> <?php

                              }

                              ?>


                                  <td><a class="btn btn-sm btn-default btn-hover-success fa fa-eye add-tooltip" href="#" data-original-title="View" data-container="body" data-id="<?php echo $row['id'] ?>" id="view-my-booking-btn-bootbox"></a></td>

                                  <?php 
                                      if ($row['booking_status'] == "Completed") {

                                        ?>
                                          <td><a class="btn btn-sm btn-default btn-hover-danger demo-pli-trash add-tooltip" href="#" data-original-title="Cancel Job" data-container="body" data-id="<?php echo $row['id'] ?>" id="mark-cancelled-btn-bootbox"></a></td>
                                          <?php
                                      }

                                      if ($row['booking_status'] != "Completed") { ?>

                                          <td><a class="btn btn-sm btn-default btn-hover-info demo-pli-check add-tooltip" href="#" data-original-title="Mark Completed" data-container="body" data-id="<?php echo $row['id'] ?>" id="mark-completed-btn-bootbox"></a></td> <?php

                                      }

                              ?>
                                 
                          </tr>    
                                      
                      <?php }                                 
                              
                            }

                        ?>
                                               
                      </tbody>
                  </table>

                    
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

  $(document).ready(function() {
       $('#future_leads_table').DataTable({
            "scrollX": true,
            "pagingType": "full_numbers",
            'order': [[1, 'asc']],
            'pageLength': 10,
            'lengthMenu': [10, 20, 25, 30],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            },
            dom: 'Blfrtip',
            buttons: [{
                  extend: 'excel',
                  title: 'Future Bookings - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'csv',
                  title: 'Future Bookings - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'pdf',
                  title: 'Future Bookings - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'print',
                  title: 'Future Bookings - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
            ]
        });

        $('.btn-csv').click(function(){
          $('.buttons-csv').trigger('click');
        });
        $('.btn-excel').click(function(){
          $('.buttons-excel').trigger('click');
        });
        $('.btn-pdf').click(function(){
          $('.buttons-pdf').trigger('click');
        });   
        $('.btn-print').click(function(){
          $('.buttons-print').trigger('click');
        });


       $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            var min = $('#min').datepicker("getDate");
            var max = $('#max').datepicker("getDate");
            var startDate = new Date(data[1].replace( /(\d{2})-(\d{2})-(\d{4})/, "$2/$1/$3"));
            if (min == null && max == null) { return true; }
            if (min == null && startDate <= max) { return true;}
            if(max == null && startDate >= min) {return true;}
            if (startDate <= max && startDate >= min) { return true; }
            return false;
          }
        );

       
        $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
        $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
        var table = $('#future_leads_table').DataTable();

        // Event listener to the two range filtering inputs to redraw on input
        $('#min, #max').change(function () {
            table.draw();
        });


});


  $('#push_job_data').on('click',function(){

    var Loader = "<div id='loaderimg' style=' width:100%; margin-top:50px; text-align: center;'>"+
                                '<img id="loader-img" alt="Loading Data" src="img/preloader.gif" align="center" />'+
                        "</div>";

      $('#dashboard_data').append(Loader);

      $.ajax({
            type: 'POST',
            url: 'ajax/push_schedule_data.php',
            success:function(){
              $("#loaderimg").remove();
                window.location.href = 'job_list.php';
            }
            
        });

    });

</script>



