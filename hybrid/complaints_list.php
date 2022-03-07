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
                      <div class="col-md-12">
                        <h1 class="page-header text-overflow">Complaints List</h1>
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
                    <table data-toggle="table" id="complaints_table"
                           data-url="ajax/get_complaints_list.php"
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
                                <th data-field="id" data-sortable="true" data-switchable="false">ID</th>
                                <th data-field="created_date" data-sortable="true" data-switchable="false">Complaint Date</th>
                                <th data-field="customer_name" data-sortable="true" data-switchable="false">Customer Name</th>
                                <th data-field="customer_mobile" data-sortable="true" data-switchable="false">Customer Mobile</th>
                                <th data-field="customer_address" data-align="center" data-sortable="true" data-visible="false">Address</th>
                                <th data-field="service_date" data-align="center" data-sortable="true" data-switchable="false">Service Date</th>
                                <th data-field="service_time" data-align="center" data-sortable="true" data-visible="false">Service Time</th>                                
                                <th data-field="job_amount" data-align="center" data-sortable="true" data-visible="false">Job Amount</th>
                                <th data-field="cleaner_name" data-align="center" data-sortable="true" data-switchable="false">Cleaner</th>
                                <th data-field="remarks" data-align="center" data-sortable="true" data-switchable="false">Remarks</th>
                                <th data-field="agent_name" data-align="center" data-sortable="true" data-visible="false">Agent Name</th>
                                <th data-field="status" data-align="center" data-switchable="false">Complaint Status</th>
                                <th data-field="agent_remarks" data-align="center" data-switchable="false">Comments</th>
                                <th data-field="id" data-align="center" data-formatter="statusFormatter" data-switchable="false">Action</th>
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

      // var icon = row.id % 2 === 0 ? 'fa-star' : 'fa-user';
        return '<button id="complaints-status-btn-bootbox" data-id="'+ row.id +'" class="btn btn-primary"> Change Status </button>';
 
  }

  $('#complaints_table').bootstrapTable('uncheckAll');

</script>




