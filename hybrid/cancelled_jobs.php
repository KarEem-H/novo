<?php include "header.php" ?>
<?php 

if ($_SESSION['ADMIN_ID']['ID'] == "") {
    echo "<script type='text/javascript'>location.href = 'login.php';</script>";
}

?>
<?php include "menubar.php" ?>
  
  <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                 <div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                      <div class="col-md-6">
                        <h1 class="page-header text-overflow">Future Cancellations</h1>
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
                    <table data-toggle="table"
                           data-url="ajax/get_cancelled_jobs.php"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-sort-name="job_date"
                           data-sort-order="asc" 
                           data-page-list="[5, 10, 20, All]"
                           data-page-size="10"
                           data-pagination="true" data-show-pagination-switch="true">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="cleaning_date" data-sortable="true">Job Date</th>
                                <th data-field="customer_name" data-sortable="true">Customer Name</th>
                                <th data-field="customer_mobile" data-sortable="true">Customer Mobile</th>
                                <th data-field="address" data-align="center" data-sortable="true">Address</th>
                                <th data-field="total" data-align="center" data-sortable="true">Job Amount</th>
                                <th data-field="booking_status" data-align="center" data-sortable="true">Booking Status</th>
                                <th data-field="reject_reason" data-align="center" data-sortable="true">Reject Reason</th>
                                <th data-field="agent_name" data-align="center" data-sortable="true">Agent Name</th>
                                <th data-field="agent_remark" data-align="center" data-sortable="true">Agent Remark</th>
                                <th data-field="booking_status" data-align="center" data-formatter="statusFormatter">Action</th>
                            </tr>
                        </thead>
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
  function statusFormatter(value, row, id) {
      var labelColor;

      if (value == "Completed") {
          return '<button id="mark-cancelled-btn-bootbox" data-id="'+ row.id +'" class="btn btn-primary"> Cancel Job </button>';
      }

      if (value != "Completed") {
      // var icon = row.id % 2 === 0 ? 'fa-star' : 'fa-user';
        return '<button id="mark-completed-btn-bootbox" data-id="'+ row.id +'" class="btn btn-warning"> Mark Completed </button>';
      }
  }

</script>