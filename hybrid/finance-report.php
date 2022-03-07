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
                        <h1 class="page-header text-overflow">Sanal's Report</h1>
                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->
                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
                    
                    
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                       
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->
                
                    
              <!-- Contact Toolbar -->
              <!---------------------------------->
              <div class="panel">
                <div id="page-head">
                         <div id="page-title">
                            <div class="col-md-12 text-center">
                            <p>Enter a date range and click download</p>
                          </div>
                        </div>
                    </div>
                <div class="panel-body">
                    
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                      <div id="demo-dp-range">
                        <div class="input-daterange input-group" id="datepicker">
                            <input type="text" class="form-control" name="start" id="start">
                            <span class="input-group-addon">to</span>
                            <input type="text" class="form-control" name="end" id="end">
                            <input type="hidden" class="form-control" id="from">
                            <input type="hidden" class="form-control" id="to">

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row" style="margin-top: 20px;">
                    <div class="col-md-12" style="text-align: center;">
                        <a class="btn btn-primary" id="download_report">Generate Report</a>
                    </div>
                  </div>
                  
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
  var min = $('#start').datepicker({
    onSelect: function (dateText) {
      // set date
      jQuery('#from').val(dateText);
  }

  });

    var max = $('#end').datepicker({
      onSelect: function (dateText) {
      // set date
      jQuery('#to').val(dateText);
    }

  });

  $('#download_report').on('click', function(){

        var start_date = $('#from').val();
        var end_date = $('#to').val();

        window.location.href='ajax/get_finance_report.php?start_date='+start_date+'&end_date='+end_date;

  });


</script>