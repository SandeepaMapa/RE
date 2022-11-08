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

<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Photos/Facilities/wifi-logo-svgrepo-com.svg" alt="Wi-Fi" width="100">
      <h5>Wi-Fi</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Photos/Facilities/hot-water.svg" alt="Hot water" width="100">
      <h5>Hot Water</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Photos/Facilities/swimming-pool-2711.svg" alt="Pool" width="100">
      <h5>Pool</h5>
    </div>
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
      <img src="Photos/Facilities/bar.svg" alt="Bar" width="70">
      <h5>Bar</h5>
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
					 <a href="index.php"><img src="Photos\Gallery\e1.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="index.php"><img src="Photos\Gallery\e2.jpg" alt=""/>
					 </a>
				 </li>
				 <li>
					 <a href="index.php"><img src="Photos\Gallery\e3.jpg" alt=""/>
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
					 <a href="index.php"><img src="Photos\Gallery\r3.jpg" alt=""/>
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
	</div><br><br>
	<!-- //slider -->
		
				<!--GET IN TOUCH-->
					<?php include_once('includes/getintouch.php');?>
			</div>
			<!--footer-->
		<?php include_once('includes/footer.php');?>
</body>
</html>
