<?php
 session_start();
 include '/includes/config.php';
?>
	
<!DOCTYPE HTML>
<html>
<head>

    <title>Rent N Go</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/pro.css">



</head>
 
<body>


		<div id="top">
		

			<div id="top-navigation">
		
			
				Welcome <strong></strong></a>
				<span>|</span>
				<a href="logout.php"> Log out</a>
			</div>
		</div>
   <header>
    <div class="wrapper">
        <h1>Rent n' Go<span class="color">.</span></h1>
        <nav>
            <ul>
                 <li><a href="indexx.php">Home</a></li>
                <li><a href="car.php">Book Car</a></li>
           
                <li><a href="About.php">About </a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="profile.php">My Profile</a></li>
                <li><a href="MyBooking.php">Booking</a></li>
                
            </ul>
        </nav>
    </div>
</header>
<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Dream Cars For Hire</h2>
				<h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
			</section>
			</section>
			 <div class="profile">
				
                    
                    <form method="POST" action="" >
                             <?php 
				                    $cus = $_SESSION['cid'];
							
								$select = "SELECT * FROM CUSTOMER WHERE cid='$cus'";
										
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
                    <div align="center">
					<h3 >Change Password</h3>
                        <form method="post" action="">
                            <h5 > Old Password:
                               <label><input type="password" class="form-control" name="oldPassword" placeholder="Old Password">
                            </label>
					
                              <h5> New password:
                              <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                                 
								
                               <h5>
                                <input type="submit" name="save" value="Change">
                        </h5>
                        </form>
                    </div>
                </div>
            </div>
                    
								<?php }
						if(isset($_POST['save'])){
							include 'includes/config.php';
							 $cus = $_SESSION['cid'];
    }  
    $old_password= md5(md5(mysqli_real_escape_string($conn,$_POST['oldPassword'])));
    $new_password= md5(md5(mysqli_real_escape_string($conn,$_POST['newPassword'])));
  

    $password_from_database_query="select pass from customer where cid='$cus'";
    $password_from_database_result=mysqli_query($conn,$password_from_database_query) or die(mysqli_error($conn));
    $row=mysqli_fetch_array($password_from_database_result);
    
    if($row['pass']==$old_password){
        $update_password_query="update customer set pass='$new_password' where cid='$cus'";
        $update_password_result=mysqli_query($conn,$update_password_query) or die(mysqli_error($conn));
       echo "Your password has been updated.";
		 
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