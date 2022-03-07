<?php 

    $agent_name = $_SESSION['ADMIN_ID']['NAME'];
    $agent_role = $_SESSION['ADMIN_ID']['ROLE'];

?>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body style="background-color: #ecf0f5">
    <div id="container" class="effect aside-float aside-bright mainnav-sm">

        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.php" class="navbar-brand">
                        <img src="img/higi-hybrid-logo.png" alt="Higitech Logo" class="brand-icon">
                        <img src="img/higi-fav.png" alt="Higitech Logo" class="brand-icon1" style="display:none">
                    </a>
                </div>
                
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content no-print">
                    <ul class="nav navbar-top-links">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->

                    </ul>

                    <ul class="nav navbar-top-links">
                        
                        <!--<li class="tgl-menu-btn" style="margin-top: 15px">-->
                        <!--    <div class="col-md-6" style="text-align: right">-->
                        <!--        <a class="btn btn-primary" id="add_maintenance">+ Add Maintenance Job</a>-->
                        <!--    </div>-->
                        <!--</li>-->
                        
                        <!--<li class="tgl-menu-btn" style="margin-top: 15px">-->
                        <!--    <div class="col-md-6" style="text-align: right">-->
                        <!--        <a class="btn btn-primary" id="add_callout">+ Callout</a>-->
                        <!--    </div>-->
                        <!--</li>-->
                        
                        
                        
                        <!--<li class="tgl-menu-btn" style="margin-top: 15px">-->
                        <!--    <div class="col-md-6" style="text-align: right">-->
                        <!--        <a class="btn btn-primary" id="add_complaints">+ Add Complaints</a>-->
                        <!--    </div>-->
                        <!--</li>-->
                        
                        
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <!--You can use an image instead of an icon.-->
                                    <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <i class="demo-pli-male" ></i>
                                </span>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--You can also display a user name in the navbar.-->
                                <!-- <div class="username hidden-xs">Aaron Chavez</div> -->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            </a>


                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                                <ul class="head-list">
                                    <!-- <li>
                                        <a href="#"><i class="demo-pli-male icon-lg icon-fw"></i> Profile</a>
                                    </li>                                    
                                    <li>
                                        <a href="#"><i class="demo-pli-gear icon-lg icon-fw"></i> Settings</a>
                                    </li>  -->                                   
                                    <li>
                                        <a href="logout.php"><i class="demo-pli-unlock icon-lg icon-fw"></i> Logout (<?php echo $_SESSION['ADMIN_ID']['NAME']; ?>)</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                
                            </a>
                        </li>

                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        