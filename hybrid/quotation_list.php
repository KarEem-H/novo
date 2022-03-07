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
                        <h1 class="page-header text-overflow">Quotation List</h1>
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
                <div class="panel-body">
                    <div class="btn-group mar-rgt" id="export_buttons">
                        <button class="btn btn-default btn-active-purple" onclick="ExportExcel()">Excel</button>
                        <button class="btn btn-default btn-active-purple" onclick="ExportCsv()">CSV</button>
                        <button class="btn btn-default btn-active-purple" onclick="ExportPdf()">PDF</button>
                    </div>
                    <table id="leads_table" 
                           data-toggle="table"
                           data-url="ajax/get_quotation_list.php"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-sort-name="id"
                           data-sort-order="desc" 
                           data-page-list="[5, 10, 20, All]"
                           data-page-size="5"
                           data-toolbar="#export_buttons"
                           data-filter-control="true"
                           data-show-search-clear-button="true" 
                           data-show-filter-control-switch="true"
                           data-pagination="true" data-show-pagination-switch="true">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true" data-filter-control="input">ID</th>
                                <th data-field="id" data-align="center" data-formatter="statusFormatter2">Edit</th>
                                <th data-field="quotation_id" data-sortable="true" data-formatter="statusFormatter1" data-filter-control="input">View Quotation</th>
                                <th data-field="quotation_date" data-sortable="true" data-filter-control="datepicker">Quotation Date</th>
                                <th data-field="customer_name" data-sortable="true" data-filter-control="input">Customer Name</th>
                                <th data-field="customer_mobile" data-sortable="true" data-visible="false" data-filter-control="input">Customer Mobile</th>
                                <th data-field="customer_address" data-align="center" data-sortable="true" data-filter-control="input">Address</th>
                                <th data-field="service" data-align="center" data-sortable="true" data-filter-control="input">Service</th>
                                <th data-field="quotation_rate" data-align="center" data-sortable="true" data-filter-control="input">Job Amount</th>
                                <th data-field="payment_terms" data-align="center" data-sortable="true" data-visible="false" data-filter-control="input">Payment Terms</th>
                                <th data-field="agent_name" data-align="center" data-sortable="true" data-filter-control="select">Agent Name</th>
                                <th data-field="agent_remarks" data-align="center" data-sortable="true" data-filter-control="input">Agent Remarks</th>
                                <th data-field="quotation_status" data-align="center" data-filter-control="select">Quotation Status</th>
                                <th data-field="job_scheduled" data-align="center" data-filter-control="select">Job Scheduled</th>
                                <th data-field="status_changed_date" data-align="center" data-filter-control="input">Last Updated</th>
                                <th data-field="id" data-align="center" data-formatter="statusFormatter">Action</th>
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
            fileName: "Quotation List - Telesales Dashboard - <?php echo $today_date ?>",
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
            fileName: "Quotation List - Telesales Dashboard - <?php echo $today_date ?>",
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
          fileName: "Quotation List - Telesales Dashboard - <?php echo $today_date ?>",
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

        return '<button id="quotation-status-btn-bootbox" data-id="'+ row.id +'" class="btn btn-primary"> Change Status </button>';
 
  }

  function statusFormatter1(value, row, id) {
     
        return '<a href="uploads/QUOTATION-'+ value +'.pdf" class="btn-link" target="_blank"> #'+ value +'</a>';
  }
  
  function statusFormatter2(value, row, id) {
     
        return '<a href="edit_quotation.php?qid='+ row.id +'" class="btn-link" target="_blank"><i class="icon-lg icon-fw demo-psi-pen-5"></i></a>';
  }

  $('#push_payments_data').on('click',function(){

      var Loader = "<div id='loaderimg' class='loader-bg'><div class='loaderimg'><img id='loader-img' alt='Loading Data' src='img/preloader.gif' align='center' /></div></div>";

            $('#dashboard_data').append(Loader);
            $('html').addClass('.no-scroll');


      $.ajax({
            type: 'POST',
            url: 'ajax/push_quotation_data.php',
            success:function(){
               $("#loaderimg").remove();
               $('html').removeClass('no-scroll');
                window.location.href = 'quotation_list.php';
            }
            
        });

    });
</script>