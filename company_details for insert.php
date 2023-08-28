<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pune Real Estate - Company Details</title>
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
        <link rel="stylesheet" href="assets/js/vendor/daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="assets/js/vendor/morris/morris.css">
        <link rel="stylesheet" href="assets/js/vendor/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/js/vendor/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="assets/js/vendor/rickshaw/rickshaw.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="assets/js/vendor/datatables/datatables.bootstrap.min.css">
        <link rel="stylesheet" href="assets/js/vendor/chosen/chosen.css">
        <link rel="stylesheet" href="assets/js/vendor/summernote/summernote.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->




    </head>


<!-- php code -->
<?php 


/* 
$query_current_user = "SELECT *  FROM registered_users WHERE user_name ='".$current_user."'";
					$result_current_user = mysql_query($query_current_user);
							if (mysql_num_rows($result_current_user) > 0) {
					while($row = mysql_fetch_assoc($result_current_user)) {
						$dob=$row["DOB"];
						$age = (date('Y') - date('Y',strtotime($dob)));
						?>
							
					<h4>Full Name : <?php echo $row["first_name"] ." ". $row["last_name"];?></h4>
					<h4>Gender : <?php echo $row["gender"];?></h4>
					<h4>Age : <?php echo $age;?></h4>
					<h4>Email : <?php echo $row["email"];?></h4>
					<h4>Date Of Birth : <?php echo $row["DOB"];?></h4>
*/



if(count($_POST)>0) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$message = ucwords($key) . " field is required";
	break;
	}
	
	}
	
		


include 'dbcontroller.php';
$db_handle = new DBController();  
	if(!isset($message)) {
		
		$query = "INSERT INTO company_details(website_title,address,gps_coord,phone,fax,email,email_alert,address_footer) VALUES('".$_POST['website_title']."','".$_POST['address']."','".$_POST['gps_coord']."','".$_POST['phone']."','".$_POST['fax']."','".$_POST['email']."','".$_POST['email_alert']."','".$_POST['address_footer']."')";
		
		$result = $db_handle->insertQuery($query);
		
		if(empty($result)) {
			
			$message = "Problem in Updating property. Please Try Again!";	
		}
	}
	}
	
	
?>
<!-- /php code -->	


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

                        <h2>Company Details</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.php"><i class="fa fa-home"></i>Pune Real Estate</a>
                                </li>
                                <li>
                                    <a href="#">Company Details</a>
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
                                    <h1 class="custom-font"><strong>Company</strong>Details</h1>
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
                                
								<section class="tile col-md-8">
								 <!-- tile header -->
                                <div class="tile-header dvd dvd-btm" style="background-color: #bbb5c1">
                                  <h1 class="custom-font"> Company Data </h1>
                                </div>
                                <!-- /tile header -->
								
								 <!-- tile body -->
							 <div class="tile-body">
							 
							 <form action="" method="POST">
							 <div class="row">
							 <div class="col-md-3">
							 Website Title
							 </div>
							 <div class="form-group col-md-9">
							 <input type="text" name="website_title" size="45"  class="form-control">
							 </div>
							 </div>
							 
							 <div class="row">
							 <div class="col-md-3">
							 Address
							 </div>
							 <div class="form-group col-md-9">
							 <input type="text" name="address"  size="45"  class="form-control">
							 </div>
							 </div>
							 
							 <div class="row">
							 <div class="col-md-3">
							 GPS Co-ordinates
							 </div>
							 <div class="form-group col-md-9">
							 <input type="text" name="gps_coord"  size="45"  class="form-control">
							 </div>
							 </div>
							 
							 <div class="row">
							 <div class="col-md-3">
							 Contact E-mail
							 </div>
							 <div class="form-group col-md-9">
							 <input type="text" name="phone" size="45"  class="form-control">
							 </div>
							 </div>
							 
							 <div class="row">
							 <div class="col-md-3">
							 Phone
							 </div>
							 <div class="form-group col-md-9">
							 <input type="text" name="fax" size="45"  class="form-control">
							 </div>
							 </div>
							 
							 <div class="row">
							 <div class="col-md-3">
							 Fax
							 </div>
							 <div class="form-group col-md-9">
							 <input type="text" name="email" size="45"  class="form-control">
							 </div>
							 </div>
							 
							 <div class="row">
							 <div class="col-md-3">
							 Address Footer
							 </div>
							 <div class="form-group col-md-9">
							 <textarea rows="3" type="text" name="address_footer" size="45"  class="form-control">
							 </textarea>
							 </div>
							 </div>
							 
							 <div class="row">
							 <div class="col-md-3">
							 <input type="checkbox" name="email_alert" >
							 </div>
							 <div class="form-group col-md-9">
							 E-mail alerts on new not activated Property
							 </div>
							 </div>
							 
							 </div>
							 
<div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                                    
                                        <input type="submit" name="submit" class="btn btn-success" value="Save">
										  </div>
							 </form>
						 <!-- tile body -->

								</section>
								
								<section class="tile col-md-4">
								
				                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm" style="background-color:#bbb5c1">
                                 <h1 class="custom-font"> Location </h1></div>
                                <!-- /tile header -->
								
								 <!-- tile body -->
							 <div id="mapsAddress">
							 
							 
<iframe style="height:100%;width:100%;border:1;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Pune,+Maharashtra,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
</iframe>
<a class="google-html" rel="nofollow" href="https://www.interserver-coupons.com" id="auth-map-data">https://www.interserver-coupons.com</a>
<style>#display-google-map img{max-width:none!important;background:none!important;}</style>
<script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=052a7ab5-3bf2-d940-70b8-61fa46d7e5a0&c=google-html&u=1478868224" defer="defer" async="async"></script>
														 
							 </div>
						 <!-- tile body -->
								
								
								</section>
								
								
                                
                               

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
