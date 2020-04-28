
<!DOCTYPE html >
<html>
<head>
	
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/adminstyle.css" type="text/css" media="all" />
	</head>
	<body>

<div id="header">
	<div class="shell">
		
		<div id="top">
			<h1><a href="#">Rent N' Go</a></h1>
			<div id="top-navigation">
				Welcome <a href="admin.php"><strong>Administrator</strong></a>
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
		<div id="navigation">
			<ul>
			<li><a href="admin.php"><span>Vehicle Management</span></a></li>
           <li><a href="request.php"><span>Hire Request</span></a></li>
           <li><a href="issuedetail.php"><span>Issue Car</span></a></li>
          <li><a href="return.php"><span>Return </span></a></li>
          <li><a href="bill.php"><span>Bill </span></a></li>
          <li><a href="feedback.php"><span>View feedback </span></a></li>
          <li><a href="#"><span>View Customer </span></a></li>
		  	</ul>
		</div>
				
<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="admin.php">Dashboard</a>
			<span>&gt;</span>
			Return
		</div>
			<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Return </h2>
					</div>
					<?php
					include '../includes/config.php';

			             
					
						   $ca = $_GET['id'];
						$select = "SELECT booking.bookid,booking.bookfor,customer.cname,car.carid,car.carname,car.price,issue.issueid,issue.fmeter
								FROM booking,customer,car,issue WHERE booking.carid=car.carid AND booking.cid=customer.cid AND booking.bookid=issue.bookid
									AND booking.bookid=$ca";
					
						$rss = $conn->query($select);
						$row = $rss->fetch_assoc(); 
							
							$car= ['carid'];
				
			?>
					
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
								<label>BookId</label>
							  		<td><a class="field size1"><?php echo $row['bookid'] ?>  </a></td>
								</p>
															<p>
								<label>Car Name</label>
							  		<td><a class="field size1"><?php echo $row['carname'] ?>  </a></td>
								</p>
								<p>
								<label>Customer Name</label>
							  		<td><a class="field size1"><?php echo $row['cname'] ?>  </a></td>
								</p>
							<p>
								<label>Book Date</label>
							  		<td><a class="field size1"><?php echo $row['bookfor'] ?>  </a></td>
								</p>
								<p>
								<label>Rent Price</label>
							  		<td><a class="field size1"><?php echo $row['price'] ?>/Day  </a></td>
								</p>
								
								
								<p>
								<label>First meter Reading(in km)</label>
								<td><a class="field size1"><?php echo $row['fmeter'] ?> /km </a></td>
								</p>
								
								<p>
								<label>Last meter Reading(in km)</label>
								<input type="numeric" class="field size1" name="lmeter" required />
								</p>
						         <p>
								<label>No Of Days</label>
									<input type="numeric" class="field size1" name="days" required />
								
								</p>
								<p>
								<label>Additional Charge</label>
									<input type="numeric" class="field size1" name="extra" />
								
								</p>
						<div class="buttons">
						<input type="submit" class="button" value="SUBMIT" name="send" />
						</div></div>
								</form>
								<?php
								include '../includes/config.php';
							if(isset($_POST['send'])){
							
								$lmeter = $_POST['lmeter'];
								$days = $_POST['days'];
								 if(!empty ($_POST['extra']))
								$extra = $_POST['extra'];
						         else
									 $extra=0;
								$currentDateTime = date('Y-m-d H:i:s');
								$qr = "INSERT INTO carreturn(bookid,returndate,lmeter,days,extra) VALUES ($ca,'$currentDateTime',$lmeter,$days,$extra)";
							$query = "UPDATE booking SET approve = 'Car Returned' WHERE bookid = '$ca'";	
	                       $queryy = "UPDATE car SET status = ' Availabile' WHERE carid = '$car'";							
									$res = $conn->query($qr);
								$res = $conn->query($query);
								if($res === TRUE){
									
									echo "<script type = \"text/javascript\">
											alert(\" Succesfully   \");
											window.location = (\"bill.php?bid=$ca \")
											</script>";
							} else{
									echo "<script type = \"text/javascript\">
											alert(\"Failed.\");
											window.location = (\"Request.php\")
											</script>";
							}
						}
							
						
					  ?>	   
								</body>
								</html>