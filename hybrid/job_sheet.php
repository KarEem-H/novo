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
                        <h1 class="page-header text-overflow">Job Sheet</h1>
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
                <div class="panel-body" id="dashboard_data">
                    <table id="leads_table" 
                           data-toggle="table"
                           data-url="ajax/get_job_sheet.php"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-sort-name="id"
                           data-sort-order="desc" 
                           data-page-list="[5, 10, 20, All]"
                           data-page-size="5"
                           data-pagination="true"
                           data-show-pagination-switch="true">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="id" data-align="center" data-formatter="statusFormatter2">Edit</th>
                                <th data-field="job_sheet_id" data-sortable="true" data-formatter="statusFormatter1">View Job Sheet</th>
                                <th data-field="cust_name" data-sortable="true">Customer Name</th>
                                <th data-field="cust_mobile" data-sortable="true">Customer Mobile</th>
                                <th data-field="cust_address" data-align="center" data-sortable="true">Address</th>
                                <th data-field="service" data-align="center" data-sortable="true">Service</th>
                                <th data-field="job_amount" data-align="center" data-sortable="true">Job Amount</th>
                                <th data-field="booking_date" data-align="center" data-sortable="true">Service Date</th>
                                <th data-field="start_time" data-align="center" data-sortable="true">Start Time</th>
                                <th data-field="end_time" data-align="center" data-sortable="true">End Time</th>
                                <th data-field="technician" data-align="center" data-sortable="true">Technician</th>
                                <th data-field="jobsheet_status" data-align="center" data-sortable="true">Job Status</th>
                                <th data-field="agent_remark" data-align="center" data-sortable="true">Remarks</th>
                                <th data-field="agent_name" data-align="center" data-sortable="true" data-visible="false">Agent Name</th>
                                <th data-field="id" data-align="center" data-sortable="true" data-formatter="statusFormatter">Action</th>
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
  

  function statusFormatter1(value, row, id) {

      return '<a href="uploads/JOBSHEET-'+ value +'.pdf" class="btn-link" target="_blank"> #'+ value +'</a>';
  }

  function statusFormatter(value, row, id) {

        return '<button id="jobsheet-status-btn-bootbox" data-id="'+ row.id +'" class="btn btn-primary"> Change Status </button>';
  }

  function statusFormatter2(value, row, id) {
     
        return '<a href="edit_jobsheet.php?jid='+ row.id +'" class="btn-link" target="_blank"><i class="icon-lg icon-fw demo-psi-pen-5"></i></a>';
  }

</script>