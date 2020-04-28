<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$d = "SELECT  * FROM BOOKING WHERE bookid = '$id'";
	 $res = $conn->query($d);
	 $c = mysqli_fetch_array($res);
	 $car = $c['carid'];
	 $cus = $ca['cid'];
	 
  
	
	$query = "UPDATE booking SET approve = 'Approved' WHERE bookid = '$id'";
	$queryy = "UPDATE car SET status = 'Not Availabile' WHERE carid = '$car'";
	$resultt = $conn->query($queryy);
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
											alert(\"Approved Succesfully\");
											window.location = (\"mail.php?id='$id' \")
											</script>";
	?>
		<meta content="4; request.php" http-equiv="refresh" />
	<?php
	}
?>
