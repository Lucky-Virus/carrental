<?php
	include '../includes/config.php';
	$returnid = $_REQUEST['returnid'];
		$query = "DELETE FROM carreturn WHERE returnid = '$returnid'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\" Successfully Removed \");
					window.location = (\"returnlist.php\")
				</script>";
	}
?>