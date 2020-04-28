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
			Issued Cars
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Issued Cars</h2>
					</div>
						</div>
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
							    <th>Issue ID</th>
								<th>BookID</th>
								<th>First Meter Reading</th>
								<th>Book Date</th>
								<th>Return Date Date</th>
								<th>Customer Licence</th>
								
								<th>Car name</th>
							
								<th>carid</th>
							
								
								
							
							
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT issue.issueid,booking.bookid,issue.fmeter,booking.rdate,issue.drivinglicence,booking.bookdate,car.carname,car.carid 
								FROM issue,booking,car WHERE issue.bookid=booking.bookid AND booking.carid=car.carid";
								
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
							
								
								<td><h3><a href="#"><?php echo $row['issueid'] ?></a></h3></td>
								<td><h3><a href="#"><?php echo $row['bookid'] ?></a></h3></td>
								<td><h3><a href="#"><?php echo $row['fmeter'] ?>/km</a></h3></td>
								<td><h3><a href="#"><?php echo $row['bookdate'] ?></a></h3></td>
								<td><h3><a href="#"><?php echo $row['rdate'] ?></a></h3></td>
								<td><img src="documents/<?php echo $row['drivinglicence'];  ?>"  width="120" height="100"  /> </td>
								<td><h3><a href="#"><?php echo $row['carname'] ?></a></h3></td>
								<td><h3><a href="#"><?php echo $row['carid'] ?></a></h3></td>
						
							</tr>
							
							<?php
								}
							?>
						</table>
				
              </div>
			 
			<h2><input type="submit" onclick="window.print()" value="Print Here" /></h2>
			
			
					
		</div>
		
	</div>
</div>
</body>
</html>