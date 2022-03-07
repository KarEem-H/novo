<?php include "header.php"; 

?>
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
                        <h1 class="page-header text-overflow">Customer List</h1>
                      </div>
                      <!--<div class="col-md-6" style="text-align: right">-->
                      <!--  <a class="btn btn-primary" id="sync_revenue">Sync Revenue</a>-->
                      <!--  <a class="btn btn-success" id="sync_receipt">Sync Receipt</a>-->
                      <!--</div>-->
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content" style="padding-top:0px">
                    
          <div class="panel">
              <!--<div class="panel-heading">-->
              <!--    <h3 class="panel-title">User List</h3>-->
              <!--</div>-->
              <div class="panel-body">
                  <div id="demo-custom-toolbar2" class="table-toolbar-left col-sm-12 col-md-12" style="padding: 18px;" width="100%">
                                <a href="#!" class="btn btn-default btn-active-purple btn-excel">Excel</a>
                                <a href="#!" class="btn btn-default btn-active-purple btn-csv">CSV</a>
                                <a href="#!" class="btn btn-default btn-active-purple btn-pdf">PDF</a>
                                <a href="#!" class="btn btn-default btn-active-purple btn-print">Print</a>
                          </div>
                      
                  <table id="customer_list_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th class="min-tablet">Id</th>
                              <th class="min-desktop">Customer Ref</th>
                              <th class="min-desktop">Name</th>
                              <th class="min-desktop">Mobile</th>
                              <th class="min-desktop">Source</th>
                              <th class="min-desktop">Revenue</th>
                              <th class="min-desktop">Paid</th>
                              <th class="min-desktop">Outstanding</th>
                              <th class="min-desktop">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php 

                          $sql = mysqli_query($conn,"SELECT t3.customer_id,t3.customer_name, t3.customer_mobile, t3.primary_source,t1.booking_count, t1.revenue,t2.paid FROM (SELECT customer_id,customer_name, customer_mobile, primary_source FROM table_contacts WHERE customer_id!= '' GROUP BY customer_id ORDER BY customer_id) t3 LEFT JOIN (SELECT cust_id, COUNT(id) as booking_count,sum(total) as revenue FROM table_booking GROUP BY cust_id ORDER BY cust_id) t1 ON (t3.customer_id = t1.cust_id) LEFT JOIN (SELECT SUM(receipt_amount) as paid, cust_id FROM table_receipt GROUP BY cust_id) t2 ON (t2.cust_id = t1.cust_id) WHERE t1.booking_count > '0'");
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
                                      <td><?php echo $row['customer_id'] ?></td>
                                      <td><?php echo $row['customer_name'] ?></td>
                                      <td><?php echo $row['customer_mobile'] ?></td>
                                      <td><?php echo $row['primary_source'] ?></td>
                                      <td><?php echo ROUND($row['revenue'],'2') ?></td>
                                      <td><?php echo ROUND($row['paid'],'2') ?></td>
                                      <td><?php echo ROUND($row['revenue'] - $row['paid'],'2') ?></td>
                                      
                                      <td><a class="btn btn-primary" href="view_customer_profile.php?cid=<?php echo $row['customer_id'];?>">View</a></td>
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

    if($agent_role == 'Administrator'){
    
        include "admin_sidebar.php";
    
    }else{
        
        include "sidebar.php";
        
    }

?>

<?php include "footer.php" ?>

<script type="text/javascript">
    $(document).ready(function() {
       $('#customer_list_table').DataTable({
            "scrollX": true,
            "pagingType": "full_numbers",
            'pageLength': 10,
            'order': [[0, 'asc']],
            'lengthMenu': [10, 20, 25, 30],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            },
            dom: 'Blfrtip',
            buttons: [{
                  extend: 'excel',
                  title: 'Customer List - <?php echo $today_date ?> - Whitespot CRM',
                  exportOptions: {
                      columns: ':visible:not(:last-child)'
                  }
              },
              {
                  extend: 'csv',
                  title: 'Customer List - <?php echo $today_date ?> - Whitespot CRM',
                  exportOptions: {
                      columns: ':visible:not(:last-child)'
                  }
              },
              {
                  extend: 'pdf',
                  title: 'Customer List - <?php echo $today_date ?> - Whitespot CRM',
                  exportOptions: {
                      columns: ':visible:not(:last-child)'
                  }
              },
              {
                  extend: 'print',
                  title: 'Customer List - <?php echo $today_date ?> - Whitespot CRM',
                  exportOptions: {
                      columns: ':visible:not(:last-child)'
                  }
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



});



  </script>


