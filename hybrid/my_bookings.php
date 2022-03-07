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
                        <h1 class="page-header text-overflow">My Bookings</h1>
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
                    <table id="my_bookings"
                           data-search="true"
                           data-show-refresh="true"
                           data-show-toggle="true"
                           data-show-columns="true"
                           data-sort-name="id"
                           data-sort-order="desc"
                           data-page-list="[5, 10, 20]"
                           data-page-size="10"
                           data-pagination="true" data-show-pagination-switch="true">
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



<?php if($agent_role == 'Administrator'){ ?>

<script type="text/javascript">
  $('#my_bookings').bootstrapTable({
        idField: 'id',
        url: 'ajax/get_my_bookings.php',
        columns: [{
            field: 'id',
            title: 'ID'
        },{
            field: 'booking_date',
            title: 'Booking Date'
        },{
            field: 'cleaning_date',
            title: 'Cleaning Date'
        }, {
            field: 'customer_name',
            title: 'Name'            
        }, {
            field: 'customer_mobile',
            title: 'Mobile'
            
        }, {
            field: 'address',
            title: 'Address',
        }, {
            field: 'total',
            title: 'Total',            
        },{
            field: 'agent_name',
            title: 'Agent Name',
                     
        },{
            field: 'agent_remark',
            title: 'Agent Remarks',
            editable: {
                type: 'textarea',
                url: 'ajax/update_my_booking_data.php',
                pk: 'id' 
                }            
        },{
            field: 'id',
            title: 'View',
            formatter:'statusFormatter'           
        },{
            field: 'booking_status',
            title: 'Action',
            formatter:'statusFormatter1'           
        }]
    });
</script>

<?php }else { ?>

<script type="text/javascript">
  $('#my_bookings').bootstrapTable({
        idField: 'id',
        url: 'ajax/get_my_bookings.php',
        columns: [{
            field: 'id',
            title: 'ID'
        },{
            field: 'booking_date',
            title: 'Booking Date'
        },{
            field: 'cleaning_date',
            title: 'Cleaning Date'
        }, {
            field: 'customer_name',
            title: 'Name'            
        }, {
            field: 'customer_mobile',
            title: 'Mobile'
            
        }, {
            field: 'address',
            title: 'Address',
        }, {
            field: 'total',
            title: 'Total',            
        },{
            field: 'agent_name',
            title: 'Agent Name',
                     
        },{
            field: 'agent_remark',
            title: 'Agent Remarks',
            editable: {
                type: 'textarea',
                url: 'ajax/update_my_booking_data.php',
                pk: 'id' 
                }            
        },{
            field: 'id',
            title: 'View',
            formatter:'statusFormatter'           
        }]
    });
</script>

<?php } ?>

<script type="text/javascript">

  function statusFormatter(value, row, id) {

    return '<button id="view-my-booking-btn-bootbox" data-id="'+ row.id +'" class="btn btn-info"> View </button>';

  }

  function statusFormatter1(value, row, id) {

    var labelColor;
    
    if(value != 'Cancelled'){

        return '<button id="mark-cancelled-btn-bootbox" data-id="'+ row.id +'" class="btn btn-primary"> Cancel Job </button>';
    }else{
        return "Job Cancelled";
    }
    
    
  }

</script>
