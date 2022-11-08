<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Booking Management System | Hotel :: Single Rooms</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="">


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
			<div class="header head-top">
				<div class="container">
				<?php include_once('includes/header.php');?>
		</div>
</div>
<!--header-->
		<!--rooms-->
			<div class="content">
					<div class="room-section">
						<div class="container">
						<h2>Rooms Details</h2><br><br><br>
							<div class="room-grids">
								<?php
								$cid=intval($_GET['catid']);
$sql="SELECT tblroom.*,tblroom.id as rmid , tblcategory.Price,tblcategory.ID,tblcategory.CategoryName from tblroom 
join tblcategory on tblroom.RoomType=tblcategory.ID 
where tblroom.RoomType=:cid";
$query = $dbh -> prepare($sql);
$query-> bindParam(':cid', $cid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                              


		 <div class='card mb-3 border-1 shadow'>
            <div class='row g-0 p-3 align-items-center'>
              <div class='col-md-5 mb-lg-0 mb-md-0 mb-3'>
			  <img src="admin/images/<?php echo $row->Image;?>" class=" mask img-responsive zoom-img" alt="" />
              </div>
              <div class='col-md-5 px-lg-4 px-md-3 px-0'>
			  <h4> <?php  echo htmlentities($row->RoomName);?> </h4><br>
			  <p><?php  echo htmlentities($row->RoomDesc);?></p><br>
                 <div class='facilities mb-3'>
                    <hp class='mb-1'>Room Facilities : </hp>
                    <?php  echo htmlentities($row->RoomFacility);?>
                  </div><br>
				  <div class='guests mb-3'>
                    <hp class='mb-1'>Guests : </hp>
                    <?php  echo htmlentities($row->MaxAdult);?> Adults &nbsp;
					<?php  echo htmlentities($row->MaxChild);?> Children
                  </div>
                  <br>
				  <div class='beds mb-3'>
                    <hp class='mb-1'>No.of beds : </hp>
                    <?php  echo htmlentities($row->NoofBed);?>
                  </div>
             </div>   
             <div class='col-md-2 mt-lg-0 mt-md-0 mt-4 text-center'>
              <p class='mb-4'>Rs. <?php  echo htmlentities($row->price);?> per night</p><br>
              <button class="btn btn-success"><a href="book-room.php?rmid=<?php echo $row->rmid;?>"  class='btn btn-sm w-100 text-white custom-bg shadow-none mb-2'>Book Now</a></button>
			
                
                 </div>
            </div>
          </div><br><br><hr>



								<div class="clearfix"></div><br>
							</div><?php $cnt=$cnt+1;}} ?>
						
					
						<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!--rooms-->

				<!--Restaurant-->
			<div class="content">
					<div class="room-section">
						<div class="container">
						<h2>Restaurant Details</h2><br><br><br>
							<div class="room-grids">
								<?php
								$cid=intval($_GET['catid']);
$sql="SELECT tblres.*,tblres.id as resid , tblrescategory.Price,tblrescategory.ID,tblrescategory.CategoryName from tblres 
join tblrescategory on tblres.Type=tblrescategory.ID 
where tblres.Type=:cid";
$query = $dbh -> prepare($sql);
$query-> bindParam(':cid', $cid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                              


		 <div class='card mb-3 border-1 shadow'>
            <div class='row g-0 p-3 align-items-center'>
              <div class='col-md-5 mb-lg-0 mb-md-0 mb-3'>
			  <img src="admin/images/<?php echo $row->Image;?>" class=" mask img-responsive zoom-img" alt="" />
              </div>
              <div class='col-md-5 px-lg-4 px-md-3 px-0'>
			  <h4> <?php  echo htmlentities($row->Type);?> </h4><br>
			  <p><?php  echo htmlentities($row->Description);?></p><br>
                 <div class='facilities mb-3'>
                    <hp class='mb-1'>Room Facilities : </hp>
                    <?php  echo htmlentities($row->RoomFacility);?>
                  </div><br>
				  <div class='guests mb-3'>
                    <hp class='mb-1'>Guests : </hp>
                    <?php  echo htmlentities($row->MaxNumber);?> No of Seats &nbsp;
					
                  </div>
                  <br>
				  
             </div>   
             
            </div>
          </div>



								<div class="clearfix"></div>
							</div><?php $cnt=$cnt+1;}} ?>
						
					
						<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!--restaurant-->
				<?php include_once('includes/getintouch.php');?>
			</div>
			<!--footer-->
				<?php include_once('includes/footer.php');?>
</body>
</html>
