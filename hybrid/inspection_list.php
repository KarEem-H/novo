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
                        <h1 class="page-header text-overflow">Inspection List</h1>
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
                <div class="panel-body" id='dashboard_data'>
                    <div class="btn-group mar-rgt" id="export_buttons">
                        <button class="btn btn-default btn-active-purple" onclick="ExportExcel()">Excel</button>
                        <button class="btn btn-default btn-active-purple" onclick="ExportCsv()">CSV</button>
                        <button class="btn btn-default btn-active-purple" onclick="ExportPdf()">PDF</button>
                    </div>
                    <table id="leads_table" 
                           data-toggle="table"
                           data-url="ajax/get_inspection_list.php"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-sort-name="id"
                           data-sort-order="desc" 
                           data-page-list="[5, 10, 20, All]"
                           data-page-size="10"
                           data-pagination="true"
                           data-show-pagination-switch="true"
                           data-id-field="id"
                           data-editable-emptytext="Add Remarks"
                           data-editable-url="ajax/add_remarks_to_inspection.php">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true" style="width: 15%">ID</th>
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
                                <th data-field="agent_remarks" data-align="center" data-sortable="true" data-editable="true" data-editable-type="textarea" style="width: 15%">Agent Remarks</th>
                                <th data-field="inspection_status" data-align="center" data-sortable="true" style="width: 15%">Inspection Status</th>  
                                <th data-field="id" data-align="center" data-formatter="statusFormatter1" style="width: 15%">View</th>
                                <th data-field="inspection_status" data-align="center" data-formatter="statusFormatter3" style="width: 15%">Cancel</th>
                                <th data-field="inspection_status" data-align="center" data-formatter="statusFormatter" style="width: 15%">Create Quotation</th>
                                <th data-field="inspection_status" data-align="center" data-formatter="statusFormatter2" data-visible="true" style="width: 15%">Action</th>
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
        $('#leads_table').tableExport({
            type:'excel',
            fileName: "Inspection List - Telesales Dashboard - <?php echo $today_date ?>",
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
        $('#leads_table').tableExport({
            type:'csv',
            fileName: "Inspection List - Telesales Dashboard - <?php echo $today_date ?>",
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
        $('#leads_table').tableExport({
          type:'pdf',
          fileName: "Inspection List - Telesales Dashboard - <?php echo $today_date ?>",
          pdfmake: {
            enabled:true
            }
          }
        );
      }
</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.10.20/api/sum().js"></script> 
   
  <!--<script src="https://unpkg.com/bootstrap-table@1.18.1/dist/bootstrap-table.min.js"></script>-->
  <!--<script src="https://unpkg.com/bootstrap-table@1.18.1/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>-->

<script type="text/javascript">
  function statusFormatter(value, row, id) {
      var labelColor;


      if(value == 'Open'){
      
        return '<a style="color:#fff;" href="create_quotation.php?rid='+ row['id'] +'" id="'+ row['id'] +'"><div class="label label-table label-info inner'+ row['id'] +'">Create Quotation</div></a>';

      }else{
        return 'Processed';
      }
  }

  function statusFormatter1(value, row, id) {
      var labelColor;

      return '<button id="copy-inspection-btn-bootbox" data-id="'+ row.id +'" class="btn btn-primary">View </button>';
     
  }
  
  function statusFormatter2(value, row, id) {

        if(value != 'Jobsheet Created' && value != 'Quotation Created'){
      
        return '<a style="color:#fff;" href="create_job_sheet.php?jid='+ row['id'] +'" id="'+ row['id'] +'"><div class="label label-table label-info inner'+ row['id'] +'">Create Jobsheet</div></a>';

      }
      
      if(value == 'Jobsheet Created'){
          
        return 'Jobsheet Created';
      }
      
      if(value == 'Quotation Created'){
          
        return 'Quotation Created';
      }

  }
  
  function statusFormatter3(value, row, id) {

      if(value != 'Jobsheet Created' && value != 'Quotation Created' && value != 'Cancelled'){
      
        return '<button id="cancel-inspection-btn" data-id="'+ row.id +'" class="btn btn-primary">Cancel </button>';

      }else{
        return '-';
      }

  }


  $('#push_leads').on('click',function(){

      var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

        $('#dashboard_data').append(Loader);
        $('html').addClass('.no-scroll');


      $.ajax({
            type: 'POST',
            url: 'ajax/push_inspection_list.php',
            success:function(){
               $("#loaderimg").remove();
               $('html').removeClass('no-scroll');
                window.location.href = 'inspection_list.php';
            }
            
        });

    });

  
</script>