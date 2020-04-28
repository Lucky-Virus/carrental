
<?php
 session_start();
?>

<!DOCTYPE HTML>
<html>         <!------ suhailshaji@gmail.com ------------->
<head>

    <title>Rent N Go</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
       <link rel="stylesheet" type="text/css" href="css/main.css">
    
   



</head>
 
<body>


		<div id="top">
		

			<div id="top-navigation">
		
			
				Welcome <strong></strong></a>
				<span>|</span>        <!------ suhailshaji@gmail.com ------------->
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
	


<section  class="listing">

			<div class="booking">
			<h1>  Your Booking </h1>
			</div>
	
					
		
			<ul class="properties_list">
			
	          
			  
			<?php
			             $cus = $_SESSION['cid'];
						include 'includes/config.php';
						
						$sel = "SELECT * FROM car WHERE carid= '$_GET[id]'";
					
						$rs = $conn->query($sel);
						$row = $rs->fetch_assoc(); {
							
			?>
			
				<li>
					<a>
						<img class="thumb" src="admin/cars/<?php echo $row['image'];?>" width="350" height="250">
					</a>
					
					<div   class="property_details">
					
					        
						<h1>
							<?php echo ''.$row['carname'];?>        <!------ suhailshaji@gmail.com ------------->
						</h1>
						<p>
					
						Car Brand: <span class="property_size"><?php echo $row['brand'];?></span> <br>
						Color: <span class="property_size"><?php echo $row['color'];?></span><br>
						Mileage: <span class="property_size"><?php echo $row['mileage'];?></span><br>
						Seat Capacity <span class="property_size"><?php echo $row['capacity'];?>Seated</span><br>
						Fuel :<span class="property_size"><?php echo $row['fuel'];?></span><br></a>
						</p>
					<span class="term_a"> Total Fair <?php echo 'RS.'.$row['price'];?>Per Day<br></span>
					<span class="term_b"> 100 Km free per day <br>Excess Rs 10/Km </span>
	                 
				
					
				</li>
			<?php
				}
			?>
			</ul>

		 <form  align="center" action="" method="post" enctype="multipart/form-data">
	
					<div align="center" class="form">
								<div class="booking">	
					<h1> Complete to procced booking </h>
			</div>
					      
							<p> 
							<label>Date Of PickUp:</label>
							<input type="date" class="field size1" name="bookfor" required>
						</p>
						
						   <p>
						     <label> Return Date:</label>
							<input type="date" class="field size1" name="rdate"  placeholder="optional" ></td>
						
						
						
						     <p>
						     <label> Destination:</label>
							<input type="text" class="field size1" name="destination"></td>
							
							
							</div>
							
							 <p color="red"> Note: that you need to produce originial document to the vendor at time of taking car for rental. </p>
				</div>
				</div>
				</div>
					
						
						<div   class="buttons">
		
							<input type="submit"  color="red" class="button" value="Book" name="save" />
						</div>
					</form>
		</section>
	
<div class="lbooking">
	
				<?php       
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$bookfor = $_POST['bookfor'];
							$rdate = $_POST['rdate'];
							$destination = $_POST['destination'];
							$currentDateTime = date('Y-m-d H:i:s');
				          
						

							 
							  $qr = "INSERT INTO booking (bookfor,rdate,destination,bookdate,carid,cid,approve)
							   VALUES('$bookfor','$rdate','$destination','$currentDateTime',$_GET[id],$cus,'Pending')";
							   $res = $conn->query($qr);
								if($res === TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Booking Recived.Wait For Approval\");
											window.location = (\"wait.php?id='$cid' \")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Booking Failed. Try Again\");
											window.location = (\"car.php\")
											</script>";
							}
						}
							
						
					  ?>	   
	</section>
	</html>
	</body>
	
	
	  
	    
		   