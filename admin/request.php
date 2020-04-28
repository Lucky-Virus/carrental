<!DOCTYPE html >
<html>
<head>
	
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/adminstyle.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Are you sure you want to Approve this request?")){
				window.location.href ='approve.php?id='+id;
			}
		}
		function sureToApproves(bookid){
			if(confirm("Are you sure you want to delete this booking?")){
				window.location.href ='deletebooking.php?bookid='+bookid;
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
          <li><a href="customer.php"><span>View Customer </span></a></li>
		  	</ul>
		</div>
		<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Hire Requests
		</div>
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
			
					<div class="box-head">
						<h2 class="left">Hire Requests</h2>
						</div>
					</div>
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
							
								<th>BookID</th>
								<th>PickUp Date</th>
								<th>Return Date</th>
								<th>Destination</th>
								
								<th> Customer Name</th>
								<th>Car ID</th>
								<th>Car Name</th>
								<th>Hire Price</th>
								<th>Status</th>
								<th class="ac">Approve</th>
								<th class="ac"> Confirm Issue</th>
								<th class="ac"> Confirm Return</th>
								<th class="ac"> Delete</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT booking.bookid,booking.rdate,booking.destination,booking.bookfor,customer.cname,car.carid,car.carname,car.price,booking.approve
								       FROM booking,customer,car WHERE booking.carid=car.carid AND booking.cid=customer.cid ";
										
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								
								<td><?php echo $row['bookid'] ?></td>
								<td><?php echo $row['bookfor'] ?></td>
									<td><?php echo $row['rdate'] ?></td>	
									<td><?php echo $row['destination'] ?></td>
								<td><h3><a href="customer.php"><?php echo $row['cname'] ?></a></h3></td>
								<td><h3><a href="viewcar.php"><?php echo $row['carid'] ?></a></h3></td>
								<td><?php echo $row['carname'] ?></td>
								<td><?php echo $row['price'] ?></td>
								<td><a href="#"><?php echo $row['approve'] ?></a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['bookid'];?>)" class="ico del">Approve</a></td>
								<td><a href="issue.php?id=<?php echo $row['bookid'] ?>" class="ico edit">Issue car </a></td>
								<td><a href="return.php?id=<?php echo $row['bookid'] ?>" class="ico edit">Return </a></td></td>
								<td><a href="javascript:sureToApproves(<?php echo $row['bookid'];?>)" class="ico del">Delete</a>
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