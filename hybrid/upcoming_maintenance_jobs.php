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
                        <h1 class="page-header text-overflow">Same Day Maintenance Jobs</h1>
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
                    <table id="leads_table" 
                           data-toggle="table"
                           data-url="ajax/get_upcoming_maintenance_jobs.php"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-sort-name="id"
                           data-sort-order="desc" 
                           data-page-list="[5, 10, 20, All]"
                           data-page-size="10"
                           data-pagination="true"
                           data-show-pagination-switch="true">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="quotation_id" data-sortable="true" data-formatter="statusFormatter1">View Quotation</th>
                                <th data-field="cust_name" data-sortable="true">Customer Name</th>
                                <th data-field="cust_mobile" data-sortable="true">Customer Mobile</th>
                                <th data-field="cust_address" data-align="center" data-sortable="true">Address</th>
                                <th data-field="service" data-align="center" data-sortable="true">Service</th>
                                <th data-field="booking_date" data-align="center" data-sortable="true">Service Date</th>
                                <th data-field="start_time" data-align="center" data-sortable="true">Start Time</th>
                                <th data-field="end_time" data-align="center" data-sortable="true">End Time</th>
                                <th data-field="job_sheet_generated" data-align="center" data-formatter="statusFormatter">Action</th>
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

      if (value == "No") {
          return '<a style="color:#fff;" href="create_job_sheet.php?rid='+ row['id'] +'" id="'+ row['id'] +'"><div class="label label-table label-info inner'+ row['id'] +'">Create Jobsheet</div></a>';
      }else{

          return 'Job Sheet Generated';
      }

      
  }

  function statusFormatter1(value, row, id) {

      return '<a href="uploads/Quotation - Whitespot - '+ value +'.pdf" class="btn-link" target="_blank"> #'+ value +'</a>';

  }

  $('#push_job_data').on('click',function(){

    var Loader = "<div id='loaderimg' style=' width:100%; margin-top:50px; text-align: center;'>"+
                        '<img id="loader-img" alt="Loading Data" src="img/preloader.gif" align="center" />'+
                "</div>";

      $('#dashboard_data').append(Loader);

      $.ajax({
            type: 'POST',
            url: 'ajax/push_schedule_data.php',
            success:function(){
              $("#loaderimg").remove();
                window.location.href = 'job_list.php';
            }
            
        });

    });

</script>



