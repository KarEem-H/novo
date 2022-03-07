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
                        <h1 class="page-header text-overflow">Approved Quotations</h1>
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
                    <table id="leads_table" 
                           data-toggle="table"
                           data-url="ajax/get_approved_quotations.php"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-sort-name="id"
                           data-sort-order="desc" 
                           data-page-list="[5, 10, 20, All]"
                           data-page-size="10"
                           data-toolbar="#export_buttons"
                           data-pagination="true" data-show-pagination-switch="true">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="quotation_id" data-sortable="true" data-formatter="statusFormatter1">View Quotation</th>
                                <th data-field="quotation_date" data-sortable="true">Quotation Date</th>
                                <th data-field="customer_name" data-sortable="true">Customer Name</th>
                                <th data-field="customer_mobile" data-sortable="true">Customer Mobile</th>
                                <th data-field="customer_address" data-align="center" data-sortable="true">Address</th>
                                <th data-field="service" data-align="center" data-sortable="true">Service</th>
                                <th data-field="quotation_rate" data-align="center" data-sortable="true">Job Amount</th>
                                <th data-field="start_date" data-align="center" data-sortable="true">Start Date</th>
                                <th data-field="start_time" data-align="center" data-sortable="true" data-type="select">Start Time</th>
                                <th data-field="end_time" data-align="center" data-sortable="true">End Time</th>
                                <th data-field="job_scheduled" data-align="center" data-sortable="true">Job Scheduled</th>
                                <th data-field="agent_remarks" data-align="center" data-sortable="true">Agent Remarks</th>
                                <th data-field="job_scheduled" data-align="center" data-formatter="statusFormatter">Action</th>
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
            fileName: "Approved Quotations - Telesales Dashboard - <?php echo $today_date ?>",
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
            fileName: "Approved Quotations - Telesales Dashboard - <?php echo $today_date ?>",
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
          fileName: "Approved Quotations - Telesales Dashboard - <?php echo $today_date ?>",
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

      if(value == 'No'){

      return '<button id="schedule_job" data-id="'+ row.id +'" class="btn btn-primary"> Schedule </button>';

      }

 
  }

   function statusFormatter1(value, row, id) {
     
        return '<a href="uploads/Quotation - Whitespot - '+ value +'.pdf" class="btn-link" target="_blank"> #'+ value +'</a>';
    }

  
</script>