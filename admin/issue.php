
<?php
	include '../includes/config.php';
?>
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
			Issue Car
		</div>
			<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>ADD CAR ISSUE DEATIL</h2>
					</div>
					<?php
			             
					
						
						$sel = "SELECT * FROM booking WHERE bookid = $_GET[id]";
					
						$rs = $conn->query($sel);
						$row = $rs->fetch_assoc(); {
							
			?>
					
					<form action="" method="post" enctype="multipart/form-data">
					<div class="form">
							
					         
								<p>
									
									<label>Book ID</label>
											<td><a class="field size1"><?php echo $row['bookid'] ?>  </a></td>
							</p>
						
						
								<p>
									
									<label>Car Meter Reading(in Km)</label>
									<input type="text /km" class="field size1" name="fmeter" required />
							</p>
							<p>
								
									<label>Upload Customer Driving Licence</label>
									<input type="file" class="field size1" name="drivinglicence" required />
								</p>
								<p>
								
									<label>Upload Customer Adhaar  </label>
									<input type="file" class="field size1" name="adhr" required />
								</p>
							</div>
						
						<div class="buttons">
							
							<input type="submit" class="button" value="SUBMIT" name="send" />
							<?php
				}
			?>
						</div>
						<div id="sidebar">
				
	
				<div class="box">
					
			
					<div class="box-head">
						<h2>Management</h2>
					</div>
					
					
					<div class="box-content">
						<a href="issuedetail.php" class="add-button"><span>View Issued Cars</span></a>
						<div class="cl">&nbsp;</div>
						
						
						
					</div>
				</div>
				
			</div>
		
						
			
		
		
		<?php
							if(isset($_POST['send'])){
								
							   $target_path = "../admin/documents/";
								$target_path = $target_path . basename ($_FILES['drivinglicence']['name']);
								if(move_uploaded_file($_FILES['drivinglicence']['tmp_name'], $target_path))
								
									$target_path = $target_path . basename ($_FILES['adhr']['name']);
								if(move_uploaded_file($_FILES['adhr']['tmp_name'], $target_path)) {
									
								$drivinglicence = basename($_FILES['drivinglicence']['name']);
								$adhr = basename($_FILES['adhr']['name']);
								$fmeter = $_POST['fmeter'];
										$currentDateTime = date('Y-m-d H:i:s');
				          
								
								$qr = "INSERT INTO issue (bookid,fmeter,drivinglicence,adhr,issuedate)
								
								    VALUES ($_GET[id],'$fmeter','$drivinglicence','$adhr','$currentDateTime')";
										$qry = "UPDATE booking SET approve = 'CAR ISSUED' WHERE bookid = $_GET[id]";
									$res = $conn->query($qr);
									$res = $conn->query($qry);
								if($res === TRUE){
									
									echo "<script type = \"text/javascript\">
											alert(\"Car Isuued Succesfully   \");
											window.location = (\"Request.php \")
											</script>";
								}  } else{
								echo "<script type = \"text/javascript\">
											alert(\"Failed.\");
											window.location = (\"issue.php\")
											</script>";
							}
						}
							
						
					  ?>	   
	</section>
	</form>
	</html>
	</body>
	
	
	  
	    
		   