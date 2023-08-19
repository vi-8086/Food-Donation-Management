<!--PHP Session-->
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<!--HTML Code-->
<!DOCTYPE html>
<html>
<head>
<title>Food Donation Management System|Food Available</title>
<link rel="icon" type="image/x-icon" href="fav.jpg">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<!--webfont-->
<!--js-->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->

</head>
<body>

<!--Header-->
<?php include_once("includes/header.php");?>

<!-- banner -->
<div class="banner page-head">	
</div>

<div class="typrography">
	 <div class="container">
	  
  <!--Table to Display Available Food-->
	<div style="color:black">
		  <section id="tables">
          <div class="page-header">
            <h1>Available Food List</h1>
          </div>
          <div class="bs-docs-example">
            <table class="table table-bordered" style="background-color: rgba(182, 7, 48, 0.763)">
				<font color="black">
              <thead>
                 <tr>
            <!--Table Headers-->
            <th data-breakpoints="xs">S.No.</th>
            <th>Contact Person</th>
            <th>Contact Person Mobile Number</th>
            <th>Food Items</th>
            <th>Address</th>

            <th>City Name</th>
            <th>Creation Date</th>
            <th data-breakpoints="xs">Action</th>
          </tr>
              </thead>
              <tbody>
                <tr>
                  <!--Accessing Database to Retrieve Required Data-->
                	<?php
$ret=mysqli_query($con,"select * from  tblfood where status='Available'");
$cnt=1;

//Accessing each Row
while ($row=mysqli_fetch_array($ret)) {

?>
            <!--Entering Data into Table-->
            <td><?php echo $cnt;?></td>
              <td><?php  echo $row['ContactPerson'];?></td>
              <td><?php  echo $row['CPMobNumber'];?></td>
              <td><?php  echo $row['FoodItems'];?></td>
               <td><?php  echo $row['PickupAddress'];?></td>
                  <!-- <td><?php  echo $row['StateName'];?></td> -->
                  <td><?php  echo $row['CityName'];?></td>
                  <td><?php  echo $row['CreationDate'];?></td>
				 
          <!--View Futher Details-->
          <!--Echo Food ID to next page to fetch the respective record-->
				  <td><a href="view-food-details.php?foodid=<?php echo $row['foodId'];?>">View Details </a>
				  
                </tr>
               <?php 
               //Move to next row 
$cnt=$cnt+1;
}?>
              </tbody>
				</font>
            </table>
          </div>

	</div>
</div>
<!-- //typo-page -->
<?php include_once("includes/footer.php");?>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>