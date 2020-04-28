
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
           <li><a href="issue.php"><span>Issue Car</span></a></li>
          <li><a href="return.php"><span>Return </span></a></li>
          <li><a href="bill.php"><span>Bill </span></a></li>
          <li><a href="feedback.php"><span>View feedback </span></a></li>
          <li><a href="customer"><span>View Customer </span></a></li>
          <li><a href="viewcar.php"><span>View cars </span></a></li>
		  	</ul>
		</div>
		
<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="admin.php">Dashboard</a>
			<span>&gt;</span>
			Add New Vehicles
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Add New Vehicles</h2>
					</div>
			
					
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
													
			<?php
								include '../includes/config.php';
									
						$sel = "SELECT * FROM car WHERE carid= '$_GET[id]'";
								$result = $conn->query($sel);
								while($row = $result->fetch_assoc()){
							?>
									
								<p>
									
									<label>Car Name</label>
									<input type="text" value="<?php echo $row['carname']?>"class="field size1" name="carname" />
								</p>
								<p>
									
									<label>Car Brand</label>
									<input type="text" value="<?php echo $row['brand']?>" class="field size1" name="brand"  />
								</p>
								<p>
									
									<label>Registartion Number</label>
									<input type="text" value="<?php echo $row['regno']?>"class="field size1" name="regno"  />
								</p>
								
								<p>
								
									<label>Vehicle Image</label>
									<input type="file"  value="<?php echo $row['image']?>" class="field size1" name="image"  />
									
							        <img class="thumb"   src="/carrental/admin/cars/<?php echo $row['image'];?>" width="350" height="250">		
								</p>
								<p>
									
									<label>Vehicle Capacity</label>
									<select name ="capacity">
									<option value ="4" >4 Seat</option>
									<option value ="6">6 Seat</option>
								    <option value ="other" >other</option>
									</select>
									
								</p>
<p>
								
									<label>Car color</label>
									<input type="text" class="field size1" name="color" required />
								</p>
<p>
								
									<label>Mileage</label>
									<input type="text" class="field size1" name="mileage" required />
								</p>	
<p>
								
									<label>Fuel Type</label>
								     <select name="fuel">
                                      <option value="Petrol">Petrol</option>
                                      <option value="Diseal" >Diseal</option>
									  </select>
								
								</p>									
							<p>
								
									<label>Hire Price</label>
									<input type="text" class="field size1" name="price" required />
								</p>	
						</div>
						
						<div class="buttons">
							<input type="reset" class="button" value="Clear" />
							<input type="submit" class="button" value="SUBMIT" name="send" />
						</div>
						<?php
								}
								?>
						
					</form>
						<?php
							if(isset($_POST['send'])){
								
								$target_path = "../admin/cars/";
								$target_path = $target_path . basename ($_FILES['image']['name']);
								if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){
								
								$image = basename($_FILES['image']['name']);
								$carid = $_POST['carid'];
								$regno = $_POST['regno'];
								$color = $_POST['color'];
								$carname = $_POST['carname'];
								$capacity = $_POST['capacity'];
								$fuel = $_POST['fuel'];
								$price = $_POST['price'];
								$mileage = $_POST['mileage'];
								$brand= $_POST['brand'];
								
								
								$qr = "INSERT INTO car (image, carid,regno,color,mileage,carname,capacity,fuel,price,brand,status) 
													VALUES ('$image','$catid','$regno','$color','$mileage','$carname','$capacity','$fuel','$price','$brand','Available')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Vehicle Succesfully Added\");
											window.location = (\"addcar.php\")
											</script>";
									}
								}
								else 'Failed';
							}
						?>
		
		</html>
		</body>