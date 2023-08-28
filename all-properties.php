<html>
<head>
<title>Pune  Real Estate</title>
<link rel="stylesheet" href="style.css"></link>

<?php include'includes/cssscripts.php'; ?>
</head>

<body>
<?php include 'includes/header.php'; ?>
<div class="services-top-breadcrumbs">
		<div class="container">
			<div class="services-top-breadcrumbs-right">
				<ul>
					<li><a href="index.php">Home</a> <i>/</i></li>
					<li>All Properties</li>
				</ul>
			</div>
			<div class="services-top-breadcrumbs-left">
				<h3>All Properties</h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	 </div>

	 
	 <div class="container">
	 
	 <div class="special-services-grids">	
				
				
<?php
include "db.php";
$query = "SELECT * FROM property";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
?>					
           <div class="col-md-3">
			<h3> Property <?php echo $row['id'];?></h3>		
			<div class="p_cards">
            <img src="admin/images/<?php echo $row['property_img_one'];?>" alt=" " class="img-responsive"  style="height:150px; width:100%;">
            <table class="p_table">
            <tr><td> Purpose </td><td style="text-align:right;"> <?php echo $row['purpose']; ?></td></tr>
			<tr><td> Type </td><td style="text-align:right;"> <?php echo $row['type']; ?> </td></tr>
			<tr><td> Prize </td><td style="text-align:right;">  <?php echo $row['prize']; ?> </td></tr>
			</table>
<div class="m2"><a href="property-details.php?id=<?php echo $row['id']; ?>" class="more-sub hvr-bounce-to-bottom hvr-bounce-to-bottom1">Read More...</a></div>			
		    </div>
		    </div>
	
<?php
}  } 
?>
	
			</div>
					
		
		</div>
	 
	 
	 
<?php include 'includes/footer.php'; ?>
<?php include'includes/jsscripts.php'; ?>
</body>
</html>