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
                        <h1 class="page-header text-overflow">Completed Job Sheet</h1>
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
                    <div class="btn-group mar-rgt" id="export_buttons">
                        <button class="btn btn-default btn-active-purple" onclick="ExportExcel()">Excel</button>
                        <button class="btn btn-default btn-active-purple" onclick="ExportCsv()">CSV</button>
                        <button class="btn btn-default btn-active-purple" onclick="ExportPdf()">PDF</button>
                    </div>
                    <table id="leads_table" 
                           data-toggle="table"
                           data-url="ajax/get_completed_jobs.php"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-sort-name="id"
                           data-sort-order="desc" 
                           data-page-list="[5, 10, 20, All]"
                           data-page-size="10"
                           data-pagination="true"
                           data-toolbar="#export_buttons"
                           data-show-pagination-switch="true">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="job_sheet_id" data-sortable="true" data-formatter="statusFormatter1">View Job Sheet</th>
                                <th data-field="cust_name" data-sortable="true">Customer Name</th>
                                <th data-field="cust_mobile" data-sortable="true">Customer Mobile</th>
                                <th data-field="cust_address" data-align="center" data-sortable="true">Address</th>
                                <th data-field="service" data-align="center" data-sortable="true">Service</th>
                                <th data-field="quotation_rate" data-align="center" data-sortable="true">Job Amount</th>
                                <th data-field="technician" data-align="center" data-sortable="true">Technician</th>
                                <th data-field="jobsheet_status" data-align="center" data-sortable="true">Job Sheet Status</th>
                                <th data-field="agent_name" data-align="center" data-sortable="true">Agent Name</th>
                                <th data-field="agent_remark" data-align="center" data-sortable="true">Remarks</th>
                                <th data-field="job_status_changed_date" data-align="center" data-sortable="true">Completed Date</th>
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

      return '<a href="uploads/jobsheets/Jobsheet - Whitespot - '+ value +'.pdf" class="btn-link" target="_blank"> #'+ value +'</a>';

  }
  
  function ExportExcel() {
        $('#leads_table').tableExport({
            type:'excel',
            fileName: "Completed Jobs - Telesales Dashboard - <?php echo $today_date ?>",
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
            fileName: "Completed Jobs - Telesales Dashboard - <?php echo $today_date ?>",
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
          fileName: "Completed Jobs - Telesales Dashboard - <?php echo $today_date ?>",
          pdfmake: {
            enabled:true
            }
          }
        );
      }



</script>



