<?php include "header.php" ?>
<?php 

if ($_SESSION['ADMIN_ID']['ID'] == "") {
    echo "<script type='text/javascript'>location.href = 'login.php';</script>";

    $admin_role = $_SESSION['ADMIN_ID']['ROLE'];
}

?>

<style type="text/css">
  .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover{
    background-color: #25476a;
    color:#fff;
  }
</style>
<?php include "menubar.php" ?>


        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                <div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Follow Up List</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <ol class="breadcrumb">
            					<li><a href="index.php"><i class="demo-pli-home"></i></a></li>
            					<li><a href="index.php">Dashboard</a></li>
            					<li class="active">Follow Up</li>
                    </ol>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End breadcrumb-->

                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content" style="padding-top:0px">
                    
					<div class="panel">
					    <!--<div class="panel-heading">-->
					    <!--    <h3 class="panel-title">User List</h3>-->
					    <!--</div>-->
					    <div class="panel-body">
				        <div class="tab-base no-print">

              <!--Nav Tabs-->
              <ul class="nav nav-tabs">
                <li class="active">
                  <a data-toggle="tab" href="#demo-lft-tab-1">Customer Followup <span class="badge badge-purple"><?php echo $cleaning_count ?></span></a>
                </li>
                
                <li>
                  <a data-toggle="tab" href="#demo-lft-tab-3">Call Back</a>
                </li>
              </ul>

              <!--Tabs Content-->
              <div class="tab-content">
                <div id="demo-lft-tab-1" class="tab-pane fade active in">
                  <div class="table-responsive">

                    <table data-toggle="table"
			               data-url="ajax/follow_up_list.php"
			               data-search="true"
			               data-show-refresh="true"
			               data-show-toggle="true"
			               data-show-columns="true"
			               data-sort-name="id"
			               data-sort-order="desc"
			               data-page-list="[5, 10, 20, All]"
			               data-page-size="10"
			               data-pagination="true" data-show-pagination-switch="true">
			            <thead>
			                <tr>
			                    <th data-field="id" data-sortable="true">ID</th>
			                    <th data-field="job_ref" data-align="center" data-sortable="true" data-visible="false">Job ID</th>
			                    <th data-field="customer_id" data-align="center" data-sortable="true" data-visible="false">Customer ID</th>
			                    <th data-field="customer_name" data-sortable="true">Customer Name</th>
                                <th data-field="customer_mobile" data-align="center" data-sortable="true">Customer Mobile</th>
			                    <th data-field="address" data-align="center" data-sortable="true">Address</th>
                                <th data-field="cleaning_date" data-sortable="true">Date of Service</th>
                                <th data-field="service_type" data-sortable="true">Service Type</th>
                                <th data-field="num_of_hours" data-sortable="true" data-visible="false">Num of Hours</th>
                                <th data-field="num_of_cleaners" data-sortable="true" data-visible="false">Num of Cleaners</th>
			                    <th data-field="total" data-sortable="true">Total</th>
                                <th data-field="payment_status" data-sortable="true" data-visible="false">Payment Status</th>                     
			                    <th data-field="agent_name" data-sortable="true" data-visible="false">Agent Name</th>
			                    <th data-field="id" data-align="center" data-sortable="true" data-formatter="statusFormatter">Action</th>
			                </tr>
			            </thead>
			        </table>
                </div>
              </div>
              
                <div id="demo-lft-tab-3" class="tab-pane fade">
                  <table class="table-responsive" data-toggle="table"
                    data-url="ajax/callback_followup.php"
                    data-search="true"
                    data-show-refresh="true"
                    data-show-toggle="true"
                    data-show-columns="true"
                    data-sort-name="id"
                    data-page-list="[5, 10, 20]"
                    data-page-size="5"
                    data-pagination="true" data-show-pagination-switch="true">
                    <thead>
                      <tr>
                        <th data-field="id" data-sortable="true">ID</th>                        
                        <th data-field="customer_name" data-sortable="true">Customer Name</th>
                        <th data-field="customer_mobile" data-align="center" data-sortable="true">Customer Mobile</th>
                        <th data-field="call_status" data-sortable="true">Call Status</th>
                        <th data-field="call_source" data-sortable="true">Source</th>
                        <?php  if($admin_role != 'Telesales'){    ?>                       
                        <th data-field="agent_name" data-sortable="true">Agent Name</th>  
                        <?php } ?>                            
                        <th data-field="id" data-align="center" data-sortable="true" data-formatter="statusFormatter2">Action</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
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

	    if (value != "") {
	        labelColor = "warning";
	    }
	    var icon = row.id % 2 === 0 ? 'fa-star' : 'fa-user';
	    return '<button id="collect-feedback-btn-bootbox" data-id="'+ row['job_ref']+'" class="btn btn-warning"> Collect Feedback </button>';
	}


  function statusFormatter2(value, row, id) {
      var labelColor;

      if (value != "") {
          labelColor = "info";
      }
      var icon = row.id % 2 === 0 ? 'fa-star' : 'fa-user';
      return '<a style="color:#fff;" href="create_bookings.php?customer_id='+ row.id+'"><div class="label label-table label-'+ labelColor+'"> Call Now </div></a>';
  }
</script>