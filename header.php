 
 
 <?php
	session_start();
	error_reporting("E-NOTICE");
?><header>
    <div class="wrapper">
        <h1>Rent n' Go<span class="color">.</span></h1>
        <nav>
		<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About </a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Policy</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="signup.php">Sign In</a></li>
            </ul>
			</nav>
			<?php
						} else{
					?>
						
       	</div>
   <header>
    <div class="wrapper">
        <h1>Rent n' Go<span class="color">.</span></h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="book.php">Book Car</a></li>
                <li><a href="About.php">About </a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Policy</a></li>
                <li><a href="#">FAQ</a></li>
                
            </ul>
        </nav>
    </div>
    </div>
	<a href="#">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		
</header>