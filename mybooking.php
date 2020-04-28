<?php
 session_start();
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
                <li><a href="mybooking.php">Booking</a></li>
                
            </ul>
        </nav>
    </div>
</header>
<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
			</section>
	</section>
	


<section   class="listing">

			<div class="booking">
			<h1 align="center">  Your Booking </h1>
			</div>
	
					
		
			<ul class="properties_liste">

			
	          
			  
			<?php
			
			  
			             $cus = $_SESSION['cid'];
						include 'includes/config.php';
						
						$sel = "SELECT * from booking where cid=$cus ";
					
						$rs = $conn->query($sel);
						$row = $rs->fetch_assoc();
                      		
			{
							
			?>
				<div class="booking">
				<marquee> <h1>Your Booking Status<b> <?php echo ''.$row['approve'];?></b></marquee><h1>
				
		
			     

                <h5> Your Booking Deatils </h5>				 
			<p>  
					  BookID : <?php echo ''.$row['bookid'];?><br>
					  BookingDate :  <?php echo ''.$row['bookdate'];?><br>
				      PickUp Date :<?php echo ''.$row['bookfor'];?><br>
				      Retrun Date :<?php echo ''.$row['rdate'];?><br>
	                  Destination :<?php echo ''.$row['destination'];?><br>
					</p>
					<h1>Booking  Status: <?php echo ''.$row['approve'];?></h1>
					
					</div>
					
					
					
					
					
					
					
					
					
					<?php
						}
						?>
						