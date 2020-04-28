<?php
    session_start();
  include '/includes/config.php';
            $cus = $_SESSION['cid'];
    }  
    $old_password= md5(md5(mysqli_real_escape_string($con,$_POST['oldPassword'])));
    $new_password= md5(md5(mysqli_real_escape_string($con,$_POST['newPassword'])));
    $email=$_SESSION['email'];

    $password_from_database_query="select pass from customer where cid='$cus'";
    $password_from_database_result=mysqli_query($con,$password_from_database_query) or die(mysqli_error($con));
    $row=mysqli_fetch_array($password_from_database_result);
    echo $row['pass'];
    if($row['pass']==$old_password){
        $update_password_query="update customer set pass='$new_password' where cid='$cus'";
        $update_password_result=mysqli_query($con,$update_password_query) or die(mysqli_error($con));
        echo "<script type = \"text/javascript\">
											alert(\"Password has been updated.\");
											window.location = (\"changepass.php\")
											</script>";
        ?>
        
        <?php
    }else{
        ?>
        <script>
            window.alert("Wrong password!!");
        </script>
        
        <?php
        //header('location:changepass.php');
    }
?>