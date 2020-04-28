
<!DOCTYPE html >
<html>
<head>
	
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/adminstyle.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(returnid){
			if(confirm("Are you sure you want to delete this return History?")){
				window.location.href ='deletereturn.php?returnid='+returnid;
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
						<h2>Returned cars </h2>
					</div>
<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								
								<th>Return ID</th>
								<th>Bookid</th>
								<th>Return Date</th>
								<th>Total Days</th>
								<th>Extra Charge</th>
							
								
							
								<th width="110" class="ac">Content Control</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT * FROM carreturn";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
							
							<td><?php echo $row['returnid'] ?></td>
							<td><?php echo $row['bookid'] ?></td>
							<td><?php echo $row['returndate'] ?></td>
							<td><?php echo $row['days'] ?></td>
							<td><?php echo $row['extra'] ?></td>
							<td><a href="javascript:sureToApprove(<?php echo $row['returnid'];?>)" class="ico del">Delete History</a>
							</tr>
							<?php
								}
							?>
							</table>
							
							</div>
							