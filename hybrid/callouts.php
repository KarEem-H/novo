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
                        <h1 class="page-header text-overflow">Callout List</h1>
                      </div> 
                      <!-- <div class="col-md-6" style="text-align: right">
                        <a class="btn btn-info" id="push_leads">Push Data</a>
                      </div>  -->                    
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
                    
                    <table id="callout_table" 
                           data-toggle="table"
                           data-url="ajax/get_callout_list.php"
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
                           data-show-pagination-switch="true"
                           data-toolbar="#export_buttons"
                           data-id-field="id"
                           data-filter-control="true"
                           data-show-search-clear-button="true" 
                           data-show-filter-control-switch="true"
                           data-show-export="true">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true" data-filter-control="input" style="width: 15%">ID</th>
                                <th data-field="service_date" data-sortable="true" style="width: 15%" data-filter-control="input">Callout Date</th>
                                <th data-field="start_time" data-sortable="true" style="width: 15%" data-filter-control="input">Callout Time</th>
                                <th data-field="unit" data-sortable="true" data-filter-control="input" style="width: 15%">Unit</th>
                                <th data-field="building" data-sortable="true" style="width: 15%" data-filter-control="input">Building</th>
                                <th data-field="source" data-sortable="true" style="width: 15%" data-filter-control="input">Source</th>
                                <th data-field="technician" data-sortable="true" style="width: 15%" data-filter-control="input">Technician</th>
                                <th data-field="details" data-align="center" data-sortable="true" style="width: 15%" data-filter-control="input">Details</th>
                                <th data-field="status" data-align="center" data-sortable="true" style="width: 15%" data-filter-control="input">Status</th>
                                <th data-field="agent_name" data-sortable="true" data-visible="false" style="width: 15%" data-filter-control="input">Agent Name</th>
                                <th data-field="agent_remarks" data-sortable="true" style="width: 15%" data-filter-control="input">Agent Remarks</th>
                                <th data-field="created_date" data-align="center" data-sortable="true" style="width: 15%" data-filter-control="input" data-visible="false">Created Date</th>
                                <th data-field="created_time" data-align="center" data-sortable="true" style="width: 15%" data-filter-control="input" data-visible="false">Created Time</th>
                                 <th data-field="id" data-align="center" data-formatter="statusFormatter" style="width: 15%">View</th> 
                                 <th data-field="status" data-align="center" data-formatter="statusFormatter1" style="width: 15%">Edit</th> 
                                 <th data-field="status" data-align="center" data-formatter="statusFormatter2" style="width: 15%">Status</th> 
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
   
  <script src="https://unpkg.com/bootstrap-table@1.18.1/dist/bootstrap-table.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table@1.18.1/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>

<script type="text/javascript">

  function ExportExcel() {
        $('#callout_table').tableExport({
            type:'excel',
            fileName: "Callout List - Telesales Dashboard - <?php echo $today_date ?>",
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
        $('#callout_table').tableExport({
            type:'csv',
            fileName: "Callout List - Telesales Dashboard - <?php echo $today_date ?>",
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
        $('#callout_table').tableExport({
          type:'pdf',
          fileName: "Callout List - Telesales Dashboard - <?php echo $today_date ?>",
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

      return '<button id="copy-callout" data-id="'+ row.id +'" class="btn btn-primary">View </button>';
     
  }

  function statusFormatter1(value, row, id) {
      var labelColor;

        return '<button id="edit_callout" data-id="'+ row.id +'" class="btn btn-info"> Edit </button>';
 
  }

  function statusFormatter2(value, row, id) {
      var labelColor;

        return '<button id="update-callout-status" data-id="'+ row.id +'" class="btn btn-danger"> Update Status </button>';
 
  }
  
</script>