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
                        <h1 class="page-header text-overflow">Same Day Booking</h1>
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
                    <div class="btn-group mar-rgt" id="export_buttons">
                        <button class="btn btn-default btn-active-purple" onclick="ExportExcel()">Excel</button>
                        <button class="btn btn-default btn-active-purple" onclick="ExportCsv()">CSV</button>
                        <button class="btn btn-default btn-active-purple" onclick="ExportPdf()">PDF</button>
                    </div>
                    <table id="same_day_table" data-toggle="table"
                           data-url="ajax/get_same_day_booking.php"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-toolbar="#export_buttons"
                           data-sort-name="id"
                           data-sort-order="desc" 
                           data-page-list="[5, 10, 20, All]"
                           data-page-size="20"
                           data-pagination="true" data-show-pagination-switch="true">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="cleaning_date" data-sortable="true">Job Date</th>
                                <th data-field="cleaning_time" data-sortable="true">Job Time</th>
                                <th data-field="customer_name" data-sortable="true">Customer Name</th>
                                <th data-field="customer_mobile" data-sortable="true">Customer Mobile</th>
                                <th data-field="address" data-align="center" data-sortable="true">Address</th>
                                <th data-field="service_type" data-align="center" data-sortable="true">Service</th>
                                <th data-field="num_of_hours" data-align="center" data-sortable="true">Num of Hours</th>
                                <th data-field="num_of_cleaners" data-align="center" data-sortable="true">Num of SA</th>
                                <th data-field="total_hours" data-align="center" data-sortable="true">Total Hours</th>
                                <th data-field="total" data-align="center" data-sortable="true">Job Amount</th>
                                <th data-field="booking_status" data-align="center" data-sortable="true">Booking Status</th>
                                <th data-field="agent_name" data-align="center" data-sortable="true">Agent</th>
                                <th data-field="cleaner_allocated" data-align="center" data-formatter="statusFormatter1">Schedule</th>
                                <th data-field="id" data-align="center" data-formatter="statusFormatter2">View</th>
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

  function ExportExcel() {
        $('#same_day_table').tableExport({
            type:'excel',
            fileName: "Same Day Bookings - Telesales Dashboard - <?php echo $today_date ?>",
            mso: {
              styles: ['background-color',
                       'color',
                       'font-family',
                       'font-size',
                       'font-weight',
                       'text-align']
            }
          }
        );
      }

      function ExportCsv() {
        $('#same_day_table').tableExport({
            type:'csv',
            fileName: "Same Day Bookings - Telesales Dashboard - <?php echo $today_date ?>",
            mso: {
              styles: ['background-color',
                       'color',
                       'font-family',
                       'font-size',
                       'font-weight',
                       'text-align']
            }
          }
        );
      }

      function ExportPdf() {
        $('#same_day_table').tableExport({
          type:'pdf',
          fileName: "Same Day Bookings - Telesales Dashboard - <?php echo $today_date ?>",
          pdfmake: {
            enabled:true
            }
          }
        );
      }
</script>


<script type="text/javascript">
  function statusFormatter(value, row, id) {
      var labelColor;

      if (value == "Completed") {
          return '<a class="btn btn-sm btn-default btn-hover-danger demo-pli-trash add-tooltip" href="#" data-original-title="Cancel Job" data-container="body" data-id="'+ row.id +'" id="mark-cancelled-btn-bootbox"></a>';
      }

      if (value != "Completed") {
        return '<a class="btn btn-sm btn-default btn-hover-info demo-pli-check add-tooltip" href="#" data-original-title="Mark Completed" data-container="body" data-id="'+ row.id +'" id="mark-completed-btn-bootbox"></a>';
      }
  }



  function statusFormatter1(value, row, id) {

      if (value == "Yes") {
          return 'Job Scheduled';
      }

      if (value != "Yes") {

        return '<button id="assign-crew" data-id="'+ row.id +'" class="btn btn-info"> Schedule </button>';

    }

  }

  function statusFormatter2(value, row, id) {

      return '<a class="btn btn-sm btn-default btn-hover-success fa fa-eye add-tooltip" href="#" data-original-title="View" data-container="body" data-id="'+ row.id +'" id="view-my-booking-btn-bootbox"></a>';


  }

  $('#push_job_data').on('click',function(){

    var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

    $('#dashboard_data').append(Loader);
    $('html').addClass('.no-scroll');

      $.ajax({
            type: 'POST',
            url: 'ajax/push_coordinator_data.php',
            success:function(){
                $("#loaderimg").remove();
                $('html').removeClass('no-scroll');
                window.location.href = 'coordinator.php';
            }
            
        });

    });

</script>



