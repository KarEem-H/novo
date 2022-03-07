<?php include "header.php" ?>
<?php 

if ($_SESSION['ADMIN_ID']['ID'] == "") {
    echo "<script type='text/javascript'>location.href = 'login.php';</script>";
}

?>

<style type="text/css">
  table > thead > tr > th:nth-child(7){ 
    width: 15%;
  }
  table > thead > tr > th:nth-child(9){ 
    width: 8%;
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
                      <div class="col-md-6">
                        <h1 class="page-header text-overflow">Landing Page Leads</h1>
                      </div> 
                      <div class="col-md-6" style="text-align: right">
                        <a class="btn btn-info" id="push_leads">Push Data</a>
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
                           data-url="ajax/get_landing_page_leads.php"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-sort-name="created_date"
                           data-sort-order="desc" 
                           data-page-list="[5, 10, 20, All]"
                           data-page-size="10"
                           data-pagination="true" data-show-pagination-switch="true">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true" style="width: 15%">ID</th>
                                <th data-field="created_date" data-sortable="true" style="width: 15%">Created Date</th>
                                <th data-field="cust_name" data-sortable="true" style="width: 15%">Customer Name</th>
                                <th data-field="cust_mobile" data-sortable="true" style="width: 15%">Customer Mobile</th>
                                <th data-field="cust_email" data-sortable="true" style="width: 15%">Customer Email</th>
                                <th data-field="cust_region" data-sortable="true" style="width: 15%">Region</th>
                                <th data-field="cust_address" data-sortable="true" style="width: 15%">Address</th>
                                <th data-field="service_type" data-align="center" data-sortable="true" style="width: 15%">Service Type</th>  
                                
                                <th data-field="lead_status" data-align="center" data-sortable="true" style="width: 15%">Lead Status</th>
                                <th data-field="id" data-align="center" data-formatter="statusFormatter" style="width: 15%">Action</th>
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

      if (value != "") {
          labelColor = "info";
      }
      
      var encoded_address = encodeURIComponent(row['cust_address']);
      var icon = row.id % 2 === 0 ? 'fa-star' : 'fa-user';
      return '<a style="color:#fff;" href="create_bookings.php?number='+ row['cust_mobile']+'&name='+ row['cust_name']+'&email='+ row['cust_email']+'&region='+ row['cust_region']+'&rowid='+ row['id']+'&address='+ encoded_address+'&lead_status='+row['lead_status']+'"><div class="label label-table label-'+ labelColor+'">Call</div></a>';
 
  }

  $('#push_leads').on('click',function(){

      var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

            $('#dashboard_data').append(Loader);
            $('html').addClass('.no-scroll');


      $.ajax({
            type: 'POST',
            url: 'ajax/push_landing_page_leads.php',
            success:function(){
               $("#loaderimg").remove();
               $('html').removeClass('no-scroll');
                window.location.href = 'landing_page_leads.php';
            }
            
        });

    });
  
</script>
