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
                        <h1 class="page-header text-overflow">Agent Call Report</h1>
                    </div>
                    
                    <ol class="breadcrumb">
          				<li><a href="index.php"><i class="demo-pli-home"></i></a></li>
  						<li><a href="index.php">Dashboard</a></li>
  						<li><a href="booking_report.php">Bookings Report</a></li>
  						<li><a href="quotation_report.php">Quotation Report</a></li>
  						<li><a href="auto_dialer_report.php">Auto Dialer Report</a></li>	
  						<li><a href="cancelled_report.php">Cancellation Report</a></li>
  						<li><a href="landing_page_report.php">Landing Page Report</a></li>	
  						<li class="active"><a href="inbound_report.php">Call Report</a></li>
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
                  
                    <table id="all_calls_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th class="min-tablet">Id</th>
                              <th class="min-desktop">Date</th>
                              <th class="min-desktop">Number</th>
                              <th class="min-desktop">Agent Name</th>
                              <th class="min-desktop">Extension</th>
                              <th class="min-desktop">Call Duration</th>
                              <th class="min-desktop">Description</th>
                              <th class="min-desktop">Call Start Time</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php 
                        
                        $date = $today_date;
                        $dateArray = date_parse_from_format('d/m/Y', $date);
                        
                        $current_month = $dateArray[month];

                          $sql = mysqli_query($conn,"SELECT id,call_date,calldatetime,call_time,contactnumber,description,agentextension,callduration,agent_name FROM calls WHERE agentextension = '102' || agentextension = '103' || agentextension = '104' || agentextension = '105' || agentextension = '106' || agentextension = '108' ORDER BY id DESC");
                          
                          $tot = count($sql);
                          $serialno=1;
                          if ( $tot > 0) {

                          while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
                            
                              {
                                  $db[] = $row;
                              }   
                                  
                                  foreach ($db as $row) {  
                                     $callDate = $row['calldatetime'];
                                    $calldate = explode( ' ', $callDate );
                                    $call_date = $calldate[0];
                                    $call_time = $calldate[1];
                                    $call_zone = $calldate[2];    

                                      ?>
                                  <tr>
                                      <td><?php echo $serialno++ ?></td>
                                      <td><?php echo $row['call_date'] ?></td>
                                      <td><?php echo $row['contactnumber'] ?></td>
                                      <td><?php echo $row['agent_name'] ?></td>
                                      <td><?php echo $row['agentextension'] ?></td>
                                      <td><?php echo $row['callduration'] ?></td>
                                      <?php if($row['description'] !=''){ ?>
                                      <td><?php echo $row['description'] ?></td>
                                      <?php }else{ ?>
                                      <td>Auto Dialer</td>
                                      <?php } ?>
                                      
                                      <td><?php echo $call_time.' '.$call_zone ?></td>
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
       $('#all_calls_table').DataTable({
            "scrollX": true,
            "pagingType": "full_numbers",
            'order': [[1, 'desc']],
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
                  title: 'Agent Call Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'csv',
                  title: 'Agent Call Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'pdf',
                  title: 'Agent Call Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'print',
                  title: 'Agent Call Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
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
            var table = $('#all_calls_table').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').change(function () {
                table.draw();
            });


});


</script>