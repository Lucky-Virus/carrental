

<?php
 session_start();
?>

<!DOCTYPE HTML>
<html>        <!------ suhailshaji@gmail.com ------------->
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
<section class="listing">
		
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM car WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($row = $rs->fetch_assoc()){
			?>
				<li>
					<a href="bookcar.php?id=<?php echo $row['carid'] ?>">
						<img class="thumb" src="admin/cars/<?php echo $row['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'RS.'.$row['price'];?></span>
					<div class="property_details">
						<h1>
							<?php echo ''.$row['carname'];?>
						</h1>
						<p>
						Car Brand: <span class="property_size"><?php echo $row['brand'];?></span> <br>
						Color: <span class="property_size"><?php echo $row['color'];?></span><br>
						Mileage: <span class="property_size"><?php echo $row['mileage'];?></span><br>
						<a><img src="img/seat.png" width=40 height=40> <span class="property_size_a"><?php echo $row['capacity'];?></span>
						<a><img src="img/tank.jpg" width=40 height=40><span class="property_size_a"><?php echo $row['fuel'];?></span><br></a>
							<a> <span class="term">	<?php echo 'RS.'.$row['price'];?> Per Day <br>100 Km free per day <br>Excess Rs 10/Km </span></a>
						</p>
						
					
						
						<a href="bookcar.php?id=<?php echo $row['carid'] ?>"><img src="img/book.png" width=125 height=60</a></p>
                                       
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>