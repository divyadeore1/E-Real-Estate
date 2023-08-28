<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pune Real Estate - View Property </title>
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

<?php
include "db.php";
$property_id = $_GET['id'];


if(isset($_POST['submit'])){
if(isset($_POST['is_featured'])){
$j = 1;
}
else{
 $j = 0;
} 
 


$update = "UPDATE property SET owner='".$_POST['owner']."',type='".$_POST['type']."', purpose='".$_POST['purpose']."',region='".$_POST['region']."',location='".$_POST['location']."',prize='".$_POST['prize']."',size='".$_POST['size']."', is_featured='".$j."', property_desc='".$_POST['property_desc']."' WHERE id='".$property_id."'";
$update_query = mysqli_query($conn,$update);
if($update_query) {
			header ("Location: http://localhost/e_real_estate/admin/properties.php");
			
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

                        <h2>Update Property</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.php"><i class="fa fa-home"></i>Pune Real Estate</a>
                                </li>
                                <li>
                                    <a href="#">Update Property</a>
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
                                    <h1 class="custom-font"><strong>Update</strong>Property</h1>
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
								
<?php
$property_id = $_GET['id'];
$query = "SELECT * FROM property WHERE id='".$property_id."'";
$result = mysqli_query($conn,$query);	
if(mysqli_num_rows($result) > 0){							 
while( $row = mysqli_fetch_assoc($result)){
?>		
<form action="" method="POST">					
                                <div class="tile-body">
                                 
								 <div class="row">
								 <div class="col-sm-3">
								 <img src="images/<?php echo $row['property_img_one'];?>" width="200" height="160">
								 </div>
								 <div class="col-sm-3">
								 <img src="images/<?php echo $row['property_img_two'];?>" width="200" height="160">
								 </div>
								 <div class="col-sm-3">
								 <img src="images/<?php echo $row['property_img_three'];?>" width="200" height="160">
								 </div>
								 <div class="col-sm-3">
								 <img src="images/<?php echo $row['property_img_four'];?>" width="200" height="160">
								 </div>
								 </div>
								 
								 
								 <div class="row" style="margin-top: 15px;">
								   <div class="row">
								   <div class="col-sm-3  p-table" style="text-align:right;"> Owner </div>
								   <div class="col-sm-8  p-table">
								    <input type="text" name="owner" value="<?php echo $row['owner']; ?> "  class="form-control" >
								   </div>
								   </div>
								   
								   <div class="row">
								   <div class="col-sm-3 p-table" style="text-align:right;"> Type </div>
								   <div class="col-sm-8 p-table"> 
								    <input type="text" name="type" value="<?php echo $row['type']; ?>"  class="form-control" >
								   </div>
								   </div>
								   
								   <div class="row">
								   <div class="col-sm-3 p-table" style="text-align:right;"> Purpose </div>
								   <div class="col-sm-8 p-table"> 
								    <input type="text" name="purpose" value="<?php echo $row['purpose']; ?>"  class="form-control" >
								   </div>
								   </div>
								   
								   <div class="row">
								   <div class="col-sm-3 p-table" style="text-align:right;"> Region </div>
								   <div class="col-sm-8 p-table"> 
								    <input type="text" name="region" value="<?php echo $row['region']; ?> "  class="form-control" >
								   </div>
								   </div>
								   
								   <div class="row">
								   <div class="col-sm-3 p-table" style="text-align:right;"> Location</div>
								   <div class="col-sm-8 p-table">
								    <input type="text" name="location" value="<?php echo $row['location']; ?>"  class="form-control" >
								   </div>
								   </div>
								   
								   <div class="row">
								   <div class="col-sm-3 p-table" style="text-align:right;"> Prize </div>
								   <div class="col-sm-8 p-table"> 
								    <input type="text" name="prize" value="<?php echo $row['prize']; ?> "  class="form-control" >
								   </div>
								   </div>
								   
								   <div class="row">
								   <div class="col-sm-3 p-table" style="text-align:right;"> Size </div>
								   <div class="col-sm-8 p-table">
								    <input type="text" name="size" value="<?php echo $row['size']; ?>"  class="form-control" >
								   </div>
								   </div>
								   
								   <div class="row">
								   <div class="col-sm-3 p-table" style="text-align:right;"> Property Description </div>
								   <div class="col-sm-8 p-table">
                                   <textarea class="form-control" rows="4" name="property_desc" required><?php echo $row['property_desc'];?></textarea>
                                   </div>
								   </div>
								   
								   <div class="row">
								   <div class="col-sm-3 p-table" style="text-align:right;">Is Featured</div>
                                   <div class="col-sm-8">								   
								   <div class="onoffswitch drank inline-block" style="margin-top: 10px;">
                                                    <input type="checkbox" name="is_featured" value="1" <?php echo ($row['is_featured'] == 1) ? 'checked="checked"' : ' ';?>
													class="onoffswitch-checkbox form-control" id="switch03">
                                                    <label class="onoffswitch-label" for="switch03">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                      </div>
							       </div>
								   </div>	
								   
								   <div class="clearfix"> </div>
								   
								   
								    
								   <div class="row">
								   <div class="col-md-12">
								    <div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
								<input type="submit" name="submit" value="Update" class="btn btn-warning">
								<a href="deleteproperty.php?id=<?php echo $row["id"]?>"> <input type="button" value="Delete" class="btn btn-warning"></a>
								</div>
								</div>
								  </div>
								 </div>

                                </div>
                                <!-- /tile body -->
</form>
<?php

 } }  else{
mysqli_error($result);
}
?>                       
                            </section>
                            <!-- /tile -->
											
											
											

		
                        </div>
                        <!-- /col -->



                    </div>
                    <!-- /row -->					
							
							
							
	



      


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
            $(window).load(function(){});
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
