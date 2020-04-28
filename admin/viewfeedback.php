<!DOCTYPE html >
<html>
<head>
	<title>Admin Feedback</title>
	<link rel="stylesheet" href="css/adminstyle.css" type="text/css" media="all" />
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
			<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="admin.php">Dashboard</a>
			<span>&gt;</span>
			Feedback
		</div>
		
		<br />
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					
					<div class="box-head">
						<h2 class="left">Feedback</h2>
						
							
					</div>
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								
								<th>ID</th>
								<th>cid</th>
								<th>Message</th>
								
								
								
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM feedback";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
							<td><?php echo $row['fid'] ?></td>
								<td><?php echo $row['cid'] ?></td>
								<td><?php echo $row['message'] ?></td>
								</tr>
							<?php
								}
							?>
							</table>
							</body>
</html>