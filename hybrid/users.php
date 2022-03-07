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
                <h1 class="page-header text-overflow">Users</h1>
            </div>
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
                    <button id="add_user" class="btn btn-purple">Add New</button>
                </div>
            </div>
            <!---------------------------------->


            <div class="row">

                <?php 


                $sql = mysqli_query($conn,"SELECT * from table_agents");

                $tot = count($sql);

                if ( $tot > 0) {

                while ($row = mysqli_fetch_array($sql, MYSQLI_ASSOC))
                        
                  {
                      $db[] = $row;
                  }

                  foreach ($db as $row) { 

                ?>
                <div class="col-sm-4 col-md-3">
                    <div class="panel pos-rel">
                        <div class="widget-control text-right">
                            <a href="#" class="add-tooltip btn btn-trans" data-original-title="Favorite"><span class="favorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
                        </div>
                        <div class="pad-all">
                            <div class="media pad-ver">
                                <div class="media-left">                                    
                                    <a href="#" class="box-inline">
                                        <?php if($row['agent_role'] == 'Telesales'){ ?>
                                            <img alt="Profile Picture" class="img-md img-square" src="img/profile-photos/agent.png">
                                        <?php } ?>
                                        <?php if($row['agent_role'] == 'Administrator' || $row['agent_role'] == 'Staycae'){ ?>
                                            <img alt="Profile Picture" class="img-md img-square" src="img/profile-photos/admin.png">
                                        <?php } ?>
                                        <?php if($row['agent_role'] == 'Coordinator'){ ?>
                                            <img alt="Profile Picture" class="img-md img-square" src="img/profile-photos/coordinator.png">
                                        <?php } ?>
                                        <?php if($row['agent_role'] == 'Scheduler'){ ?>
                                            <img alt="Profile Picture" class="img-md img-square" src="img/profile-photos/scheduler.png">
                                        <?php } ?>
                                        <?php if($row['agent_role'] == 'Payment Collector'){ ?>
                                            <img alt="Profile Picture" class="img-md img-square" src="img/profile-photos/payment.png">
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="media-body pad-top">
                                    <a href="#" class="box-inline">
                                        <span class="text-lg text-semibold text-main"><?php echo $row['agent_name'] ?></span>
                                        <p class="text-sm"><?php echo $row['agent_role'] ?></p>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="text-center pad-to">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-default"><i class="demo-pli-recycling icon-lg icon-fw"></i> Delete</a>
                                    <a href="edit_user.php?rid=<?php echo $row['id'] ?>" class="btn btn-sm btn-default"><i class="demo-pli-pen-5 icon-lg icon-fw"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php }                                 
                              
                }

            ?>

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