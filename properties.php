<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

<?php include 'db.php'; ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pune Real Estate - Admin Dashboard</title>
        <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">




        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/animate.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="assets/js/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/datatables.bootstrap.min.css">


        <!-- project main css files -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->




    </head>





    <body id="Minovate" class="appWrapper">






        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->












        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" >






            <!-- ===============================================
            ================= HEADER Content ===================
            ================================================ -->
            <section id="header">
                <header class="clearfix">

                    <!-- Branding -->
                    <div class="branding">
                        <a class="brand" href="index.php">
                            <span><strong>Pune</strong>Real Estate</span>
                        </a>
                        <a href="#" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->



                  



                    <!-- Right-side navigation -->
                    <?php  include 'includes/rightnav.php';  ?>
                    <!-- Right-side navigation end -->



                </header>

            </section>
            <!--/ HEADER Content  -->





            <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
            <div id="controls">





                <!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                <aside id="sidebar">


                    <div id="sidebar-wrap">

                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarNav">
                                            Navigation <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">


                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                         <?php include 'navcontent.php'; ?>
                                        <!--/ NAVIGATION Content -->
                                        
                                        
                                    </div>
                                </div>
                            </div>
                          
                        </div>

                    </div>


                </aside>
                <!--/ SIDEBAR Content -->



            </div>
            <!--/ CONTROLS Content -->




            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        <h2>Properties</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.php"><i class="fa fa-home"></i> Pune Real Estate</a>
                                </li>
                                <li>
                                    <a href="#">Properties</a>
                                </li>
                                
                            </ul>
                            
                        </div>

                    </div>

                    <!-- page content -->
                    <div class="pagecontent">


                        <!-- row -->
                        <div class="row">
                            <!-- col -->
                            <div class="col-md-12">



                                <!-- tile -->
                                <section class="tile">

                                    <!-- tile header -->
                                    <div class="tile-header dvd dvd-btm">
                                        <h1 class="custom-font"><strong>Property</strong> List</h1>
                                        <ul class="controls">
                                            <li><a href="addproperty.php"><i class="fa fa-plus mr-5"></i> New Property</a></li>

                                         
                                            <li class="dropdown">

                                                <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                    <i class="fa fa-cog"></i>
                                                    <i class="fa fa-spinner fa-spin"></i>
                                                </a>

                                                <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                    <li>
                                                        <a role="button" tabindex="0" class="tile-toggle">
                                                            <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                            <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a role="button" tabindex="0" class="tile-refresh">
                                                            <i class="fa fa-refresh"></i> Refresh
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a role="button" tabindex="0" class="tile-fullscreen">
                                                            <i class="fa fa-expand"></i> Fullscreen
                                                        </a>
                                                    </li>
                                                </ul>

                                            </li>
                                            <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- /tile header -->

                                    <!-- tile body -->
                                    <div class="tile-body">

                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-custom" id="orders-list">
                                                <thead>
                                                <tr>
                                                    
                                                    <th>ID</th>
													<th>Property Photo</th>
                                                    <th>Type</th>
													<th>Purpose</th>
                                                    <th>Prize</th>
												   <th>Region </th>
												   <th> Address </th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
						<tbody>
						<?php
						$query = "SELECT * FROM property";
						$result = mysqli_query($conn,$query);
						if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){
                                                 ?>
                                                       <tr>
                                                           <td> <?php echo $row['id']; ?> </td>
                                                           <td> <img src="images/<?php echo $row['property_img_one']; ?>" width="100" height="60"> </td>
                                                           <td> <?php echo $row['type']; ?> </td>
                                                           <td> <?php echo $row['purpose']; ?> </td>
                                                           <td> <?php echo $row['prize']; ?> </td>
														   <td> <?php echo $row['region']; ?> </td>
														   <td> <?php echo $row['location']; ?> </td>
                                                           <td>
                                                            <a href="viewproperty.php?id=<?php echo $row["id"]?>"
															 class="btn btn-xs btn-success"><i class="fa fa-search"></i></a>
															 <a href="updateproperty.php?id=<?php echo $row["id"]?>"
															 class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a>
															 <a href="deleteproperty.php?id=<?php echo $row["id"]?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
														   </td>
                                                       </tr>
                                                      
                                                         <?php
												}         }
														 ?>      
                                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                    <!-- /tile body -->

                                </section>
                                <!-- /tile -->

                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->




                    </div>
                    <!-- /page content -->

                </div>
                
            </section>
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->














        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>
        <script src="assets/js/vendor/datatables/extensions/Pagination/input.js"></script>

        <script src="assets/js/vendor/date-format/jquery-dateFormat.min.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="assets/js/main.js"></script>
        <!--/ custom javascripts -->




        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){

                
            });
        </script>
        <!--/ Page Specific Scripts -->







        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

    </body>
</html>
