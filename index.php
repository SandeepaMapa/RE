<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>River's edge Hotel</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>

</head>
<body>
		<!--header-->
			<div class="header">
				<div class="container">
				<?php include_once('includes/header.php');?>
		<div class="slider">
			<div class="callbacks_container">
				  <ul class="rslides" id="slider">
						 <li>	          
							<h3>great choice of  <span>hotels</span> </h3>
						 </li>
						 <li>	          
							<h3>best rates  <span>guaranteed</span> </h3>  
						 </li>
						 <li>	          
							 <h3>the best place to <span>relax</span> </h3>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!--header-->

		<div class="content">
			
		<div class="features">
					<div class="container">
						<h3>Facilities</h3>
						<br><br><br>

<div class="container text-center">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Photos/Facilities/wifi-logo-svgrepo-com.svg" alt="Wi-Fi" width="100">
      <h4>Wi-Fi</h4>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Photos/Facilities/hot-water.svg" alt="Hot water" width="100">
      <h4>Hot Water</h4>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Photos/Facilities/swimming-pool-2711.svg" alt="Pool" width="100">
      <h4>Pool</h4>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Photos/Facilities/bar.svg" alt="Bar" width="70">
      <h4>Bar</h4>
    </div>
	
  </div>
</div>
								
								
								
									<div class="clearfix"></div>
							</div>
					</div>
				</div>
				<br><br><br>
	<!-- slider -->
	<div class="slider1">
		<div class="arrival-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="index.php"><img src="Photos\Front\3rd dec.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="index.php"><img src="Photos\Gallery\e2.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="index.php"><img src="Photos\Gallery\view3.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="index.php"><img src="Photos\Gallery\e4.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="index.php"><img src="Photos\Gallery\r1.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="index.php"><img src="Photos\Gallery\rest2.jpg" alt=""/>
					 </a>
				 </li>
				</ul>
				<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
		</div>
	</div><br><br><br><br><br>
	<!-- //slider -->
	<div class="features">
	<h3>Reach us</h3><br>
			</div>
<div class="container">
  <div class="row">
    <div class=""></div>
      <iframe class="w-100 rounded mb-4" width="1200px"height="450px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.151117286474!2d80.0630986!3d6.225736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x36b288ccc4774ebc!2sRiver&#39;s%20Edge%20madampe%20Ambalangoda!5e0!3m2!1sen!2slk!4v1665017607784!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>
		<br><br><br>
				<!--GET IN TOUCH-->
					<?php include_once('includes/getintouch.php');?>
			</div>
			<!--footer-->
		<?php include_once('includes/footer.php');?>
</body>
</html>
