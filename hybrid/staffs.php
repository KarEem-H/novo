<?php include "header.php" ?>


<?php 

include "config/connection.php";

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
                <h1 class="page-header text-overflow">Staffs</h1>
            </div>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="demo-pli-home"></i></a></li>
                <li><a href="index.php">Dashboard</a></li>
                <li class="active">Staffs</li>
            </ol>
            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
            <!--End page title-->
        </div>


        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">

            <!-- Contact Toolbar -->
            <!---------------------------------->
            <div class="row pad-btm">
                <div class="col-sm-6 toolbar-left">
                    <button id="add_staff" class="btn btn-purple">Add New</button>
                </div>
            </div>
            <!---------------------------------->


            <div class="row">

                <div class="panel">
                        <!--<div class="panel-heading">-->
                        <!--    <h3 class="panel-title">Staff List</h3>-->
                        <!--</div>-->
                        <div class="panel-body">
                            <table id="staff_table"
                                   data-search="true"
                                   data-show-refresh="true"
                                   data-show-toggle="true"
                                   data-show-columns="true"
                                   data-sort-name="id"
                                   data-page-list="[5, 10, 20]"
                                   data-page-size="10"
                                   data-pagination="true" data-show-pagination-switch="true">
                            </table>
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
    $('#staff_table').bootstrapTable({
        idField: 'id',
        url: 'ajax/staff_data.php',
        columns: [{
            field: 'id',
            title: 'ID'
        },{
            field: 'staff_id',
            title: 'Staff ID',
            editable: {
                type: 'text',
                url: 'ajax/update_staff_data.php',
                pk: 'id'
            }
        }, {
            field: 'staff_name',
            title: 'Name',
            editable: {
                type: 'text',
                url: 'ajax/update_staff_data.php',
                pk: 'id'
            }
        }, {
            field: 'staff_category',
            title: 'Category', 
            editable: {
                type: 'text',
                url: 'ajax/update_staff_data.php',
                pk: 'id'               
            }
        }, {
            field: 'staff_status',
            title: 'Status',
            editable: {
                type: 'text',
                url: 'ajax/update_staff_data.php',
                pk: 'id'               
            }
        }]
    });
</script>