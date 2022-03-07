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
                      <div class="col-md-12">
                        <h1 class="page-header text-overflow">Internal Issues</h1>
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
                        <!--<div class="btn-group mar-rgt" id="date_range" style="margin-left: 15px !important;">-->
                        <!--    <input class="date_range_filter date form-control" type="text" id="min" placeholder="From" />-->
                        <!--</div>-->
                        <!--<div class="btn-group mar-rgt" id="date_range" style="margin-left: 0px;">-->
                        <!--    <input class="date_range_filter date form-control" type="text" placeholder="To" id="max" />-->
                        <!--</div>-->
                    </div>
                    <table data-toggle="table" id="complaints_table"
                           data-url="ajax/get_internal_issues.php"
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
                                <th data-field="id" data-sortable="true" data-switchable="false">ID</th>
                                <th data-field="created_date" data-sortable="true" data-switchable="false">Complaint Date</th>
                                <th data-field="cust_name" data-sortable="true" data-switchable="false">Customer Name</th>
                                <th data-field="cust_mobile" data-sortable="true" data-switchable="false" data-visible="false">Customer Mobile</th>
                                <th data-field="service_type" data-align="center" data-sortable="true" >Service Type</th>
                                <th data-field="service_date" data-align="center" data-sortable="true" data-filter-type="datepicker_range">Service Date</th>
                                <th data-field="job_amount" data-align="center" data-sortable="true">Job Amount</th>
                                <th data-field="department" data-align="center" data-sortable="true">Department</th>                                
                                <th data-field="fault_by" data-align="center" data-sortable="true" data-switchable="false">Staff Name</th>
                                <th data-field="issue" data-align="center" data-sortable="true" data-switchable="false">Issue/Problem</th>
                                <th data-field="agent_name" data-align="center" data-sortable="true" data-visible="false">Agent Name</th>
                                <th data-field="agent_remarks" data-align="center" data-switchable="false">Comments/Action</th>
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
        $('#complaints_table').tableExport({
            type:'excel',
            fileName: "Internal Tickets - Telesales Dashboard - <?php echo $today_date ?>",
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
        $('#complaints_table').tableExport({
            type:'csv',
            fileName: "Internal Tickets - Telesales Dashboard - <?php echo $today_date ?>",
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
        $('#complaints_table').tableExport({
          type:'pdf',
          fileName: "Internal Tickets - Telesales Dashboard - <?php echo $today_date ?>",
          pdfmake: {
            enabled:true
            }
          }
        );
      }


      // $.fn.dataTable.ext.search.push(
      //   function (settings, data, dataIndex) {
      //       var min = $('#min').datepicker("getDate");
      //       var max = $('#max').datepicker("getDate");
      //       var startDate = new Date(data[1].replace( /(\d{2})-(\d{2})-(\d{4})/, "$2/$1/$3"));
      //       if (min == null && max == null) { return true; }
      //       if (min == null && startDate <= max) { return true;}
      //       if(max == null && startDate >= min) {return true;}
      //       if (startDate <= max && startDate >= min) { return true; }
      //       return false;
      //   }
      //   );

       
            // $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
            // $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
            // var table = $('#complaints_table').bootstrapTable();

            // Event listener to the two range filtering inputs to redraw on input
            // $('#min, #max').change(function () {
            //     table.draw();
            // });

            $("#min").datepicker({ onSelect: function () {

              }
            });

            $("#max").datepicker({ onSelect: function () {

              }
            });


            function getDates(startDate, stopDate) {
            var dateArray = [];
            var currentDate = moment(startDate);
            var stopDate = moment(stopDate);
            while (currentDate <= stopDate) {
                dateArray.push( '"'+moment(currentDate).format('YYYY-MM-DD')+'"' )
                currentDate = moment(currentDate).add(1, 'days');
            }
            return dateArray;
            }

            var $table = $('#complaints_table')
            var from = $('#min').datepicker("getDate");
            var to = $('#max').datepicker("getDate");
            // alert(getDates(from,to));
            $table.bootstrapTable('filterBy',{ ETA:[getDates(from,to)]});

            // var $table = $('#complaints_table')
            // var from=$("input[type=date][name=date1]" ).val();
            // var to=$("input[type=date][name=date2]" ).val();
            //   alert(getDates(from,to))
            // $table.bootstrapTable('filterBy',{ ETA:[getDates(from,to)]})


</script>





<!-- $table.bootstrapTable('load', filterData); -->