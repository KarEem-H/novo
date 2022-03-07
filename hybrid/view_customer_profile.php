<?php include "header.php" ?>
<?php 

if ($_SESSION['ADMIN_ID']['ID'] == "") {
  echo "<script type='text/javascript'>location.href = 'login.php';</script>";
}

$cust_id=$_REQUEST['cid'];

$sql5 = mysqli_query($conn,"SELECT * FROM table_contacts WHERE customer_id = '$cust_id'");

$row5 = mysqli_fetch_assoc($sql5);

$cust_name= $row5['customer_name'];
$cust_num= $row5['customer_mobile'];

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

.white{
  color: #fff;
}

.divTable{
  display: table;
  width: 100%;
}
.divTableRow {
  display: table-row;
}
.divTableHeading {
  background-color: #EEE;
  display: table-header-group;
}
.divTableCell, .divTableHead {
  border: 1px solid #999999;
  display: table-cell;
  padding: 3px 10px;
  overflow-wrap: break-word;
  word-wrap: break-word;
}
.divTableHeading {
  background-color: #EEE;
  display: table-header-group;
  font-weight: bold;
}
.divTableFoot {
  background-color: #EEE;
  display: table-footer-group;
  font-weight: bold;
}
.divTableBody {
  display: table-row-group;
}

.my-print{
  display:none;
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
      <div id="page-title no-print col-md-12" style="padding:20px;">
        <div class="text-left no-print col-md-6">
          <h1 class="page-header text-overflow">Customer Details</h1>
        </div>
        <div class="text-right no-print">
          <div style="margin-right: 5px;float: right">
            <select name="month_filter" onchange="monthFilter();" id='filter' style="float: right; padding: 5px">
              <option selected disabled>Month Filter</option>
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
            </select>
          </div>

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
        <div class="panel-body text-center">
          <img alt="Profile Picture" class="img-md img-circle mar-btm" src="img/profile-photos/1.png">
          <p class="text-lg text-semibold mar-no text-main"><a href="#" id="customer_name" data-type="text" data-pk="1" data-url="ajax/update_customer_details.php" data-title="Enter Customer"><?php echo $cust_name ?></a></p><br>

          <div id="customer_dashboard">

            <!-- DATA COMING FROM AJAX -->

          </div> 

        </div>


      </div>
      <div class="panel">
        <div class="panel-body">

          <div class="tab-base no-print">

            <!--Nav Tabs-->
            <ul class="nav nav-tabs">
              <li class="active">
                <a data-toggle="tab" href="#demo-lft-tab-1">Job Details <span class="badge badge-purple"><?php echo $cleaning_count ?></span></a>
              </li>
              <li>
                <a data-toggle="tab" href="#demo-lft-tab-2">Payment Details</a>
              </li>                          
              <li>
                <a data-toggle="tab" href="#demo-lft-tab-3">Profile</a>
              </li>
            </ul>

            <!--Tabs Content-->
            <div class="tab-content">
              <div id="demo-lft-tab-1" class="tab-pane fade active in">
                <div class="table-responsive">

                  <table class="job_details" data-toggle="table"
                    data-url="ajax/view_customer_bookings.php?cid=<?php echo $cust_id ?>"
                    data-search="true"
                    data-show-refresh="true"
                    data-show-toggle="true"
                    data-show-columns="true"
                    data-sort-name="id"
                    data-page-list="[5, 10, 20, All]"
                    data-page-size="5"
                    data-pagination="true" data-show-pagination-switch="true">
                  <thead>
                    <tr>
                      <th data-field="id" data-sortable="true">ID</th>
                      <th data-field="job_ref" data-sortable="true" data-formatter="jobFormatter">Job Ref#</th>
                      <th data-field="cleaning_date" data-sortable="true">Job Date</th>
                      <th data-field="cleaning_time" data-sortable="true">Job Time</th>
                      <th data-field="address" data-sortable="true">Address</th>
                      <th data-field="service_type" data-align="center" data-sortable="true">Service Type</th>
                      <th data-field="total" data-align="center" data-sortable="true">Job Amount</th>
                      <th data-field="receipt_amount" data-align="center" data-sortable="true">Paid Amount</th>
                      <th data-field="status_by_finance" data-align="center" data-formatter="statusFormatter">Action</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>

            <div id="demo-lft-tab-2" class="tab-pane fade">
              <table class="payment_details" data-toggle="table"
              data-url="ajax/customer_receipts.php?cid=<?php echo $cust_id ?>"
              data-search="true"
              data-show-refresh="true"
              data-show-toggle="true"
              data-show-columns="true"
              data-sort-name="id"
              data-page-list="[5, 10, 20]"
              data-page-size="5"
              data-pagination="true" data-show-pagination-switch="true">
              <thead>
                <tr>
                  <th data-field="id" data-sortable="true">ID</th>
                  <th data-field="receipt_ref" data-align="center" data-sortable="true">Receipt ID#</th>
                  <th data-field="receipt_amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Received Amount</th>
                  <th data-field="payment_mode" data-align="center" data-sortable="true">Payment Mode</th>
                  <th data-field="payment_date" data-align="center" data-sortable="true">Payment Date</th>
                  <th data-field="agent_remarks" data-align="center" data-sortable="true">Remarks</th>
                </tr>
              </thead>
            </table>

          </div>

          <div id="demo-lft-tab-3" class="tab-pane fade">
            <p class="text-main text-semibold">Customer Details</p>
            <p>Customer ID: <?php echo $cust_id ?></p>
            <p>Name: <?php echo $cust_name ?></p>
            <p>Mobile: <?php echo $cust_num ?></p>
          </div>
        </div>
      </div>



      <hr class="new-section-xs">

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
        $.fn.editable.defaults.mode = 'inline';
        $('#customer_name').editable();
    });


  function statusFormatter(value, row, id) {
    var labelColor;

    if (value != "") {
      labelColor = "success";
    }
    var icon = row.id % 2 === 0 ? 'fa-star' : 'fa-user';

    if (row['status_by_finance'] != 'Paid' && row['status_by_finance'] == 'Not Paid'){
      return '<button id="mark-paid" data-id="'+ row['job_ref']+'" class="btn btn-warning"> Mark Paid </button>';
    }



    if (row['status_by_finance'] == 'Paid' && row['status_by_finance'] != 'Not Paid')
    {
      return '<button data-id="'+ row['job_ref']+'" class="btn btn-success" disabled="disabled"> Already Paid </button>';
    }
  }

  function jobFormatter(value, row, id) {
    return '<a href="#" class="btn-link" id="view-my-booking-btn-bootbox" data-id="'+ row['id']+'">' + row['job_ref'] + '</a>';
  }

  function invoiceFormatter(value, row, id) {
    return '<a href="view_invoice.php?inv='+ row['invoice_ref']+'" class="btn-link" >' + row['invoice_ref'] + '</a>';
  }
