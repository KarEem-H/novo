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
                        <h1 class="page-header text-overflow">Receipt Report</h1>
                    </div>
                    
                    <ol class="breadcrumb">
                      <li><a href="index.php"><i class="demo-pli-home"></i></a></li>
                      <li><a href="index.php">Dashboard</a></li>            
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

                      <table id="all_jobs_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                  <th class="min-tablet">Id</th>
                                  <th class="min-tablet">Receipt Num#</th>
                                  <th class="min-desktop">Customer ID#</th>
                                  <th class="min-desktop">Customer Name</th>
                                  <th class="min-desktop">Customer Mobile</th>
                                  <th class="min-desktop">Receipt Amount</th>
                                  <th class="min-desktop">Mode of Payment</th>
                                  <th class="min-desktop">Payment Date</th>  
                                  <th class="min-desktop">Comments</th>  
                              </tr>
                          </thead>
                          <tbody>
                            <?php 

                              $sql = mysqli_query($conn,"SELECT id, receipt_ref, cust_id, customer_name, customer_mobile,receipt_amount, payment_date, agent_remarks, payment_mode FROM table_receipt");
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
                                          <td><?php echo $row['receipt_ref'] ?></td>
                                          <td><?php echo $row['cust_id'] ?></td>
                                          <td><?php echo $row['customer_name'] ?></td>
                                          <td><?php echo $row['customer_mobile'] ?></td>
                                          <td><?php echo $row['receipt_amount'] ?></td>
                                          <td><?php echo $row['payment_mode'] ?></td>
                                          <td><?php echo $row['payment_date'] ?></td>
                                          <td><?php echo $row['agent_remarks'] ?></td>
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
        
       $('#all_jobs_table').DataTable({
            "scrollX": true,
            "pagingType": "full_numbers",
            'pageLength': 10,
            'lengthMenu': [[10, 20, 25, 50, -1], [10, 20, 25, 50, 'All']],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            },
            dom: 'Blfrtip',
            buttons: [{
                  extend: 'excel',
                  title: 'Receipt Report - <?php echo $today_date ?> - Hybrid CRM',
                  footer: true
                  
              },
              {
                  extend: 'csv',
                  title: 'Receipt Report - <?php echo $today_date ?> - Hybrid CRM',
                  footer: true
              },
              {
                  extend: 'pdf',
                  title: 'Receipt Report - <?php echo $today_date ?> - Hybrid CRM',
                  footer: true
              },
              {
                  extend: 'print',
                  title: 'Receipt Report - <?php echo $today_date ?> - Hybrid CRM',
                  footer: true
              },
            ]
        });


       $.fn.dataTable.ext.search.push(
          function (settings, data, dataIndex) {
              var min = $('#min').datepicker("getDate");
              var max = $('#max').datepicker("getDate");
              var startDate = new Date(data[7].replace( /(\d{2})-(\d{2})-(\d{4})/, "$2/$1/$3"));
              console.log(startDate);
              if (min == null && max == null) { return true; }
              if (min == null && startDate <= max) { return true;}
              if(max == null && startDate >= min) {return true;}
              if (startDate <= max && startDate >= min) { return true; }
              return false;
          }
        );

       
        $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
        $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
        var table = $('#all_jobs_table').DataTable();

        // Event listener to the two range filtering inputs to redraw on input
        $('#min, #max').change(function () {
            table.draw();
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


});


</script>