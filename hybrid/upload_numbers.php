<?php include "header.php" ?>
<?php 

if ($_SESSION['ADMIN_ID']['ID'] == "") {
    echo "<script type='text/javascript'>location.href = 'login.php';</script>";
}

?>
<?php include "menubar.php" ?>
<style type="text/css">
    .bootstrap-select{
        width: 100% !important;
    }
    tr td{
        padding: 5px;
    }

    body .select2-container--default .select2-selection--multiple .select2-selection__choice{
        height: 32px !important;
    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove{
        padding-top: 5px !important;
    }

    .select2-container .select2-selection--multiple{
        height: 46px !important;
    }

    .select2-container .select2-search--inline .select2-search__field{
        height: 46px !important;
        margin-top: 0px !important;
    }



</style>


        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">

                <div id="page-head">
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Upload Contacts for Auto Dialer</h1>
                    </div>
                </div>
                             
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Upload Call List</h3>
                        </div>
                        <div class="panel-body">
                            <p class="text-main text-bold mar-no">CSV Format Only</p>
                                               
                            <br>
                            <form id="daily_report_upload" action="ajax/upload_auto_dialer_list.php" class="dropzone">
                                <div class="dz-default dz-message">
                                    <div class="dz-icon">
                                        <i class="demo-pli-upload-to-cloud icon-5x"></i>
                                    </div>
                                    <div>
                                        <span class="dz-text">Drop files to upload</span>
                                        <p class="text-sm text-muted">or click to pick manually</p>
                                    </div>
                                </div>
                                <div class="fallback">
                                    <input name="file" type="file" multiple>
                                </div>
                            </form>
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        Dropzone.options.daily_report_upload = {
        autoProcessQueue: false,
        init: function() {
        var myDropzone = this;

        }

    }

    Dropzone.options.receipt_upload = { 
        autoProcessQueue: false,
        init: function() {
        var myDropzone = this;

        }

    }

});
</script>

