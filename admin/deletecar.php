<?php
	include '../includes/config.php';
	$carid = $_REQUEST['carid'];
		$query = "DELETE FROM car WHERE carid = '$carid'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Car Successfully Removed \");
					window.location = (\"admin.php\")
				</script>";
	}
?>
