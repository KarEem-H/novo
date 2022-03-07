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
                        <h1 class="page-header text-overflow">Cancelled Jobs Report</h1>
                    </div>
                    
                    <ol class="breadcrumb">
  						<li><a href="index.php"><i class="demo-pli-home"></i></a></li>
  						<li><a href="index.php">Dashboard</a></li>
  						<li><a href="inbound_report.php">Call Report</a></li>	
  						<li><a href="booking_report.php">Bookings Report</a></li>
  						<li><a href="quotation_report.php">Quotation Report</a></li>	
  						<li><a href="landing_page_report.php">Landing Page Report</a></li>
  						<li><a href="auto_dialer_report.php">Auto Dialer Report</a></li>	
  						<li class="active"><a href="cancelled_report.php">Cancellation Report</a></li>
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
                  
                    <table id="all_cancelled_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th class="min-tablet">Id</th>
                              <th class="min-desktop">Job Date</th>
                              <th class="min-desktop">Customer Name</th>
                              <th class="min-desktop">Customer Mobile</th>
                              <th class="min-desktop">Address</th>
                              <th class="min-desktop">Job Amount</th>
                              <th class="min-desktop">Booking Status</th>
                              <th class="min-desktop">Agent Handling</th>
                              <th class="min-desktop">Reason</th>
                              <th class="min-desktop">Remarks</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php 
                        
                        $date = $today_date;
                        $dateArray = date_parse_from_format('d/m/Y', $date);
                        
                        $current_month = $dateArray[month];

                          $sql = mysqli_query($conn,"SELECT t1.id,t1.cust_id,t1.cleaning_date,t1.total,t1.booking_status,t1.agent_name,t2.customer_mobile,t2.customer_id,t2.customer_name,t2.address,t1.reject_reason,t1.agent_remark FROM (SELECT id, cust_id, cleaning_date, total, booking_status,agent_name,reject_reason,agent_remark FROM table_booking WHERE booking_status = 'Cancelled') t1 LEFT JOIN (SELECT customer_id, customer_name, customer_mobile, address FROM table_contacts) t2 ON (t1.cust_id = t2.customer_id)");
                          
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
                                      <td><?php echo $row['cleaning_date'] ?></td>
                                      <td><?php echo $row['customer_name'] ?></td>
                                      <td><?php echo $row['customer_mobile'] ?></td>
                                      <td><?php echo $row['address'] ?></td>
                                      <td><?php echo $row['total'] ?></td>
                                      <td><?php echo $row['booking_status'] ?></td>
                                      <td><?php echo $row['agent_name'] ?></td>
                                      <td><?php echo $row['reject_reason'] ?></td>
                                      <td><?php echo $row['agent_remark'] ?></td>
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
       $('#all_cancelled_table').DataTable({
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
                  title: 'Cancelled Jobs Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'csv',
                  title: 'Cancelled Jobs Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'pdf',
                  title: 'Cancelled Jobs Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'print',
                  title: 'Cancelled Jobs Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
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
            var table = $('#all_cancelled_table').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').change(function () {
                table.draw();
            });


});


</script>