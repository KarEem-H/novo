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
                        <h1 class="page-header text-overflow">Cancelled Recurring Jobs</h1>
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
                    <table id="cancelled_jobs_table"
                           data-toggle="table"
                           data-url="ajax/get_recurring_cancellations.php"
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
                                <th data-field="service_date" data-sortable="true">Job Date</th>
                                <th data-field="customer_name" data-sortable="true">Customer Name</th>
                                <th data-field="customer_mobile" data-sortable="true">Customer Mobile</th>
                                <th data-field="customer_address" data-align="center" data-sortable="true">Address</th>
                                <th data-field="customer_type" data-align="center" data-sortable="true">Customer Type</th>
                                <th data-field="job_amount" data-align="center" data-sortable="true">Job Amount</th>
                                <th data-field="rescheduled" data-align="center" data-sortable="true">Rescheduled</th>
                                <th data-field="agent_name" data-align="center" data-sortable="true">Agent Name</th>
                                <th data-field="reason" data-align="center" data-sortable="true">Agent Remark</th>
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
        $('#cancelled_jobs_table').tableExport({
            type:'excel',
            fileName: "Cancelled Jobs - Recurring - Telesales Dashboard - <?php echo $today_date ?>",
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
        $('#cancelled_jobs_table').tableExport({
            type:'csv',
            fileName: "Cancelled Jobs - Recurring - Telesales Dashboard - <?php echo $today_date ?>",
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
        $('#cancelled_jobs_table').tableExport({
          type:'pdf',
          fileName: "Cancelled Jobs - Recurring - Telesales Dashboard - <?php echo $today_date ?>",
          pdfmake: {
            enabled:true
            }
          }
        );
      }
</script>

