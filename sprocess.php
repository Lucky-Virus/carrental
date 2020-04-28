<?php
   session_start();
   require('includes/config.php');
      if (!empty($_POST))
	  {
			$username=$_POST['username'];
			$q="select * from customer where username='$username'";
			$res=mysqli_query($conn,$q)or die("wrong query");
			$row=mysqli_fetch_assoc($res);
			if(!empty($row))
			{
				if($_POST['pass']!=$row['pass'])
				{
					header("Location:signup.php?pd=1");
					
					
				}
			
				else
				{
					$_SESSION=array();
					$_SESSION['cid']=$row['cid'];
					$_SESSION['username']=$row['username'];
					header("Location:indexx.php");
				}
			}	
			
	 
	       else 
	       {
	      header("Location:signup.php?usr=1");
	      }
	  }	  
?>	  