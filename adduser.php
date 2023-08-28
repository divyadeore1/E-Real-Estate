<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pune Real Estate - Add User</title>
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
	
	

	
	
		/* First Name Validation */
	if(!isset($message))
	{
		if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])) {
		$message="Name should contain only characters.";
		}
	}
	
	
		/* username Validation */
	if(!isset($message))	{
		if(isset($_POST['username']))
		{		
		  $chkusernamequery = "SELECT username FROM user WHERE username = '" . $_POST['username'] . "'";
		  $chkusernamequeryresult = $db_handle->numRows($chkusernamequery);		 
		  if($chkusernamequeryresult) {
			  $message= "Username Already Exit!";
		  }
		}	
	}

	
	if(!isset($message))
	{
	/* Password matching Validation */
	
	if($_POST['password'] !=$_POST['c_password']){
	$message = " Password should be same";
	}
	}
	
	/* Email Validation */
	if(!isset($message))
	{
		if(!filter_var($_POST["emailid"],FILTER_VALIDATE_EMAIL))
		{
			$message="Invalid Email id";
		}
	}
	
	/* Mobile Validation */
	if(!isset($message))
	{
		if(!preg_match('/^[0-9]{10}$/',$_POST['phoneno']))
		{
			$message="Invalid Mobile Number";
		}
	}
	


  
	if(!isset($message)) {
		
		$query ="INSERT INTO user(name,address,emailid,phoneno,aadharno,username,password,dob,user_photo,user_type) VALUES 
		('".$_POST['name']."','".$_POST['address']."','".$_POST['emailid']."','".$_POST['phoneno']."',
		'".$_POST['aadharno']."','".$_POST['username']."','".$_POST['password']."','".$_POST['dob']."','".$_POST['user_photo']."','".$_POST['user_type']."')";
		$result = $db_handle->insertQuery($query);
		
		if(!empty($result)) {
			$message = "You are registered successfully!";	
			unset($_POST);
			header ("Location: http://localhost/e_real_estate/admin/registered_users.php");
			
		} else {
			$message = "Problem in registration. Please Try Again!";	
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

                        <h2>Add User</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.php"><i class="fa fa-home"></i>Pune Real Estate</a>
                                </li>
                                <li>
                                    <a href="#">Add User</a>
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
                                    <h1 class="custom-font"><strong>Add</strong>User</h1>
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

                                    <form action="" name="form1" role="form" id="form1" method="POST">
									<div class="row">
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control"
                                                   value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"
												   data-parsley-trigger="change"
                                                   required>
                                        </div>
										</div>
										<div class="col-md-6">
										<div class="form-group">
                                            <label for="address">Address</label>
											<input type="text" name="address" class="form-control"
                                                   value="<?php if(isset($_POST['address'])) echo $_POST['address']; ?>"
                                            data-parsley-trigger="change" required> 
                                        </div>
										</div>
										</div>
										
										<div class="row">
                                         <div class="col-md-6">
                                            <div class="form-group">
                                            <label for="email">Email Id</label>
                                            <input type="email" name="emailid" id="email" class="form-control"
                                                   value="<?php if(isset($_POST['emailid'])) echo $_POST['emailid']; ?>"
                                                   data-parsley-trigger="change" required>
                                        </div>
										</div>
										<div class="col-md-6">
											
											<div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" id="username" class="form-control"
                                                   value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>"
                                                   data-parsley-trigger="change"
                                                   data-parsley-range="[4, 20]" required>
                                        </div>
											</div>
										</div>
										
										<div class="row">
                                         <div class="col-md-6">
                                            <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form-control"
                                                   value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>"
                                            data-parsley-trigger="change" data-parsley-range="[4, 20]" required>
                                        </div>
										</div>
										<div class="col-md-6">
										<div class="form-group">
                                            <label for="password">Confirm Password</label>
                                            <input type="password" name="c_password" id="password" class="form-control"
                                                   value="<?php if(isset($_POST['c_password'])) echo $_POST['c_password']; ?>"
                                            data-parsley-trigger="change"
                                            data-parsley-range="[4, 20]" required>
                                        </div>
											</div>
										</div>
										
                                       
									   <div class="row">
                                         <div class="col-md-6">
									   <div class="form-group">
                                            <label for="phone">Phone: </label>
                                            <input type="text" name="phoneno" id="phone" class="form-control"
                                                   value="<?php if(isset($_POST['phoneno'])) echo $_POST['phoneno']; ?>"
                                                   data-parsley-trigger="change"
                                                   pattern="^[\d\+\-\.\(\)\/\s]*$" required>
                                        </div>
										</div>
										<div class="col-md-6">

										
										<div class="form-group">
                                            <label for="aadharno">Aadhar no</label>
                                            <input type="text" name="aadharno"  class="form-control"
                                                   value="<?php if(isset($_POST['aadharno'])) echo $_POST['aadharno']; ?>" 
                                                   data-parsley-trigger="change" required>
                                        </div>
	</div>
										</div>										
									
									<div class="row">
                                         <div class="col-md-6">
                                         <div class="form-group">
                                            <label for="date">DOB</label>
                                            <input type="date" name="dob"  class="form-control" 
                                                   value="<?php if(isset($_POST['dob'])) echo $_POST['dob']; ?>"
                                                   data-parsley-trigger="change" required>
                                        </div>
										</div>
										<div class="col-md-6">
										<div class="form-group">
                                            <label for="fileinput">User Photo</label>
                                            <input name="user_photo" type="file" class="filestyle" data-buttonText="Choose file" data-iconName="fa fa-inbox">
                                        </div>	
											</div>
										</div>
								
                                 		  			
                                    <div class="row">
                                         <div class="col-md-6">
									<div class="form-group">
                                            <label for="date">Type</label>
                                            <select type="date" name="user_type"  class="form-control mb-10" 
                                                   value="<?php if(isset($_POST['user_type'])) echo $_POST['user_type']; ?>"
                                            data-parsley-trigger="change">
										<option value="Admin">Admin</option>	
										<option value="Agent">Agent</option>
										<option value="User">User</option>
											</select>	   
                                        </div>
										</div>
										</div>
									
										<div class="tile-footer text-right bg-tr-black lter dvd dvd-top">
                                    
                                        <input type="submit" name="submit" class="btn btn-success" value="Submit">
										  </div>
                                    </form>

                                
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
                $('#form1').parsley().subscribe('parsley:field:validate', function () {
                    if ($('#form1').parsley().isValid()) {
                        $('#form1Submit').prop('disabled', false);
                    } else {
                        $('#form1Submit').prop('disabled', true);
                    }
                });

                $('#form1Submit').on('click', function(){
                    $('#form1').submit();
                });

                $('#form2Submit').on('click', function(){
                    $('#form2').submit();
                });

                $('#form3Submit').on('click', function(){
                    $('#form3').submit();
                });

                $('#form4Submit').on('click', function(){
                    $('#form4').submit();
                });
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
