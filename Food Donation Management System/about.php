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

<title>Food Donation Management System|About Us</title>

<link rel="icon" type="image/x-icon" href="fav.jpg">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/slideshow.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->

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

<!--Slideshow-->
<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<!--Counters-->
<script>
        let counts1=setInterval(updated);
        let upto1=0;
        function updated(){
            var count= document.getElementById("counter1");
            count.innerHTML=++upto1;
            if(upto1===20)
            {
                clearInterval(counts1);
            }
        }
    </script>

<script>
        let counts2=setInterval(updated);
        let upto2=0;
        function updated(){
            var count= document.getElementById("counter2");
            count.innerHTML=++upto2;
            if(upto2===65)
            {
                clearInterval(counts2);
            }
        }
    </script>

<script>
        let counts3=setInterval(updated);
        let upto3=0;
        function updated(){
            var count= document.getElementById("counter3");
            count.innerHTML=++upto3;
            if(upto3===500)
            {
                clearInterval(counts3);
            }
        }
    </script>

</head>


<body>
<!--Header-->
<?php include_once("includes/header.php");?>

<!-- banner -->
<div class="banner page-head" style="background-color: white;">	
</div>

<!-- //banner -->
<div class="about">

<!--Counter Data-->
    <div class="boxbox">
					<div id="counter1">
						
					</div>
					<div id="counter2" >
						
					</div>
					<div id="counter3" >
						
					</div>
					<div id="kontak" style="background-color: white;">
					<p style="font-size: 30px;"><b>Cities</b></p>
					</div>
					
					<div id="log" style="background-color: white;">
						<p style="font-size: 30px;"><b> Donors</b></p>
					</div>
					<div id="cf4a" style="background-color: white;">
					<p style="font-size: 30px;"><b>Lives Touched</b></p>
					</div>
		</div>				

    <!--Slideshow Images-->
	<div class="slides slowFade">
        <div class="slide">
            <img src="ss1.jpg" alt="img"/>
        </div>
        <div class="slide">
            <img src="ss4.jpg" alt="img"/>
        </div>
        <div class="slide">
            <img src="ss3.jpg" alt="img"/>
        </div>		
	</div>
</div>

<div id="wrapper" style="background-color: white;">
<div id="leftcolumn">
        <img src="vision.jpeg" height="200px" width="200px">
        </div>
        <div id="rightcolumn">
        <img src="mission.jpeg" height="200px" width="200px">
        </div>
        <div id="leftcolumn">
        <br><br>
        <!-- <h3>OUR VISION</h3> -->
    <p><br><b>Through our user-friendly interface, the food donors can easily contribute surplus food that 
        might otherwise go to waste. Whether you're a restaurant, grocery store, caterer, or an 
        individual with extra food, 
        we provide a convenient way for you to make a positive impact.</b>
    </p>
        </div>
        <div id="rightcolumn">
        <br><br>
        <!-- <h3>OUR MISSION</h3> -->
    <p><br><b>Our mission is to tackle food insecurity and hunger in our community by connecting 
        surplus food resources with those in need.With an unwavering commitment to address 
        food insecurity, we strive to make a tangible difference in our 
        society by facilitating the redistribution of surplus food resources to those in need.</b>
    </p>
        </div>
    </div>



</body>
</html>