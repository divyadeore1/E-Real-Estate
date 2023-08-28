<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pune Real Estate - Add Property</title>
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

include 'dbcontroller.php';
$db_handle = new DBController();
if(count($_POST)>0) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$message = ucwords($key) . " field is required";
	break;
	}
	
	}
	
	/* Owner name Validation */
	if(!isset($message))
	{
		if (!preg_match("/^[a-zA-Z ]*$/",$_POST['owner'])){
			$message="Owner name should contain only characters.";
		}
	}
  
	if(!isset($message)) {
if(isset($_POST['is_featured'])){
$j = 1;
}else{
$j = 0;
} 
		$query ="INSERT INTO property(owner,type,purpose,prize,size,location,region,property_desc,is_featured, property_img_one,property_img_two,property_img_three,property_img_four) VALUES 
		('".$_POST['owner']."','".$_POST['type']."','".$_POST['purpose']."','".$_POST['prize']."','".$_POST['size']."','".$_POST['location']."','".$_POST['region']."','".$_POST['property_desc']."','".$j."'
		 ,'".$_POST['property_img_one']."','".$_POST['property_img_three']."','".$_POST['property_img_two']."'
		 ,'".$_POST['property_img_four']."')";
		$result = $db_handle->insertQuery($query);
		
		if(!empty($result)) {
			$message = "Your property added successfully!";	
			unset($_POST);
			header ("Location: http://localhost/e_real_estate/admin/properties.php");
			
		} else {
			$message = "Problem in adding property. Please Try Again!";	
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

                        <h2>Add Property</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.php"><i class="fa fa-home"></i>Pune Real Estate</a>
                                </li>
                                <li>
                                    <a href="#">Add Property</a>
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
                                    <h1 class="custom-font"><strong>Add</strong>Property</h1>
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
								
								<div style="color: red;"><?php if(isset($message))echo $message; ?></div>

                                    <form action="addproperty.php" name="form1" role="form" id="form1" method="POST">

                                        <div class="form-group">
                                            <label for="owner">Owner</label>
                                            <input type="text" name="owner" class="form-control"
                                                   data-parsley-trigger="change"
                                                   required>
                                        </div>
										
										<div class="row">

                                        <div class="col-md-6">
										<div class="form-group">
                                            <label for="type">Type</label>
											<select name="type" class="form-control mb-10"
                                                        data-parsley-trigger="change"
                                                        required>
                                                    <option value="Row house">Row House</option>
                                                    <option value="Apartment">Apartment</option>
													<option value="Hostel">Hostel</option>
													<option value="Warehouse">Warehouse</option>
                                                    <option value="Shop">Shop</option>
													<option value="Open land">Open Land</option>
                                                </select>   
                                        </div>
										</div>

                                       <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="purpose">Purpose </label>
												<select name="purpose" class="form-control mb-10"
                                                        data-parsley-trigger="change"
                                                        required>
                                                    <option value="sell">Sell</option>
                                                    <option value="rent">Rent</option>
                                                </select>
                                            </div>
											</div>
											
											</div>

                                            <div class="row">

                                        <div class="col-md-6">
											<div class="form-group">
                                                <label for="prize">Prize</label>
                                                <input type="text" name="prize" class="form-control"
                                                       data-parsley-trigger="change"
                                                       required>
                                            </div>
                                       </div>

                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date">Size</label>
                                            <input type="text" name="size"  class="form-control" 
                                                   data-parsley-trigger="change"
                                                   required>
                                        </div>
										
										 </div>
											</div>
										
										<div class="row">

                                        <div class="col-md-6">
									    <div class="form-group">
                                            <label for="location">Location</label>
                                            <input type="text" name="location" class="form-control"
                                                   data-parsley-trigger="change"
                                                   required>
                                        </div>
										</div>
										
										<div class="col-md-6">
									    <div class="form-group">
                                            <label for="location">Region</label>
											<select name="region" class="form-control mb-10"
                                                        data-parsley-trigger="change"
                                                        required>
                                                    <option value="east">East</option>
                                                    <option value="west">West</option>
													<option value="south">South</option>
                                                    <option value="north">North</option>
                                                </select>
                                           
                                        </div>
										</div>
										</div>
										
										<div class="row">
										<div class="col-md-6">
										<div class="form-group">
										<label>Property Photo 1</label><br>
							            <input type="file" class="filestyle" name="property_img_one" value="<?php if(isset($_POST['property_img_one'])) echo $_POST['property_img_one'];?>">
                                        </div>
										</div>
										<div class="col-md-6">
										<div class="form-group">
										<label>Property Photo 2</label><br>
							            <input type="file" class="filestyle" name="property_img_two" value="<?php if(isset($_POST['property_img_two'])) echo $_POST['property_img_two'];?>">
                                        </div>
										</div>
										</div>
										
										<div class="row">
										<div class="col-md-6">
										<div class="form-group">
										<label>Property Photo 3</label><br>
							            <input type="file" class="filestyle" name="property_img_three" value="<?php if(isset($_POST['property_img_three'])) echo $_POST['property_img_three'];?>">
                                        </div>
										</div>
										<div class="col-md-6">
										<div class="form-group">
										<label>Property Photo 4</label><br>
							            <input type="file" class="filestyle" name="property_img_four" value="<?php if(isset($_POST['property_img_four'])) echo $_POST['property_img_four'];?>">
                                        </div>
										</div>
										</div>
										
										<div class="row">
										<div class="col-md-9">
										<div class="form-group">
                                            <label for="property_desc">Property Description </label>
                                            <textarea class="form-control" rows="4" name="property_desc" required></textarea>
                                        </div>
										</div>
										
										<div class="col-md-3">
                                            <label>Is Featured</label><br>
                                            <div class="onoffswitch drank inline-block">
                                                    <input type="checkbox" name="is_featured" class="onoffswitch-checkbox" id="switch03" checked="">
                                                    <label class="onoffswitch-label" for="switch03">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                            </div>
										</div>
										</div>
										
										
										<div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                                    
                                        <input type="submit" name="submit" class="btn btn-success" value="Submit">
										  </div>

                                    </form>

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
