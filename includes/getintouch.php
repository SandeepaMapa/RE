<div class="touch-section">
					<div class="container">
						<h3>get in touch</h3>
						<div class="touch-grids">
							<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
							<div class="col-md-4 touch-grid">
								<h4>address</h4>
								<h5><?php  echo htmlentities($row->PageDescription);?></h5>
								
							</div>
							<div class="col-md-4 touch-grid">
								<h4>Sales</h4>
								<h5>Sales Enquiries</h5>
								<p>Telephone : +<?php  echo htmlentities($row->MobileNumber);?></p>
							<p>E-mail : <?php  echo htmlentities($row->Email);?></p>
							</div><?php $cnt=$cnt+1;}} ?>
							<div class="col-md-4 touch-grid">
								<?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
							<div class="col-lg-6 p-4 text-white">
      
							<h4>Quick Links</h4>
      <a href="index.php" class=" text-white d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
      <a href="about.php" class=" text-white d-inline-block mb-2 text-dark text-decoration-none">About</a><br>
      <a href="book-room.php" class=" text-white d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
      <a href="gallery.php" class= " text-white d-inline-block mb-2 text-dark text-decoration-none">Gallery</a><br>
	  <a href="contact.php" class= " text-white d-inline-block mb-2 text-dark text-decoration-none">Contacts</a><br>
	  
      
    </div>
								
							</div><?php $cnt=$cnt+1;}} ?>
							<div class="clearfix"></div>
						</div>
					</div>
					</div>
				<!--GET IN TOUCH-->