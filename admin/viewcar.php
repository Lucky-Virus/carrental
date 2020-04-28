
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
		
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			
			<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								
								<th>Car ID</th>
								<th>Car image</th>
								<th>Reg No</th>
								<th>Hire Price</th>
								<th>Fuel Type</th>
								<th>Seat</th>
								<th>Mileage</th>
								<th>Color</th>
								<th>Car Brand</th>
							
								
			<?php
								include '../includes/config.php';
								$select = "SELECT * FROM car WHERE status = 'Available'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								
								<td><h3><a href="#"><?php echo $row['carid'] ?></a></h3></td>
								<td><img src="cars/<?php echo $row['image'];  ?>"  width="300" height="200"  /> </td>
								<td><?php echo $row['regno'] ?></td>
								<td><?php echo $row['price'] ?></td>
								<td><?php echo $row['fuel'] ?></td>
								<td><?php echo $row['capacity'] ?></td>
								<td><?php echo $row['mileage'] ?></td>
								<td><?php echo $row['color'] ?></td>
								<td><?php echo $row['status'] ?></td>
							
								
				
					<?php
					}
					?>
						
</body>
</html>