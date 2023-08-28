<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

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
        <link rel="stylesheet" href="assets/js/vendor/magnific-popup/magnific-popup.css">
        <link rel="stylesheet" href="assets/js/vendor/chosen/chosen.css">
         <link rel="stylesheet" href="assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.css">


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


                     <!-- Left-side navigation -->
                    <?php include 'includes/leftnav.php';?>
                    <!-- Left-side navigation end -->



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

                <div class="page page-shop-single-product">

                    <div class="pageheader">

                        <h2>Reviews</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.php"><i class="fa fa-home"></i> Pune Real Estate</a>
                                </li>
                                <li>
                                    <a href="#">Reviews</a>
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
                                                        <h1 class="custom-font">Reviews</h1>
                                                    </div>
                                                    <!-- /tile header -->

                                                    <!-- tile body -->
                                                    <div class="tile-body p-0">

                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Rating</th>
                                                                    <th>Review Date</th>
                                                                    <th>User</th>
                                                                    <th>Message</th>
                                                                    <th>Status</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td><a href="javascript:;">1</a></td>
                                                                    <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star-half-o text-orange"></i><i class="fa fa-star-o"></i></td>
                                                                    <td>Jan 20, 2015</td>
                                                                    <td>Customer 1</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                                                    <td><span class="label label-success">approved</span></td>
                                                                    <td>
                                                                        <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-search"></i> View</a>
                                                                        <a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="javascript:;">2</a></td>
                                                                    <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star-half-o text-orange"></i><i class="fa fa-star-o"></i></td>
                                                                    <td>Jan 20, 2015</td>
                                                                    <td>Customer 2</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                                                    <td><span class="label label-success">approved</span></td>
                                                                    <td>
                                                                        <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-search"></i> View</a>
                                                                        <a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="javascript:;">3</a></td>
                                                                    <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star-half-o text-orange"></i><i class="fa fa-star-o"></i></td>
                                                                    <td>Jan 21, 2015</td>
                                                                    <td>Customer 3</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                                                    <td><span class="label label-warning">pending</span></td>
                                                                    <td>
                                                                        <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-search"></i> View</a>
                                                                        <a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="javascript:;">4</a></td>
                                                                    <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star-half-o text-orange"></i><i class="fa fa-star-o"></i></td>
                                                                    <td>Jan 21, 2015</td>
                                                                    <td>Customer 4</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                                                    <td><span class="label label-danger">rejected</span></td>
                                                                    <td>
                                                                        <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-search"></i> View</a>
                                                                        <a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="javascript:;">5</a></td>
                                                                    <td><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star text-orange"></i><i class="fa fa-star-half-o text-orange"></i><i class="fa fa-star-o"></i></td>
                                                                    <td>Jan 21, 2015</td>
                                                                    <td>Customer 5</td>
                                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                                                    <td><span class="label label-danger">rejected</span></td>
                                                                    <td>
                                                                        <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-search"></i> View</a>
                                                                        <a href="javascript:;" class="btn btn-xs btn-lightred"><i class="fa fa-times"></i> Delete</a>
                                                                    </td>
                                                                </tr>
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

        <script src="assets/js/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.js"></script>
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
