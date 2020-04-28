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
          <li><a href="#"><span>View Customer </span></a></li>
		  	</ul>
		</div>
		<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
		Customer
		</div>
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				
			
					<div class="table">
						<h2 class="left">Customer</h2>
						<div class="right">
							<label>search customer</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="search" />
						</div>
					</div>
						
					
					<div class="table">
						<table width="100%" border="0" cellspacing="1" cellpadding="5">
							<tr>
							<th>CID</th>
								<th>NAME</th>
								
								<th>GENDER</th>
								<th>EMAIL</th>
								<th>PHONE</th>
								<th>HOUSENAME</th>
								<th>STREETNAME</th>
							
								
								<th>CITY</th>
								<th>PINCODE</th>
								<th>COUNTRY</th>
								<th>STATE</th>
								<th>LICENCENO</th>
								</tr>
								<?php
								include '../includes/config.php';
								$select = "SELECT * FROM CUSTOMER";
										
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
							<td><?php echo $row['cid'] ?></td>
							<td><?php echo $row['cname'] ?></td>
						
							<td><?php echo $row['gender'] ?></td>
							<td><?php echo $row['email'] ?></td>
							<td><?php echo $row['phone'] ?></td>
							<td><?php echo $row['housename'] ?></td>
							<td><?php echo $row['streetname'] ?></td>
							<td><?php echo $row['city'] ?></td>
							<td><?php echo $row['pincode'] ?></td>
							<td><?php echo $row['country'] ?></td>
							<td><?php echo $row['state'] ?></td>
							<td><?php echo $row['licence_no'] ?></td>
							
								</tr>
							<?php
								}
							?>
						</table>
				
              </div>
			 
			
			
			
					
		</div>
		
	</div>
</div>
</body>
</html>