<!--PHP Session-->
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

//Code for food request
//Fetching information from modal
if(isset($_POST['submit'])){
$foodid=$_GET['foodid'];
$fname=$_POST['name'];
$mnumber=$_POST['contactno'];
$msg=$_POST['message'];
$status1='Not Confirmed';

$reqnumber=mt_rand(100000000,999999999);

//Insertion new request into tblfoodrequests
$query=mysqli_query($con,"insert into tblfoodrequests(foodId,fullName,mobileNumber,message,requestNumber,status) 
values('$foodid','$fname','$mnumber','$msg','$reqnumber','$status1')");

//Update food status
$query=mysqli_query($con,"update tblfood set status='Requested' where foodId='$foodid'");

//Notifying user in succesful placing of request
    echo '<script>alert("Request Successfully Sent. Your request number is  "+"'.$reqnumber.'");</script>';
echo "<script type='text/javascript'> document.location = 'food-available.php'; </script>";

}

?>

<!--HTML Code-->
<!DOCTYPE html>
<html>
<head>
<title>Food Available</title>

<link rel="icon" type="image/x-icon" href="fav.jpg">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() 
{ setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

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

	  <?php

    //Get food ID from previous page
$vid=$_GET['foodid'];   

//Select the required record
$ret=mysqli_query($con,"select * from tblfood inner join tbldonor on tbldonor.id=tblfood.donorid where tblfood.foodid='$vid'");

//Fetch data
while ($row=mysqli_fetch_array($ret)) {
?>
		<!--Display Food Details as a Table-->
		  <section id="tables">
          <div class="page-header">
            <h1>Food Details</h1>
          </div>
          <div class="bs-docs-example">
            <table class="table table-bordered" style=" background-color:black">


      <table border="1" class="table table-bordered mg-b-0"  style="background-color: rgb(237, 107, 107)">

  <tr>
    <th>Donor </th>
    <td><?php  echo $row['FullName'];?></td>
 
    <th>Donor Mobile Number</th>
    <td><?php  echo $row['MobileNumber'];?></td>
  </tr>
<tr>
    <th>Donor Email</th>
    <td><?php  echo $row['Email'];?></td>

    <th>Contact Name</th>
    <td><?php  echo $row['ContactPerson'];?></td>
</tr>
<tr>
    <th>Contact Mobile Number</th>
    <td><?php  echo $row['CPMobNumber'];?></td>

<th>Pick Up Address</th>
<td>
<?php echo $row['PickupAddress']; ?>
  </td>
  </tr>

<tr>
<th>Pick Up Date</th>
<td>
<?php echo $row['PickupDate']; ?>
  </td>

<th>City</th>
<td>
<?php echo $row['CityName']; ?>
  </td>
  </tr>
  <tr>
<th>Description</th>
<td>
<?php echo $row['Description']; ?>
  </td>

  <th>Status</th>
    <td style="background-color:#b3ffb3 ;"> <?php echo $row['Status']; ?>   
</td>


  </tr>
  <?php if($row['status']==""){ ?>
  <tr>
  	<td colspan="4"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Request Food</button></td>
  </tr>
<?php }  ?>
  </table><?php } ?>

            
          </div>

	</div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Food Request</h4>
      </div>
      <form method="post">
      <div class="modal-body">
        
        <!--Information-->
        <p><input type="text" class="form-control" name="name" placeholder="Full Name" required></p>
        <p style="margin-top:1%"><input type="text" class="form-control" name="contactno" placeholder="Mobile Number" pattern="[0-9]{10}" title="10 numeric characters only"  required></p>
        <p style="margin-top:1%"><textarea name="message" class="form-control" placeholder="Message if any"></textarea></p>
        <p style="margin-top:2%"> <button type="submit" name="submit" class="btn btn-primary" >Submit</button></p>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
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

</body>
</html>