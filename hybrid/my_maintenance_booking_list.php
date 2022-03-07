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
                        <h1 class="page-header text-overflow">My Maintenance Booking Log</h1>
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
                           data-url="ajax/get_my_maintenance_booking_list.php"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-sort-name="id"
                           data-sort-order="asc" 
                           data-page-list="[5, 10, 20, All]"
                           data-page-size="10"
                           data-pagination="true" data-show-pagination-switch="true">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="quotation_id" data-sortable="true" data-formatter="statusFormatter1">Quotation#</th>
                                <th data-field="available_date" data-sortable="true">Job Date</th>
                                <th data-field="time_slot" data-sortable="true">Job Time</th>
                                <th data-field="tenant_full_name" data-sortable="true">Customer Name</th>
                                <th data-field="tenant_phone" data-sortable="true">Customer Mobile</th>
                                <th data-field="title" data-align="center" data-sortable="true">Job Title</th>
                                <th data-field="details" data-align="center" data-sortable="true">Description</th>
                                <th data-field="property_name" data-align="center" data-sortable="true">Property Name</th>
                                <th data-field="property_address" data-align="center" data-sortable="true">Property Address</th>
                                <th data-field="status" data-align="center" data-sortable="true" data-visible="false">Job Status</th>
                                <th data-field="source" data-align="center" data-sortable="true">Source</th>
                                <th data-field="quotation_rate" data-align="center" data-sortable="true">Job Amount</th>
                                <th data-field="agent_name" data-align="center" data-sortable="true" data-visible="false">Agent</th>
                                <th data-field="mid" data-align="center" data-formatter="statusFormatter">View</th>
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



      return '<button id="view-my-maintenance-details" data-id="'+ row.id +'" class="btn btn-info"> View </button>'



  }

  function statusFormatter1(value, row, id) {

      if (value != "") {

      return '<a href="uploads/Quotation - Whitespot - '+ value +'.pdf" class="btn-link" target="_blank"> #'+ value +'</a>';

    }

  }  


</script>