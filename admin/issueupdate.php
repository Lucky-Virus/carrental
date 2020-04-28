<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE booking SET approve = 'ISSUED' WHERE bookid = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
											alert(\"Approved Succesfully\");
											window.location = (\"request.php \")
											</script>";
	?>
		<meta content="4; request.php" http-equiv="refresh" />
	<?php
	}
?>
