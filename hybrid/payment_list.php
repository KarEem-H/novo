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
                        <h1 class="page-header text-overflow">Payment List</h1>
                      </div>
                      <div class="col-md-6" style="text-align: right">
                        <a class="btn btn-info" id="push_payments_data">Push Data</a>
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
                    <table id="myTable" data-toggle="table"
                           data-url="ajax/get_payment_list.php"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="false"
                           data-show-columns="true"
                           data-sort-name="job_date"
                           data-sort-order="desc" 
                           data-page-list="[5, 10, 20, All]"
                           data-page-size="10"
                           data-pagination="true" data-show-pagination-switch="true">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="cust_id" data-sortable="true">Cust ID</th>
                                <th data-field="service_date" data-sortable="true">Service Date</th>
                                <th data-field="service_time" data-sortable="true">Service Time</th>
                                <th data-field="cust_name" data-sortable="true">Customer Name</th>
                                <th data-field="cust_mobile" data-sortable="true">Customer Mobile</th>
                                <th data-field="cust_address" data-align="center" data-sortable="true">Address</th>
                                <th data-field="source" data-align="center" data-sortable="true">Source</th>
                                <th data-field="outstanding" data-align="center" data-sortable="true">Outstanding</th>
                                <th data-field="payment_status" data-align="center" data-sortable="true">Payment Status</th>
                                <th data-field="payment_collected_by" data-align="center" data-sortable="true">Collected By</th>
                                <th data-field="agent_remarks" data-align="center" data-sortable="true">Agent Remark</th>
                                <th data-field="status_changed_date" data-align="center" data-sortable="true">Last Updated</th>
                                <th data-field="approved" data-align="center" data-formatter="statusFormatter2">Approve</th>
                                <th data-field="payment_status" data-align="center" data-formatter="statusFormatter">Action</th>
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

      if (value == "Paid") {
          return '<button id="mark-unpaid-btn-bootbox" data-id="'+ row.id +'" class="btn btn-primary"> Mark Un-Paid </button>';
      }

      if (value != "Paid") {
        return '<button id="mark-paid-btn-bootbox" data-id="'+ row.id +'" class="btn btn-info"> Update Status </button>';
      }
  }

  function statusFormatter2(value, row, id) {
      var labelColor;

      if (value == "Yes") {
          return 'Approved';
      }

      if (value != "Yes") {
        return '<button id="payment_approve_btn" data-id="'+ row.id +'" class="btn btn-info"> Approve </button>';
      }
  }

  $(document).on('click', '#payment_approve_btn', function(){

    var Id=$(this).data('id'); 
      
      var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

      $('#dashboard_data').append(Loader);
      $('html').addClass('.no-scroll');
            
      $.ajax({
            type:"post",
            url: 'ajax/bulk_approve_payments.php' ,   
            data:'Id='+ Id,
            success: function(msg) { 
               $("#loaderimg").remove();
               $('html').removeClass('no-scroll');
               window.location.href = 'payment_list.php';
            }
        });
   });


  $('#push_payments_data').on('click',function(){

      var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

            $('#dashboard_data').append(Loader);
            $('html').addClass('.no-scroll');


      $.ajax({
            type: 'POST',
            url: 'ajax/push_payments_data.php',
            success:function(){
               $("#loaderimg").remove();
               $('html').removeClass('no-scroll');
                window.location.href = 'payment_list.php';
            }
            
        });

    });

</script>