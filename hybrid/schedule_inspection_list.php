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
                        <h1 class="page-header text-overflow">Schedule - Inspection List</h1>
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
                    <table id="leads_table" 
                           data-toggle="table"
                           data-url="ajax/get_inspection_list_for_schedule.php"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="false"
                           data-show-columns="true"
                           data-sort-name="id"
                           data-sort-order="desc" 
                           data-page-list="[5, 10, 20, All]"
                           data-page-size="10"
                           data-pagination="true"
                           data-side-pagination="client"
                           data-show-pagination-switch="true">
                        <thead>
                          
                            <tr>
                                <th data-field="id" data-sortable="true" data-filter-control="input" style="width: 15%">ID</th>
                                <th data-field="inspection_id" data-sortable="true" data-visible="false">View Inspection</th>
                                <th data-field="created_date" data-sortable="true" data-visible="false" style="width: 15%">Created Date</th>
                                <th data-field="cust_name" data-sortable="true" style="width: 15%">Customer Name</th>
                                <th data-field="cust_mobile" data-sortable="true" style="width: 15%" data-visible="false">Customer Mobile</th>
                                <th data-field="cust_email" data-visible="false" data-sortable="true" style="width: 15%">Customer Email</th>
                                <th data-field="area" data-sortable="true" style="width: 15%">Area</th>
                                <th data-field="cust_address" data-sortable="true" data-visible="false" style="width: 15%">Address</th>
                                <th data-field="service" data-align="center" data-sortable="true" style="width: 15%">Service Type</th>                                
                                <th data-field="service_date" data-align="center" data-sortable="true" style="width: 15%">Inspection Date</th>                               
                                <th data-field="technician" data-align="center" data-sortable="true" style="width: 15%">Technician</th>                                
                                <th data-field="notes" data-align="center" data-sortable="true" style="width: 15%">Request/Notes</th>                                
                                <th data-field="agent_name" data-align="center" data-sortable="true" style="width: 15%">Agent Name</th>                                
                                <th data-field="agent_remarks" data-align="center" data-sortable="true" style="width: 15%">Agent Remarks</th>
                                <th data-field="add_to_brilion" data-align="center" data-formatter="statusFormatter1" style="width: 15%">Add to Brilion</th>
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
      var labelColor;

      if(value != 'Yes'){

      return '<button id="add-to-brilion-inspection" data-id="'+ row.id +'" class="btn btn-primary">Add to Brilion </button>';

    }else{
      return 'Added to Brilion';
    }
     
  }


  $('#push_leads').on('click',function(){

      var Loader = "<div id='loaderimg' style=' width:100%; margin-top:50px; text-align: center;'>"+
                                '<img id="loader-img" alt="Loading Data" src="img/preloader.gif" align="center" />'+
                        "</div>";

        $('#dashboard_data').append(Loader);


      $.ajax({
            type: 'POST',
            url: 'ajax/push_scheduled_inspection_list.php',
            success:function(){
               $("#loaderimg").remove();
                window.location.href = 'schedule_inspection_list.php';
            }
            
        });

    });

  
</script>