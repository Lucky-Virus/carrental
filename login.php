<html>

<head>
  <link rel="stylesheet" href="css/admin.css">

  <title>Admin Login</title>
</head>

<body>
<form action="loginprocess.php" method='POST' enctype="multipart/form-data" >
  <div class="main">
    <p class="login"align="center">Admin Login</p>
    <form class="form1">
      <input class="un" type="text" name="username"  align="center" placeholder="Username">
      <input class="pass" type="password" name="password" align="center" placeholder="Password">
       <input class="submit" type="submit" name="login" value="Login"><br><br>
          <?php
	session_start();
if(isset($_GET['usr']))
	{

        echo '<center><font color="red" size="4">Incorrect User Name...</font></center>';
			echo '<br><br>';
	}
	if(isset($_GET['pd']))
	{

        echo '<center><font color="red" size="4">Incorrect password...</font></center>';
			echo '<br><br>';
	}
 
?>  
                
    </div>
	  </form>
    
  
</body>

</html>