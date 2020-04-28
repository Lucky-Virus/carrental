
<?php


include '../includes/config.php';
	$id = $_REQUEST['id'];
	$sql = "SELECT  * FROM customer WHERE bookid = '$id'";

$result = $conn->query($sql);


    while($row = mysqli_fetch_assoc($result)) {
       echo $row["email"]. "&nbsp";
    }


$to = "";
$subject = "PrakashSoft Website has been Lauched!";
$txt = "Respected Mam/Sir,

    PrakashSoft Website has been lauched from 3rd May 2015! To visit the website use the following link:";

  
$headers = "From: noreply@prakashsoft.esy.es";

mail($to, $subject, $txt, $headers);
$conn->close();
?>

