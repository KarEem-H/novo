<?php include "header.php";

$selected_date = $_REQUEST['selected_date'];

?>
<?php 

if ($_SESSION['ADMIN_ID']['ID'] == "") {
    echo "<script type='text/javascript'>location.href = 'login.php';</script>";
}

?>
<?php include "menubar.php" ?>

<style>
    .text-2x{
        font-size:1.8em !important;
    }
    .widget-body {
        padding: 50px 0px 15px;
    }
    .label{
        font-size: 100%;
    }

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
                      <div class="col-md-6">
                        <h1 class="page-header text-overflow">Availability - <?php echo $selected_date ?></h1>
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
                    <div id="demo-custom-toolbar2" class="table-toolbar-left col-sm-12 col-md-12" style="padding: 18px;" width="100%">
                        <a href="#!" class="btn btn-default btn-active-purple btn-excel">Excel</a>
                        <a href="#!" class="btn btn-default btn-active-purple btn-csv">CSV</a>
                        <a href="#!" class="btn btn-default btn-active-purple btn-pdf">PDF</a>
                        <a href="#!" class="btn btn-default btn-active-purple btn-print">Print</a>
                    </div>
                    <table id="availability_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead>
                              <tr>
                                  <th class="min-tablet">Id</th>
                                  <th class="min-tablet">Date</th>
                                  <th class="min-tablet">Cleaner Name</th>
                                  <th class="min-tablet">Number of Bookings</th>
                                  <th class="min-tablet">Hours Booked</th>
                                  <th class="min-tablet">Hours Available </th>
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
    $(document).ready(function(){

        var my_date = <?php echo $selected_date ?>;

          var dataTable = $('#availability_table').DataTable({
            'processing': true,
            'serverSide': false,
            'serverMethod': 'post',
            "scrollX": true,
            "paging": true,
            'order': [[0, 'desc']],
            
            responsive: true,
            "dom": 'Blfrtip',
                  buttons: [{
                        extend: 'excel',
                        title: 'Availability Report - <?php echo $selected_date ?> - Telesales Dashboard'
                        
                    },
                    {
                        extend: 'csv',
                        title: 'Auto Dialer - <?php echo $selected_date ?> - Telesales Dashboard'
                        
                    },
                    {
                        extend: 'pdf',
                        title: 'Auto Dialer - <?php echo $selected_date ?> - Telesales Dashboard'
                       
                    },
                    {
                        extend: 'print',
                        title: 'Auto Dialer - <?php echo $selected_date ?> - Telesales Dashboard'
                        
                    },
                  ],
            'searching': false,
            'ajax': {
               'url':'ajax/get_availability.php?selected_date=<?php echo $selected_date; ?>',               
                },
                'columns': [
                   { data: 'id' }, 
                   { data: 'cleaning_date' },
                   { data: 'assigned_staff_name' },
                   { data: 'booking_count' },
                   { data: 'booked_hours' },
                   { data: 'available_hours' },
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
            
            setTimeout(function(){ location.reload(); }, 100000);


        });  
</script>
