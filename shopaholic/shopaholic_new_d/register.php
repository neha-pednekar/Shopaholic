<?php


require "config.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopaholic Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="shopaholic.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

	<script>
	// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
} 
	</script>
	
	
</head>
<body style="background-color:#bdc3c7">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    

</div>
</div></nav>


	<div id="main-wrapper" >
		<center>
		<h2 ><b>Registration Page</b></h2>
		<img src="icon.png" class="icon">
		</center>
		
		<form class="myform" action="register.php" method="post">
			<label><b>User Name:</b></label><br>
			<input name="username" type="text" class="inputvalue" placeholder="Enter your UserName" required><br>
			<label><b>Password:</b></label><br>
			<input name="password" type="password" class="inputvalue" placeholder="Enter your Password" required><br>
			<label><b>Confirm Password:</b></label><br>
			<input name="cpassword" type="password" class="inputvalue" placeholder="Confirm your password" required><br>
			<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
			<a href="Signup.php"><input type="button" id="back_btn" value="Back"/><br></a>
		
		</form>
	
		<?php
			if(isset($_POST['submit_btn']))
			{
				
				//echo '<script type="text/javascript">alert("signup button clicked")</script>';
				
				$username = $_POST['username'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query= "select * from credentials where userName='$username'";
					$query_run= mysqli_query($con,$query);
					
					if(mysqli_num_rows($query_run)>0)
					{
						//there is already a user with the same username
						echo '<script type="text/javascript">alert("User already exist use another username")</script>';
					}
					else
					{
						$query = "insert into credentials values('$username','$password')";
						$query_run =mysqli_query($con,$query);
						
						if($query_run)
						{
							
							echo '<script type="text/javascript">alert("User registered...go back to login page")</script>';
						}
					else{
						
						echo '<script type="text/javascript">alert("Error!!")</script>';
						}
					
					}
				}
				
				else{
				echo '<script type="text/javascript">alert("Password and confirm password does not match")</script>';
				
					}
			}
			
		
		?>
</div>
  
<br /><br/>
   


</body>
</html>
