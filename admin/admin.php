
<!DOCTYPE html >
<html>
<head>
	
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/adminstyle.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(carid){
			if(confirm("Are you sure you want to delete this car?")){
				window.location.href ='deletecar.php?carid='+carid;
			}
		}
	</script>
	</head>
	<body>

<div id="header">
	<div class="shell">
		
		<div id="top">
			<h1><a href="#">Rent N' Go</a></h1>
			<div id="top-navigation">
				Welcome <a href="addcar.php"><strong>Administrator</strong></a>
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
          <li><a href="viewfeedback.php"><span>View feedback </span></a></li>
          <li><a href="#"><span>View Customer </span></a></li>
          <li><a href="viewcar.php"><span>View Cars </span></a></li>
		  	</ul>
		</div>

		<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="admin.php">Dashboard</a>
			<span>&gt;</span>
			Vehicle Management
		</div>
		
		<br />
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					
					<div class="box-head">
						<h2 class="left">Our Vehicles</h2>
						<div class="right">
							<label>search </label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div>
							
					</div>
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								
								<th>Car ID</th>
								<th>Car Name</th>
								<th>Reg No</th>
								<th>Image</th>
								<th>Hire Price</th>
								<th>Fuel Type</th>
								<th>Seat</th>
								
							
								<th width="110" class="ac">Content Control</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM car";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								
								<td><h3><a href="#"><?php echo $row['carid'] ?></a></h3></td>
								<td><?php echo $row['carname'] ?></td>
								<td><?php echo $row['regno'] ?></td>
								<<td><img src="cars/<?php echo $row['image'];  ?>"  width="120" height="100"  /> </td>
								<td><?php echo $row['price'] ?></td>
								<td><?php echo $row['fuel'] ?></td>
								<td><?php echo $row['capacity'] ?></td>
							
								<td><a href="javascript:sureToApprove(<?php echo $row['carid'];?>)" class="ico del">Delete</a><a href="#" class="ico edit">Edit</a></td>
							</tr>
							<?php
								}
							?>
							</table>
							
							</div>
					<h2><input type="submit" onclick="window.print()" value="Print Here" /></h2>
					
				</div>
				
			</div>
			<div id="sidebar">
				
	
				<div class="box">
					
			
					<div class="box-head">
						<h2>Management</h2>
					</div>
					
					
					<div class="box-content">
						<a href="addcar.php" class="add-button"><span>Add new Vehicles</span></a>
						<div class="cl">&nbsp;</div>
						
						
						
					</div>
				</div>
				
			</div>
		
			
			<div class="cl">&nbsp;</div>			
		</div>
		
	</div>
</div>

	
</body>
</html>