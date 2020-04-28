

<!DOCTYPE html >
<html>
    <head>
        <title>Customer Registration Form</title>
   
        <link rel="stylesheet" type="text/css" href="css/default.css"/>
    </head>
    <body>    
        <form action="" class="register" method="POST">
            <h1> Customer Registration</h1>
            <fieldset class="row1">
                <legend>Account Details
                </legend>
                <p>
                    <label>Full Name *
                    </label>
                    <input type="text" name="cname"  required />
                    <label> Username*
                    </label>
                    <input type="text" name="username" required   />
                </p>
                <p>
                    <label> Email *
                    </label>
                    <input type="text" name="email"  required="true"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
                    <label>Password*
                    </label>
                    <input type="password" name="pass"  required="true" pattern=".{6,}" />
                    
                    </label>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Personal Details
                </legend>
                <p>
                    <label>Phone
                    </label>
                    <input type="text" class="long" name="phone"  required   />
                </p>
                <p>
                    <label>House name
                    </label>
                    <input type="text" maxlength="10" name="housename"    />
                </p>
                <p>
                    <label class="optional">Street
                    </label>
                    <input type="text" class="long" name="streetname"   />
                </p>
                <p>
                    <label>City *
                    </label>
                    <input type="text" class="long" name="city" required   />
                </p>
				<p>
                    <label>Postal *
                    </label>
                    <input type="text" class="long" name="pincode" required  />
                </p>
                <p>
                    <label>Country *
                    </label>
                    <select name="country"required   >
                        <option>
                        </option>
                        <option value="United States">United States
                        <option value="India">India
                        </option>
                    </select>
                </p>
                <p>
                    <label>State*
                    </label>
                    <select name="state" required   >
                        <option>
                        </option>
                        <option value="Kerala">Kerala
                        <option value="TAMIL NADU">TAMIL NADU
                        <option value="	Karnataka">	Karnataka
                        <option value="Kerala">Kerala
                        </option>
                    </select>
                </p>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label>Gender*
                    </label>
                    <select name="gender" required  >
                        <option>
                        </option>
                        <option value="Male">Male
                      
                           
                        <option value="FeMale">Female
                        </option>
                    </select>
					</p>
                
				<p>
                    <label>Licence Number *
                    </label>
                    <input type="text"name="licence_no"   class="long"/>
                </p>
           
                <div class="infobox"><h4>Helpful Information</h4>
                    <p>Password Should contain  6 charcter. </p>
                </div>
            </fieldset>
            <fieldset class="row4">
                <legend>Terms and Mailing
				
				<p class="agreement">
                    <input type="checkbox"   />
                    <label>I Accept the <a href="#" >Term And Conditions </label>
                </p>

            </fieldset>
            <div><input type="submit" button class="button" name="save"></button></div>
        </form>
		<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							
							$username = $_POST['username'];
							$email = $_POST['email'];
							$cname = $_POST['cname'];
							$pass = $_POST['pass'];
							
						
							$gender = $_POST['gender'];
							$phone = $_POST['phone'];
							$housename = $_POST['housename'];
							$streetname = $_POST['streetname'];
							$city = $_POST['city'];
							$pincode = $_POST['pincode'];
							$country = $_POST['country'];
							$state = $_POST['state'];
							$licence_no= $_POST['licence_no'];
							
							$qry = "INSERT INTO customer (username,email,cname,pass,gender,phone,housename,streetname,city,country,pincode,state,licence_no)
							VALUES('$username','$email','$cname','$pass','$gender',$phone,'$housename','$streetname','$city','$country',$pincode,'$state','$licence_no')";
							$res = $conn->query($qry);
							if($res === TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Successfully Registered.\");
											window.location = (\"signup.php\")
											</script>";
							} else{
						
						                  echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"registaration.php\")
											</script>";
							}
						}
						
					  ?>
							
								
								
								
								
								
								
						
					  
    </body>
</html>





