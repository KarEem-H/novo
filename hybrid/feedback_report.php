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
                        <h1 class="page-header text-overflow">Feedback Report</h1>
                    </div>
                    
                    <ol class="breadcrumb">
          				<li><a href="index.php"><i class="demo-pli-home"></i></a></li>
  						<li><a href="index.php">Dashboard</a></li>
  						<li><a href="inbound_report.php">Call Report</a></li>	
  						<li><a href="booking_report.php">Bookings Report</a></li>
  						<li><a href="auto_dialer_report.php">Auto Dialer Report</a></li>	
  						<li><a href="cancelled_report.php">Cancellation Report</a></li>
  						<li><a href="landing_page_report.php">Landing Page Report</a></li>	
  						<li><a href="quotation_report.php">Quotation Report</a></li>						
                    </ol>
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
                  
                    <table id="all_feedback_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th class="min-tablet">Id</th>
                              <th class="min-desktop">Feedback Date</th>
                              <th class="min-desktop">Cust Name</th>
                              <th class="min-desktop">Mobile</th>
                              <th class="min-desktop">Cleaning Date</th>
                              <th class="min-desktop">Cleaner</th>
                              <th class="min-desktop">Size of Apartment</th>
                              <th class="min-desktop">Cleaner On Time?</th>
                              <th class="min-desktop">Wearing Uniform?</th>
                              <th class="min-desktop">Good Attitude?</th>
                              <th class="min-desktop">Asked/Followed Instructions?</th>
                              <th class="min-desktop">Complete on Time?</th>
                              <th class="min-desktop">Regular?</th>
                              <th class="min-desktop">Rating</th>
                              <th class="min-desktop">Remarks</th>
                              <th class="min-desktop">Agent</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php 
                        
                        $date = $today_date;
                        $dateArray = date_parse_from_format('d/m/Y', $date);
                        
                        $current_month = $dateArray[month];

                          $sql = mysqli_query($conn,"SELECT t1.customer_id,t1.job_ref,t1.date_of_service,t1.cleaner_name,t1.cleaner_on_time,t1.wearing_uniform,t1.size_of_apartment,t1.good_attitude,t1.asked_followed_instruction,t1.completed_task_on_time,t1.regular,t1.rating,t1.remarks,t1.agent_name,t1.feedback_date,t2.customer_mobile,t2.customer_id,t2.customer_name FROM (SELECT customer_id, job_ref, date_of_service, cleaner_name,cleaner_on_time,size_of_apartment,wearing_uniform,good_attitude,asked_followed_instruction,completed_task_on_time,regular,rating,remarks,agent_name,feedback_date FROM table_feedback) t1 LEFT JOIN (SELECT customer_id, customer_name, customer_mobile FROM table_contacts) t2 ON (t1.customer_id = t2.customer_id)");
                          
                          $tot = count($sql);
                          $serialno=1;
                          if ( $tot > 0) {

                          while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
                            
                              {
                                  $db[] = $row;
                              }   
                                  
                                  foreach ($db as $row) { ?>
                                  <tr>
                                      <td><?php echo $serialno++ ?></td>
                                      <td><?php echo $row['feedback_date'] ?></td>
                                      <td><?php echo $row['customer_name'] ?></td>
                                      <td><?php echo $row['customer_mobile'] ?></td>
                                      <td><?php echo $row['date_of_service'] ?></td>
                                      <td><?php echo $row['cleaner_name'] ?></td>
                                      <td><?php echo $row['size_of_apartment'] ?></td>
                                      <td><?php echo $row['cleaner_on_time'] ?></td>
                                      <td><?php echo $row['wearing_uniform'] ?></td>
                                      <td><?php echo $row['good_attitude'] ?></td>
                                      <td><?php echo $row['asked_followed_instruction'] ?></td>
                                      <td><?php echo $row['completed_task_on_time'] ?></td>
                                      <td><?php echo $row['regular'] ?></td>
                                      <td><?php echo $row['rating'] ?></td>
                                      <td><?php echo $row['remarks'] ?></td>
                                      <td><?php echo $row['agent_name'] ?></td>
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
       $('#all_feedback_table').DataTable({
            "scrollX": true,
            "pagingType": "full_numbers",
            'order': [[0, 'desc']],
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
                  title: 'Feedback Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'csv',
                  title: 'Feedback Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'pdf',
                  title: 'Feedback Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'print',
                  title: 'Feedback Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
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
            var table = $('#all_feedback_table').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').change(function () {
                table.draw();
            });


});


</script>