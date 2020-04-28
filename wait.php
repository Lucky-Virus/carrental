
<?php
 session_start();
  include '/includes/config.php';
?>


<!DOCTYPE HTML>
<html>
<head>

    <title>Rent N Go</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
       <link rel="stylesheet" type="text/css" href="css/main.css">
   



</head>
 
<body>


		<div id="top">
		

			<div id="top-navigation">
		
			
				Welcome <strong></strong></a>
				<span>|</span>
				<a href="logout.php"> Log out</a>
			</div>
		</div>
   <header>
    <div class="wrapper">
        <h1>Rent n' Go<span class="color">.</span></h1>
        <nav>
            <ul>
                <li><a href="indexx.php">Home</a></li>
                <li><a href="car.php">Book Car</a></li>
           
                <li><a href="About.php">About </a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="profile.php">My Profile</a></li>
                <li><a href="MyBooking.php">Booking</a></li>
            </ul>
        </nav>
    </div>
</header>
<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
			</section>
	</section>

		<h2 style="text-decoration:underline">Your Booking Status</h2>
			
			
	
		                             <?php 
				                    $cus = $_SESSION['cid'];
							
								$select = "SELECT * FROM CUSTOMER WHERE cid='$cus'";
										
								$result = $conn->query($select); 
								while($row = $result->fetch_assoc()){
							?>
		<h3 style="text-align: center; color:#CC0000">Thank you MR <b><u><?php echo $row['cname'];?>. </b></u>
	Your Booking has Recived  We will sent you a confirmation mail shortly.</h3>
		
			<?php
								}?>
								
		
		</div>
	</section>
	</section>