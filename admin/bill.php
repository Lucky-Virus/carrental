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
		<div>
		<form>

		
		<?php
		if(!empty($_GET['bid']))
		{
			$bookid=$_GET['bid'];
			
			include '../includes/config.php';
			$select = "SELECT booking.bookid,car.carname,car.price,customer.cname,issue.fmeter,issue.issuedate,carreturn.lmeter,carreturn.returndate, 
						carreturn.days,carreturn.extra FROM issue,booking,car,customer,carreturn WHERE issue.bookid=booking.bookid AND booking.carid=car.carid 
						and booking.cid=customer.cid and carreturn.bookid=booking.bookid and booking.bookid=$bookid";
			
			$result = $conn->query($select);
			$row = $result->fetch_array();
			$meter=$row['lmeter']-$row['fmeter'];
			$d=$row['days'];
			
			$extra=$row['extra'];
			$amount=$d*$row['price']+($meter-100)*10+$extra;
			$bdate=date('Y-m-d');
			$id=$row['bookid'];
			$q="insert into bill(bookid,price,billdate) VALUES ($id,$amount,$bdate)";
			$result = $conn->query($q);
			$qry="SELECT billid FROM bill WHERE bookid=$id";
			$re = $conn->query($qry);
			$r = $re->fetch_array();
			
		
		
		}
		?>
		<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Bill
		</div>
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
			
					<div class="box-head">
						<h2 class="left">Bill</h2>
						</div>
					</div>
		
		<div align="center">
		<table border="4" width="800" height="500">
<tr><td style= "text-align:center; border-width:0px;" colspan="4"><b  style="font-size:25px;">Rent N Go</b><br>
 3,1047/2, RENT N GO MOTOR COMPANY PVT LTD M.G. ROAD, THEVARA ERNAKULAM, KERALA, 682015</td></tr>
<tr>
<td colspan="2" style="boredr-width: 0px;" rowspan="1">CUSTOMER NAME:<b style="text-transform: uppercase; text-align:right;">
<?php echo $row['cname']?></b><br>
Bill Date:<?php echo $bdate?><br></td>
<td align="center" colspan="3">Bill No:<?php echo $r['billid']?></td>
</tr>

<tr>
<td  align="center" style="padding-left: 5px;"><b>Car Name</b></td><td align="center"><b>No Of Days</b></td>
<td align="center"><b>Hire Price</b></td>
<td align="center"><b> Total Kilometer</b></td>
<td align="center"><b>Amount</b></td>
</tr>
<tr align="center">
	<td style="padding-bottom: 150px; max-width: 25ch">
<?php echo $row['carname'];
?>

</td>
<td style="padding-bottom: 150px; max-width: 25ch">
<?php echo $d;
?>
</td>
<td style="padding-bottom: 150px; max-width: 25ch">
<?php echo $row['price'];
?>/Day
</td>
<td style="padding-bottom: 150px; max_width: 25ch">
<?php 
echo $meter;

?>
</td>
<td style="padding-bottom: 150px;"><?php echo $amount;?></td>

</tr>
<tr><td  colspan="4">Extra Charge:</td><td align="center" ><?php echo $extra;?>/-</tr>
<tr><td  colspan="4">TOTAL:</td><td align="center" ><?php echo $amount;?>/-</tr>
<tr><td  colspan="5"> <b><u> Trip Summary</b></u>
<br> Rent Date : <?php echo $row['issuedate']?> 
<br> Staring Kilometer : <?php echo $row['fmeter']?>
<br> Ending Kilometer : <?php echo $row['lmeter']?>





</table>	
		
						<h2><input type="submit" onclick="window.print()" value="Print" /></h2>
		</table>
		</form>
		</div>