</script>  

<script type="text/javascript">

  var monthFilterValue="";

  function monthFilter(){
// CLEAR EXISTING DATA FROM DIV
$("#print_jobs").empty();
$("#print_payments").empty();
$("#customer_dashboard").empty();
// NEED TO EMPTY TOTAL RECORDS 
total_record = 0;
// GET RADIO VALUE
monthFilterValue = $('#filter').val(); 

// alert(timeFilterValue);

GetData();
}

function GetData(){

  var table = $('.job_details');

  table.bootstrapTable('refresh', {
    url: 'ajax/view_customer_bookings.php?cid=<?php echo $cust_id ?>&selected_month='+monthFilterValue,
  });

  var table2 = $('.payment_details');

  table2.bootstrapTable('refresh', {
    url: 'ajax/customer_receipts.php?cid=<?php echo $cust_id ?>&selected_month='+monthFilterValue,
  });

  $.ajax({

    type:"POST",
    url:"ajax/get_customer_dashboard.php",
    data: "selected_month="+monthFilterValue+"&cid=<?php echo $cust_id ?>",
    dataType: "json",
    success:function(response){

      $.each(response, function(index, element) {
        var my_data = '<div class="col-xs-12"><div class="col-xs-3"><div class="panel media middle bg-success pad-all"><div class="media-body"><p class="text-2x mar-no text-semibold text-main white" >'+element.cleaning_count+'</p><p class="text-muted mar-no white">Number of Cleaning</p></div></div></div><div class="col-xs-3"><div class="panel media middle panel panel-warning panel-colorful pad-all"><div class="media-body"><p class="text-2x mar-no text-semibold text-main white">AED '+element.payable_amount+'</p><p class="text-muted mar-no white">Total Revenue</p></div></div></div><div class="col-xs-3"><div class="panel media middle bg-info pad-all"><div class="media-body"><p class="text-2x mar-no text-semibold text-main white">AED '+element.paid_amount+'</p><p class="text-muted mar-no white">Total Amount Paid</p></div></div></div><div class="col-xs-3"><div class="panel media middle panel panel-purple panel-colorful pad-all"><div class="media-body"><p class="text-2x mar-no text-semibold text-main white">AED '+element.total_amount_outstanding+'</p><p class="text-muted mar-no white">Outstanding</p></div></div></div></div></div>';

        $('#customer_dashboard').append(my_data);

      });

    }

  });

  $.ajax({

    type:"POST",
    url:"ajax/view_customer_bookings.php",
    data: "selected_month="+monthFilterValue+"&cid=<?php echo $cust_id ?>",
    dataType: "json",
    success:function(response){

      $.each(response, function(index, element) {
        var my_data = '<div class="divTableRow"><div class="divTableCell" style="width: 9.09%">'+element.job_ref+'</div><div class="divTableCell" style="width: 9.09%">'+element.invoice_ref+'</div><div class="divTableCell" style="width: 9.09%">'+element.job_date+'</div><div class="divTableCell" style="width: 9.09%">'+element.job_time+'</div><div class="divTableCell" style="width: 9.09%">'+element.cleaners+'</div><div class="divTableCell" style="width: 9.09%">'+element.address+'</div><div class="divTableCell" style="width: 9.09%">'+element.approved_amount+'</div><div class="divTableCell" style="width: 9.09%">'+element.invoiced_amount+'</div><div class="divTableCell" style="width: 9.09%">'+element.receipt_amount+'</div><div class="divTableCell" style="width: 9.09%">'+element.outstanding+'</div><div class="divTableCell" style="width: 9.09%">'+element.status_by_finance+'</div></div>';

        $('#print_jobs').append(my_data);

      });

    }

  });

  $.ajax({

    type:"POST",
    url:"ajax/customer_receipts.php",
    data: "selected_month="+monthFilterValue+"&cid=<?php echo $cust_id ?>",
    dataType: "json",
    success:function(response){

      $.each(response, function(index, element) {
        var my_data = '<div class="divTableRow"><div class="divTableCell" style="width: 20%">'+element.comment+'</div><div class="divTableCell" style="width: 20%">'+element.receipt_amount+'</div><div class="divTableCell" style="width: 20%">'+element.mode_of_payment+'</div><div class="divTableCell" style="width: 20%">'+element.payment_date+'</div><div class="divTableCell" style="width: 20%">'+element.remarks_by_finance+'</div></div>';

        $('#print_payments').append(my_data);

      });
    }
  });

}

$(document).ready(function() {

  GetData();

});


</script>