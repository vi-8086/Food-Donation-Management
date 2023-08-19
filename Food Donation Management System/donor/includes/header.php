<?php
error_reporting(0);
?>
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="dashboard.php" class="logo">
        Donor
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
              <!-- inbox dropdown start-->
                <?php
        $did=$_SESSION['pgasoid'];       
$ret1=mysqli_query($con,"select tblfoodrequests.id,fullName,requestNumber from tblfoodrequests
 join tblfood  on tblfood.foodID=tblfoodrequests.foodId 
 where tblfood.DonorID='$did' and (tblfoodrequests.status='Not Confirmed')");
$num=mysqli_num_rows($ret1);

?>  

        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important"><?php echo $num;?></span>
            </a>
 
            
           <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You received <?php echo $num;?> New Request</p>
                </li>
<?php if($num>0){
while($result=mysqli_fetch_array($ret1))
{
?>

<!--Notifiacation Box-->
                <li>
<span class="subject">
<span class="from"><a class="dropdown-item" href="view-requestdetails.php?frid=<?php echo $result['requestNumber'];?>">New Request Received from <?php echo $result['fullName'];?> (<?php echo $result['requestNumber'];?>)</a></span>
</span>
                </li>
<?php } }  else {?>
  <li>  No New Request Received</li>
        <?php } ?>

                <li>
                    <a href="new-requests.php">See all New Requests</a>
                </li>
            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div> 
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        
        <!-- user login dropdown-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <?php
$donorid=$_SESSION['pgasoid'];
$ret=mysqli_query($con,"select FullName from  tbldonor where ID='$donorid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
                <img alt="" src="images/2.png">
                <span class="username"><?php echo $name; ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="donor-profile.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="change-password.php"><i class="fa fa-cog"></i> Change Password</a></li>
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end--> 
</div>
</header>