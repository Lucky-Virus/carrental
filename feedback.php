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
            <ul> <li><a href="indexx.php">Home</a></li>
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
	
	
	
	<form action="" method="post" enctype="multipart/form-data">
		           <table align="center">
					<div>
					<?php 
				                    $cus = $_SESSION['cid'];
							
								$select = "SELECT * FROM CUSTOMER WHERE cid='$cus'";
										
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
					<h3> Get in touch with us </h3>

						<tr>
							<td>Name:</td>
							<td><input type="text"  value="<?php echo $row['cname'];?>" readonly  ></td>
						</tr>
						<tr>
							<td>Email Id:</td>
							<td><input type="text"  value="<?php echo $row['email'];?>" readonly  ></td>
						</tr>
						<tr>
							<td>Mobile No:</td>
							<td><input type="text"  value="<?php echo $row['phone'];?>" readonly  ></td>
						</tr>
						<tr>
							<td>Location:</td>
							<td><input type="text"  value="<?php echo $row['city'];?>" readonly  ></td>
						</tr>
						   <tr>
						    <td> Message:</td>
						  <td>  <textarea name="message"  placeholder="Message"></textarea></td>
							</tr>
							
							<tr>
							<td><input type="submit" class="button" name="save" value="Submit feedback"></td>
						</tr>
					</table>
			
	
					
					
								<?php }
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$message=$_POST['message'];
							
							$qry ="INSERT INTO feedback(cid,message) VALUES ('$cus','$message')";
							$res = $conn->query($qry);
							if($res === TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"ThankYou \");
											window.location = (\"feedback.php \")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Try again\");
											window.location = (\"feedback.php\")
											</script>";
							}
						}
							
						
					  ?>	   
</form>
	</html>
	</body>
	
	
	  
	    
		   
					