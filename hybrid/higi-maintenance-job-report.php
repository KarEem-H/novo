<?php include "header.php" ?>
<?php 

if ($_SESSION['ADMIN_ID']['ID'] == "") {
    echo "<script type='text/javascript'>location.href = 'login.php';</script>";
}

?>
<?php include "menubar.php" ?>

<style type="text/css">
  .dt-button {
    padding: 10px;
    border: 2px solid;
    margin: 5px;
    display: none;
}

.dataTables_length{
  width: 30%;
  float: left;
  padding-top: 5px;
}

@media screen and (max-width: 767px){

    .dataTables_length{
      display: none !important;
    }
}
</style>

  
  <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">
                 <div id="page-head">
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Higi Maintenance Jobs Report</h1>
                    </div>
                    
                    <ol class="breadcrumb">
          						<li><a href="index.php"><i class="demo-pli-home"></i></a></li>
          						<li><a href="index.php">Dashboard</a></li>						
                    </ol>
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
                  <div id="demo-custom-toolbar2" class="table-toolbar-left col-sm-12 col-md-12" style="padding: 18px;" width="100%">
                        <a href="#!" class="btn btn-default btn-active-purple btn-excel">Excel</a>
                        <a href="#!" class="btn btn-default btn-active-purple btn-csv">CSV</a>
                        <a href="#!" class="btn btn-default btn-active-purple btn-pdf">PDF</a>
                        <a href="#!" class="btn btn-default btn-active-purple btn-print">Print</a>
                        <div class="btn-group mar-rgt" id="date_range" style="margin-left: 15px !important;">
                            <input class="date_range_filter date form-control" type="text" id="min" placeholder="From" />
                        </div>
                        <div class="btn-group mar-rgt" id="date_range" style="margin-left: 0px;">
                            <input class="date_range_filter date form-control" type="text" placeholder="To" id="max" />
                        </div>
                    </div>
                  
                    <table id="all_jobs_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                          <tr>
                              <th class="min-tablet">Id</th>
                              <th class="min-tablet">Job Id</th>
                              <th class="min-tablet">Quotation ID</th>
                              <th class="min-desktop">Service Date</th>
                              <th class="min-desktop" data-visible="false">Service Time</th>
                              <th class="min-desktop">Title</th>
                              <th class="min-desktop">Details</th>
                              <th class="min-desktop">Client Name</th>
                              <th class="min-desktop" data-visible="false">Mobile</th>
                              <th class="min-desktop">Building</th>
                              <th class="min-desktop">Address</th>
                              <th class="min-desktop">Category</th>
                              <th class="min-desktop">Status</th>
                              <th class="min-desktop" data-visible="false">Created at</th>
                              <th class="min-desktop">Last Updated</th>
                              <th class="min-desktop" data-visible="false">Approved By</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php 
                        
                        $sql = mysqli_query($conn,"SELECT * FROM `maintenance_jobs`");

                        while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
                            
                        {
                            $db[] = $row;
                        } 
                        
                        $serialno = '1';       
                        foreach ($db as $row) { ?>
                        <tr>
                            <td><?php echo $serialno++ ?></td>
                            <td><?php echo $row['mid'] ?></td>
                            <td><?php echo $row['quotation_id'] ?></td>
                            <td><?php echo $row['available_date'] ?></td>
                            <td><?php echo $row['time_slot'] ?></td>
                            <td><?php echo $row['title'] ?></td>
                            <td><?php echo $row['details'] ?></td>
                            <td><?php echo $row['tenant_full_name'] ?></td>
                            <td><?php echo $row['tenant_phone'] ?></td>
                            <td><?php echo $row['property_name'] ?></td>
                            <td><?php echo $row['property_address'] ?></td>
                            <td><?php echo $row['category'] ?></td>
                            <td><?php echo $row['status'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                            <td><?php echo $row['updated_at'] ?></td>
                            <td><?php echo $row['feedbacks'] ?></td>
                        </tr>     
                            
                       <?php }                                 
                              
                            

                        ?>
                                               
                      </tbody>
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
    $(document).ready(function() {
       $('#all_jobs_table').DataTable({
            "scrollX": true,
            "pagingType": "full_numbers",
            'order': [[0, 'desc']],
            'pageLength': 10,
            'lengthMenu': [10, 20, 25, 30],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            },
            dom: 'Blfrtip',
            buttons: [{
                  extend: 'excel',
                  title: 'WS Maintenance Jobs Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'csv',
                  title: 'WS Maintenance Jobs Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'pdf',
                  title: 'WS Maintenance Jobs Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
              {
                  extend: 'print',
                  title: 'WS Maintenance Jobs Report - <?php echo $today_date ?> - Telesales Dashboard',
                  
              },
            ]
        });

        $('.btn-csv').click(function(){
          $('.buttons-csv').trigger('click');
        });
        $('.btn-excel').click(function(){
          $('.buttons-excel').trigger('click');
        });
        $('.btn-pdf').click(function(){
          $('.buttons-pdf').trigger('click');
        });   
        $('.btn-print').click(function(){
          $('.buttons-print').trigger('click');
        });


       $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            var min = $('#min').datepicker("getDate");
            var max = $('#max').datepicker("getDate");
            var startDate = new Date(data[3].replace( /(\d{2})-(\d{2})-(\d{4})/, "$2/$1/$3"));
            if (min == null && max == null) { return true; }
            if (min == null && startDate <= max) { return true;}
            if(max == null && startDate >= min) {return true;}
            if (startDate <= max && startDate >= min) { return true; }
            return false;
        }
        );

       
            $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
            $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
            var table = $('#all_jobs_table').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').change(function () {
                table.draw();
            });


});


</script>