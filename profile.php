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
				
                    <h2 class="title">My Info</h2>
                    <form method="POST" action="" >
                             <?php 
				                    $cus = $_SESSION['cid'];
							
								$select = "SELECT * FROM CUSTOMER WHERE cid='$cus'";
										
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
                    
                    
                         
                    

                  <div align="center">
				   <img src="img/profile.png" height = 150px width = 150px>
                   <p>
                     
                   Full  Name:
                <label ><input type="text" name="cname"   value=" <?php echo $row['cname'];?> " ></label>
                  </p>
					 
								
                   
                              
                 <p>Username:
                 <label> <input  type="text" name="username" value="<?php echo  $row['username'];?>" ></label>
                                
                    </p>
                     
					 <p>Email:
                           <label> <input  type="text"  name="email" value="<?php echo  $row['email']?>" >
                       </label>
					   </p>
						
                       
                       <p>Gender:
                         <label><input  type="text" name="gender" value="<?php echo  $row['gender']?>" >
                           </label>
					</p>
                           
                        
                       
                          <p>Phone:
                           <label> <input type="number" name="phone" value="<?php echo $row['phone']?>" >
                        </label>
						</p>

                       
                          <p>Housename:
                           <label> <input  type="text" name="housename" value="<?php echo  $row['housename'];?>" >
                      </label>
					  </p>

                        
                        
                          <p>Streetname:
                           <label> <input type="text"  name="streetname" value="<?php echo $row['streetname'];?>" >
                        </label>
						</p>

                      
                          <p>City:
                           <label> <input  type="text" name="city" value="<?php echo $row['city'];?>" >
                         <label>
						 </p>

                          <p>Pincode:
                          <label>  <input type="number" name="pincode" value="<?php echo$row['pincode'];?>" >
                        </label>
						</p>
                          <p>Country:
                          <label>  <input type="text" name="country" value="<?php echo$row['country'];?>" >
                        </label>
						</p>

                       <p>State:
                          <label>  <input type="text" name="state" value="<?php echo$row['state'];?>" >
                        </label>
						</p>


                       
                          <p>Licence Number:
                          <label>  <input type="text" name="licence_no" value="<?php echo $row['licence_no'];?>" >
                   </label>
				   <p>

                <a href="changepass.php">Change Password </a>
				</p>
                        
                     <button   name="send" >Update Info</button>
                   
                       
				    </div>
                    </form>
					</table>
								
      
								<?php  }
						if(isset($_POST['send'])){
							include 'includes/config.php';
							$cus = $_SESSION['cid'];
							
							$username = $_POST['username'];
							$email = $_POST['email'];
							$cname = $_POST['cname'];
						    $gender = $_POST['gender'];
							$phone = $_POST['phone'];
							$housename = $_POST['housename'];
							$streetname = $_POST['streetname'];
							$city = $_POST['city'];
							$pincode = $_POST['pincode'];
							$country = $_POST['country'];
							$state = $_POST['state'];
							$licence_no= $_POST['licence_no'];
							
							$sql = "UPDATE customer SET username='$username',email='$email',
							cname='$cname',gender='$gender',phone=$phone,housename='$housename',streetname='$streetname',
							city='$city',pincode=$pincode,country='$country',state='$state',licence_no='$licence_no' WHERE cid='$cus' ";
							$res = $conn->query($sql);
							
								if($res === TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Updated Sucessfully\");
											window.location = (\"profile.php \")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"updation Failed\");
											window.location = (\"profile.php\")
											</script>";
							}
						}
							
						
					  ?>	  