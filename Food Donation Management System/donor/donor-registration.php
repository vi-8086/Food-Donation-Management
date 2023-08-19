
<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $fname=$_POST['name'];
    $mobno=$_POST['mobilnumber'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    $ret=mysqli_query($con, "select Email from tbldonor where Email='$email'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
$msg="This email or Contact Number already associated with another account";
    }
    else{
    $query=mysqli_query($con, "insert into tbldonor(FullName, MobileNumber, Email,  Password) 
    value('$fname', '$mobno', '$email', '$password' )");
    if ($query) {
    $msg="You have successfully registered";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }
}
}

 ?>


<!DOCTYPE html>
<head>
<title>FWMS | Donor Registration </title>

<script defer src="index.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css" >
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet">


</head>
<body style="background-color: gray;">

<div class="reg-w3">
<div class="w3layouts-main" style="background-color: black;">
	<h2 style="color: #b20808d1;">Register Now</h2>
	<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

  <!--Form-->
		<form action="#" method="post" id="form" s>
			<input type="text" class="ggg" name="name" placeholder="NAME" required="true" id="name">
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" required="true" id="email">
			<input type="text" class="ggg" name="mobilnumber" placeholder="PHONE" required="true" id="mobilnumber">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="true" id="password">
			<!-- <input type="password" class="ggg" name="repeatpassword" placeholder="REPEAT PASSWORD" required="true" id="password2"> -->
			<h4><input type="checkbox"  required="true" />I agree to the Terms of Service and Privacy Policy</h4>
			
				<div class="clearfix"></div>
				<input type="submit" value="submit" name="submit" style="background-color: #b20808d1;">
		</form>
		<p>Already Registered.<a href="login.php">Login</a></p>
</div>
</div>


</body>
</html>
