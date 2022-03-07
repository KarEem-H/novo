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
                        <h1 class="page-header text-overflow">Completed Booking</h1>
                      </div>
                      <div class="col-md-6" style="text-align: right">
                        <a class="btn btn-info" id="push_job_data">Push Data</a>
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
                    <table data-toggle="table"
                           data-url="ajax/get_completed_bookings.php"
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
                                <th data-field="cleaning_date" data-sortable="true">Job Date</th>
                                <th data-field="cleaning_time" data-sortable="true">Job Time</th>
                                <th data-field="customer_name" data-sortable="true">Customer Name</th>
                                <th data-field="customer_mobile" data-sortable="true">Customer Mobile</th>
                                <th data-field="address" data-align="center" data-sortable="true">Address</th>
                                <th data-field="total" data-align="center" data-sortable="true">Job Amount</th>
                                <th data-field="booking_status" data-align="center" data-sortable="true">Booking Status</th>
                                <th data-field="agent_name" data-align="center" data-sortable="true">Agent</th>
                                <th data-field="status_by_finance" data-align="center" data-formatter="statusFormatter1">Payment Status</th>
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
        return '<button id="mark-completed-btn-bootbox" data-id="'+ row.id +'" class="btn btn-warning"> Mark Completed </button>';
      }
  }



  function statusFormatter1(value, row, id) {

      if (row['status_by_finance'] == "Paid") {
          return 'Already Paid';
      }

      if (row['status_by_finance'] != "Paid") {

      return '<button id="mark-paid" data-id="'+ row['job_ref'] +'" class="btn btn-info"> Mark Paid </button>';

    }

  }

  $('#push_job_data').on('click',function(){

    var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

    $('#dashboard_data').append(Loader);
    $('html').addClass('.no-scroll');

      $.ajax({
            type: 'POST',
            url: 'ajax/push_completed_booking_data.php',
            success:function(){
                $("#loaderimg").remove();
                $('html').removeClass('no-scroll');
                window.location.href = 'completed_bookings.php';
            }
            
        });

    });

</script>



