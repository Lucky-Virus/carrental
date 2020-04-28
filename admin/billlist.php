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
          <li><a href="returnlist.php"><span>Return </span></a></li>
          <li><a href="billlist.php"><span>Bill </span></a></li>
          <li><a href="feedback.php"><span>View feedback </span></a></li>
          <li><a href="#"><span>View Customer </span></a></li>
		  	</ul>
		</div>
		<div>
		<form>
		<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="admin.php">Dashboard</a>
			<span>&gt;</span>
	Bills
		</div>
			<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Bills </h2>
					</div>
<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								
								<th>Bill ID</th>
								<th>Bookid</th>
								<th>Price</th>
								
							
							
								
							
								<th width="110" class="ac">Content Control</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM bill";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
							
							<td><?php echo $row['billid'] ?></td>
							<td><?php echo $row['bookid'] ?></td>
							<td><?php echo $row['price'] ?></td>
						
							<td><a href=".php?id=<?php echo $row['billid'] ?>"  class="ico del">Delete Bill</a>
							</tr>
							<?php
								}
							?>
							</table>