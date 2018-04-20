<?php


require "config.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Jacket 1 Women</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   <!-- Stylesheet -->
  <link rel="stylesheet" href= "shopaholic.css">
  <link rel="stylesheet" href="header.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <script src="path/to/jquery-1.10.2.js"></script>
    
  <!-- JQuery --> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
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
<body>
<!--Remove the below for the black bg nav header or above for the white bg nav header-->
<nav class="navbar navbar-expand-sm" style="background-color: #696969;">
    <div class="container-fluid">
    
    
    
    <div class="row">
    <center>
    <h1 class="logo"><a href="index.html"><img src="images/icon.png" width="90" height="100" alt="Shopaholic"></a><span class="alt-logo" style="color:white;">Shopaholic - Always in Style! </span></h1>
  </center>
</div>
</div>
</nav>

<!--Navbar-->

  
<nav class="navbar navbar-expand-sm navbar-dark" style="background: black;">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Brand -->
<a class="navbar-brand" href="index.html">HOME</a>
    
      <!-- Links -->
      <div class="collapse navbar-collapse" id="nav-content">   
       <ul class="navbar-nav">
       <li class="nav-item"></li>
      <!-- Link Women-->
      
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Women" href="#" role="button" aria-haspopup="true" aria-expanded="false">Women</a>
       
        
        <div class="dropdown-menu" aria-labelledby="Women" >
          <a class="dropdown-item" href="women_tops.html">TOPS</a>
          <a class="dropdown-item" href="women_jeans.html">JEANS</a>
          <a class="dropdown-item" href="women_jackets.html">JACKETS</a>
          <a class="dropdown-item" href="women_dresses.html">DRESSES</a>
          <a class="dropdown-item" href="women_knitwear.html">KNITWEAR</a>
          <a class="dropdown-item" href="women_accessories.html">ACCESSORIES</a>
        </div>
      </li>
    

       
       <!-- Link Men-->
      
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Men" href="#" role="button" aria-haspopup="true" aria-expanded="false">Men</a>
       
        
        <div class="dropdown-menu" aria-labelledby="Men" >
          <a class="dropdown-item" href="men_shirts.html">SHIRTS</a>
          <a class="dropdown-item" href="men_jackets.html">JACKETS</a>
          <a class="dropdown-item" href="men_jeans.html">JEANS</a>
          <a class="dropdown-item" href="men_trousers.html">TROUSERS</a>
          <a class="dropdown-item" href="men_knitwear.html">KNITWEAR</a>
          <a class="dropdown-item" href="men_accessories.html">ACCESSORIES</a>
        </div>
      </li>

      <!-- Link Kids-->
      
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Kids" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kids</a>
       
        
        <div class="dropdown-menu" aria-labelledby="Kids"> 
          <a class="dropdown-item" href="girl.html">GIRL | 5 - 14 years</a>
          <a class="dropdown-item" href="boy.html">BOY | 5 - 14 years</a>
          <a class="dropdown-item" href="baby_girl.html">BABY GIRL | 3 months - 4 years</a>
          <a class="dropdown-item" href="baby_boy.html">BABY BOY | 3 months - 4 years</a>
          <a class="dropdown-item" href="mini.html">MINI | 0-12 months</a>
          <a class="dropdown-item" href="baby_accessories.html">ACCESSORIES</a>
          
          </div>
      </li>

      <!-- Link Shoes-->
      
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Shoes" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shoes</a>
       
        
       <div class="dropdown-menu" aria-labelledby="Shoes">  
          <a class="dropdown-item" href="#"><strong>WOMAN</strong></a>
          <a class="dropdown-item" href="women_boots.html">Boots</a>
          <a class="dropdown-item" href="women_flats.html">Flats</a>
          <a class="dropdown-item" href="women_heels.html">Heels</a>
          <a class="dropdown-item" href="#"><strong>MAN</strong></a>
          <a class="dropdown-item" href="men_casuals.html">Casuals</a>
          <a class="dropdown-item" href="men_sneakers.html">Sneakers</a>
          <a class="dropdown-item" href="men_oxfords.html">Oxfords</a>
          <a class="dropdown-item" href="#"><strong>KIDS</strong></a>
          <a class="dropdown-item" href="boys_shoes.html">Boys</a>
          <a class="dropdown-item" href="girls_shoes.html">Girls</a>
          </div>
      </li>

<!-- Search --> 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; 
<li class="nav-item mr-auto">
<form class="form-inline" role="search">
<input type="text" class="form-control">
<button type="submit" class="btn btn-secondary">Search</button>     
</form>
</li>



<!-- Login-->

<li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle fa fa-user" data-toggle="dropdown" id="Account" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;"> Account</a>  
       <div class="dropdown-menu user" aria-labelledby="Account">
          <a class="dropdown-item" href="#">Sign Up</a>
          <a class="dropdown-item" href="#">Sign In</a>
          </div>
      </li>


           <li class="nav-item mr-auto"><a href="cartDisplay.php" style="color: white;"><span class="fa fa-shopping-cart"></span></a></li>



      <!-- Set body height so that scrollbars grow -->
