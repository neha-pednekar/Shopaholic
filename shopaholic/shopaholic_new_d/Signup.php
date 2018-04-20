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
<body style="background-color:#7f8c8d">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    

</div>
</div></nav>


	<div id="main-wrapper" >
		<center>
		<h2 ><b>Login Page</b></h2>
		<img src="icon.png" class="icon">
		</center>
		
		<form class="myform" action="Signup.php" method="post">
			<label><b>User Name:</b></label><br>
			<input name="username" type="text" class="inputvalue" placeholder="Enter your UserName"><br>
			<label><b>Password:</b></label><br>
			<input name="password" type="password" class="inputvalue" placeholder="Enter your Password"><br>
			<input name="login" type="submit" id="login_btn" value="Login"/><br>
			<a href="register.php"><input type="button" id="register_btn" value="Register"/><br></a>
		
		</form>
		<?php
		if(isset($_POST['login'])){
		
		$username= $_POST['username'];
		$password= $_POST['password'];
		
		$query= "select * from credentials where userName='$username' AND Password='$password'";
		$query_run= mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
				{
				
				$_SESSION['username']='$username';
				header('location:index.html');
				
				}
				else
				{
				
					echo '<script type="text/javascript">alert("Please check your credential!")</script>';
				
				}
		
		
		
		
		}
			
		
		
		
		?>

</div>
  
<br /><br/>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>
