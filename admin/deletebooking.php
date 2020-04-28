<?php
	include '../includes/config.php';
	$bookid = $_REQUEST['bookid'];
		$query = "DELETE FROM booking WHERE bookid = '$bookid'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Booking Request has been deleted \");
					window.location = (\"request.php\")
				</script>";
	}
?>