<style scoped>
body {
height:2000px;
background-color: #F5F5F5;
}
</style>
</ul>
</div>
</nav>

<!--PIC!-->
<div class="container" id="paymentID">
<div class="row">
<!-- You can make it whatever width you want. I'm making it full width
on <= small devices and 4/12 page width on >= medium devices -->
<div class="col-md-12 col-md-12">


<!-- CREDIT CARD FORM STARTS HERE -->
<div class="panel panel-default credit-card-box">
<div class="panel-heading display-table" >
<div class="row display-tr" >
<h3 class="panel-title display-td" >Payment Details</h3>
<div class="display-td" >                            
<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
</div>
</div>                    
</div>
<div class="panel-body">
<form role="form" id="payment-form">
<div class="row">
<div class="col-xs-12">
<div class="form-group" style="padding-left:15px">
	<br><br>
<label for="cardNumber">CARD NUMBER</label>
<div class="input-group">
<input 
type="tel"
class="form-control"
name="cardNumber"
placeholder="Valid Card Number"
autocomplete="cc-number"
required autofocus 
/>
<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
</div>
</div>                            
</div>
</div>
<div class="row">
<div class="col-xs-7 col-md-7">
<div class="form-group">
<label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
<input 
type="tel" 
class="form-control" 
name="cardExpiry"
placeholder="MM / YY"
autocomplete="cc-exp"
required 
/>
</div>
</div>
<div class="col-xs-5 col-md-5 pull-right">
<div class="form-group">
<label for="cardCVC">CV CODE</label>
<input 
type="tel" 
class="form-control"
name="cardCVC"
placeholder="CVC"
autocomplete="cc-csc"
required/>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="form-group" style="padding-left:15px">
<label for="couponCode">COUPON CODE</label>
<input type="text" class="form-control" name="couponCode" />
</div>
</div>                        
</div>
<div class="row">
<div class="col-xs-12">
<center><button class="btn btn-success btn-lg btn-block" type="submit">Make Payment</button></center>
</div>
</div>
<div class="row" style="display:none;">
<div class="col-xs-12">
<p class="payment-errors"></p>
</div>
</div>
</form>
</div>
</div>            
<!-- CREDIT CARD FORM ENDS HERE -->


</div>            



</div>
</div>

	<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	
</body>
  </div>




    <footer id="myFooter">
  
  <div class="footer-copyright" onclick="topFunction()">
            <p>Back to Top</p>
        </div>
        <div class="container">
        
            <div class="row">
                <div class="col-sm-3">
                   <img src="images/icon.png">
        <div>
        <div class="heading">User Rating</div>
        <hr>
        <div class="star-rating">
      <div class="star-rating__wrap">
        <input class="star-rating__input" id="star-rating-5" type="radio" name="rating" value="5">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-5" title="5 out of 5 stars"></label>
        <input class="star-rating__input" id="star-rating-4" type="radio" name="rating" value="4">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-4" title="4 out of 5 stars"></label>
        <input class="star-rating__input" id="star-rating-3" type="radio" name="rating" value="3">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-3" title="3 out of 5 stars"></label>
        <input class="star-rating__input" id="star-rating-2" type="radio" name="rating" value="2">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-2" title="2 out of 5 stars"></label>
        <input class="star-rating__input" id="star-rating-1" type="radio" name="rating" value="1">
        <label class="star-rating__ico fa fa-star-o fa-lg" for="star-rating-1" title="1 out of 5 stars"></label>
      </div>
    </div>
<div id="msg" name="msg"></div>
<p>4.1 average based on 254 reviews.</p>
    </div>
                </div>
                <div class="col-sm-2">
                    <h5>Let Us Help You</h5>
                    <ul>
                        <li><a href="#">Your Account</a> <i class="fa fa-address-book" aria-hidden="true"></i></li>
                        <li><a href="#">Returns Center</a></li>
                        <li><a href="#">100% Purchase Protection</a></li>
                        <li><a href="#">Shopaholic Assitant</a> <i class="fa fa-shopping-bag"></i></li>
                        <li><a href="#">Help</a></li>


                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Get to Know Us</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press Releases</a></li>
                                                <li><a href="#">Gift a Smile</a> <i class="fa fa-gift"></i></li>
                                                <li><a href="#">Coupons</li>

                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Our Policies</h5>
                    <ul>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="google"><i class="fa fa-instagram"></i></a>

                    </div>

                    <button type="button" class="btn btn-default">Connect with Us</button>

                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <p>© 2014-2017, Shopaholic.com, Inc. or its affiliates </p>
        </div>
    </footer>
    
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</body>
</html>
