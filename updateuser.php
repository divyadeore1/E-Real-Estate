<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pune Real Estate - View User</title>
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
        <link rel="stylesheet" href="assets/js/vendor/daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="assets/js/vendor/chosen/chosen.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->




    </head>


<?php
include "db.php";
$viewid = $_GET['userid'];
if(isset($_POST['submit'])){
$update = "UPDATE user SET name='".$_POST['name']."', address='".$_POST['address']."', emailid='".$_POST['emailid']."', phoneno ='".$_POST['phoneno']."', aadharno='".$_POST['aadharno']."', username='".$_POST['username']."', password ='".$_POST['password']."', dob='".$_POST['dob']."',user_type='".$_POST['user_type']."' WHERE userid='".$viewid."'";
$update_query = mysqli_query($conn,$update);
		
if($update_query) {
			header ("Location: http://localhost/e_real_estate/admin/registered_users.php");
			
		}else{
	$message = "Problem in Updating property. Please Try Again!";	
	}
}


?>

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

                <div class="page page-shop-single-order">

                    <div class="pageheader">

                        <h2>View User</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.php"><i class="fa fa-home"></i>Pune Real Estate</a>
                                </li>
                                <li>
                                    <a href="#">View User</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>

                    <div class="pagecontent">

                                        <!-- row -->
                                        <div class="row">
                                            <!-- col -->
                                            <div class="col-md-12">
											
											
											
											
											
											
											   <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>View</strong>User</h1>
                                    <ul class="controls">
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
                                 
								
								 
								 
								 <div class="row" style="margin-top: 15px;">
<?php
$viewid = $_GET['userid'];
$query = "SELECT * FROM user WHERE userid='".$viewid."'";
$result = mysqli_query($conn,$query);	
if(mysqli_num_rows($result) > 0){							 
while( $row = mysqli_fetch_assoc($result)){
?>	
<form action="" method="POST">
								   <div class="col-md-9">
								   
								   <div class="col-sm-4  p-table"> Name </div>
								   <div class="col-sm-8  p-table"> 
								   <input type="text" name="name" value="<?php echo $row['name'];?>"  class="form-control" >
								   </div>
								   
								   <div class="col-sm-4 p-table"> Address </div>
								   <div class="col-sm-8 p-table"> 
								   <input type="text" name="address" value="<?php echo $row['address']; ?>"  class="form-control">
								   </div>
								   
								   <div class="col-sm-4 p-table"> Email Id </div>
								   <div class="col-sm-8 p-table">
								   <input type="text" name="emailid" value="<?php echo $row['emailid']; ?>"  class="form-control">
								   </div>
								   
								   <div class="col-sm-4 p-table"> Phone no </div>
								   <div class="col-sm-8 p-table">
								   <input type="text" name="phoneno" value="<?php echo $row['phoneno']; ?>"  class="form-control">
								   </div>
								   
								   <div class="col-sm-4 p-table"> Aadhar no </div>
								   <div class="col-sm-8 p-table">
								   <input type="text" name="aadharno" value="<?php echo $row['aadharno']; ?>"  class="form-control">
								   </div>
								   
								   <div class="col-sm-4 p-table"> Username</div>
								   <div class="col-sm-8 p-table"> 
								   <input type="text" name="username" value="<?php echo $row['username']; ?>"  class="form-control">
								   </div>
								   
								   <div class="col-sm-4 p-table"> Password </div>
								   <div class="col-sm-8 p-table">
								   <input type="text" name="password" value="<?php echo $row['password']; ?>"  class="form-control">
								   </div>
								   
								   <div class="col-sm-4 p-table"> DOB</div>
								   <div class="col-sm-8 p-table">
								   <input type="text" name="dob" value="<?php echo $row['dob']; ?>"  class="form-control">
								   </div>
								   
								   <div class="col-sm-4 p-table"> User Type </div>
								   <div class="col-sm-8 p-table">
								   <input type="text" name="user_type" value="<?php echo $row['user_type'];?>"  class="form-control">
								   </div>
								   
								   <div class="col-sm-4"><input type="submit" name="submit" value="Update" class="btn btn-warning"> </div>
								   </div>
								   
								   <div class="col-md-3">
								   <img src="images/<?php echo $row['user_photo']; ?>" width="200">
								   </div>
</form>								   
<?php } } else{
mysqli_error($result);
}?>							   
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
	</div>
	</section>
	</div>



      


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

        <script src="assets/js/vendor/parsley/parsley.min.js"></script>
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
