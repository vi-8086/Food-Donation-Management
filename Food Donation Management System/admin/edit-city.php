<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['pgasaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    // $stateid=$_POST['statename'];
    $eid=$_GET['editid'];
    $city=$_POST['city'];
    $query=mysqli_query($con, "update tblcity set City='$city' where ID='$eid'");
    if ($query) {
   echo "<script>alert('City has been updated.');</script>";
echo "<script type='text/javascript'> document.location = 'manage-city.php'; </script>";
  }
  else
    {
     echo "<script>alert('Something went wrong. Please try again.');</script>";
    }

  
}
  ?>

<!DOCTYPE html>
<head>
<title>Admin|Update City  </title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<?php include_once('includes/header.php');?>
<!--header end-->
<!--sidebar start-->
<?php include_once('includes/sidebar.php');?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
            <!-- page start-->
            
          
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Update City
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <!-- <a class="fa fa-cog" href="javascript:;"></a> -->
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                 <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

   
                                <form class="cmxform form-horizontal " method="post" action="">
                                   <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select tblcity.ID as ctyid,tblcity.City as cityname from tblcity  where tblcity.ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<!-- <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">State</label>
                                        <div class="col-lg-6">
                                             <select name="statename" class="form-control wd-450" required="true" >
                    <option value="<?php echo $row['stid'];?>"><?php echo $row['stname'];?></option>
              <?php $query=mysqli_query($con,"select * from tblstate");
              while($rw=mysqli_fetch_array($query))
              {
              ?>      
                  <option value="<?php echo $rw['ID'];?>"><?php echo $rw['StateName'];?></option>
                  <?php } ?>
                  </select>
                                        </div>
                                    </div> -->

                                    <div class="form-group ">
                                        <label for="adminname" class="control-label col-lg-3">City</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="city" name="city" type="text" required="true" value="<?php  echo $row['cityname'];?>">
                                        </div>
                                    </div>
                                    
                                   
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                          <p style="text-align: center;"> <button class="btn btn-primary" type="submit" name="submit">Update</button></p>
                                           
                                        </div>
                                    </div>

                                </form>
                                <?php } ?>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>

</section>
 <!-- footer -->
		  <?php include_once('includes/footer.php');?>    
  <!-- / footer -->
</section>

</section>

<!-- <script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script> -->
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<!-- <script src="js/jquery.scrollTo.js"></script> -->
</body>
</html>
<?php }  ?>