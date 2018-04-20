<?php


require "config.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopaholic Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <link rel="stylesheet" href= "shopaholic.css">
  <link rel="stylesheet" href="header.css">
   <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
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
<nav class="navbar navbar-light bg-faded" style="background-color: #808080;">
  <a class="navbar-brand" href="#">
   
    <h2 > <img src="images/icon.png" width="60" height="60" class="d-inline-block align-top" alt="Shopaholic WebSite"><span class="alt-logo" style="color:white">Shopaholic - Always in Style! </span></h2>
  </a>

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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
         <a class="dropdown-item" href="#" type="button" data-toggle="modal" data-target="#signupModal">Sign Up</a>
          <a class="dropdown-item" href="#" type="button" data-toggle="modal" data-target="#loginModal">Sign In</a>
          </div>
      </li>


      <li class="nav-item mr-auto"><a href="#" style="color: white;"><span class="fa fa-shopping-cart"></span></a></li>
      <li class="nav-item mr-auto"> <?php
      if(isset($username_login))
      {
       echo "'$username_login'";   
      }    ?>     </li>




      <!-- Set body height so that scrollbars grow -->
<style scoped>
body {
height:2000px;
background-color:;
}
</style>
          </ul>
        </div>
</nav>

<img src="images/halloween.gif">

<div class="container-fluid">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>

  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/baby_party.jpg" alt="baby_party" style="width:100%; height: 500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/ladies.jpg" alt="ladies" style="width:100%; height: 500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/children1.jpg" alt="children" style="width:100%; height: 500px">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="images/men.jpg" alment="men" style="width:100%; height: 500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/ladies_boots.jpg" alt="ladies_boot" style="width:100%; height: 500px">
    </div>

  </div>

  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br>
 
  <div id="home-tiles" class="row" style ="margin-bottom: 50px">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="#" onclick=""><div id="menu-tile"><span>Flat 50% Off on Clutches</span></div></a>
      </div>
    
      <div class="col-md-4 col-sm-6 col-xs-12">
        <a href="#" onclick="">
          <div id="specials-tile"><span>Boots for all seasons</span></div>
        </a>
      </div>
    
      <div class="col-md-4 col-sm-12 col-xs-12">
        <a href="#" onclick="">
          <div id="map-tile"><span>Summer Sunglasses are here</span></div>
        </a>
      </div>
</div>
   
 <!--<div class="row">
  <div class="col-sm-6">
    <div class="view overlay hm-red-strong">
    <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20(3).jpg" class="img-fluid " alt="">
    <div class="mask flex-center">
        <p class="white-text">Strong overlay</p>
    </div>
</div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Special title treatment</h3>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  !-->

  
    <img src="images/sales.gif">

</div>
  <hr>
  <center><h2>Featured Brands</h2></center>
  <br>
<div class="container">
    <!-- Simple Zoom Effects -->
    <div class="row">
        <div class="col-sm-6">
            <div class="product-div1">
                <div class="img-div1">
                    <img src="images/party_men.jpg" class="img-responsive transition">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
           <div class="project">
                    <figure class="img-responsive">
                        <img src="images/winter.jpg">
                        <span class="actions">
                             <span class="project-details">Be Winter Ready!</span>
                        </span>
                    </figure>
                </div>
        </div>
     
  </div>
</div>
<br>
<!--!Login Pop-Up-->
<!-- Login Modal -->
  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
     <div class="modal-content">

       <form class="myformLogin" action="index.php" method="post">
         <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login Form</h4>
        </div><br>
      <label><b>User Name:</b></label><br>
      <input name="username_login" type="text" class="inputvalue" placeholder="Enter your UserName"><br>
      <label><b>Password:</b></label><br>
      <input name="password_login" type="password" class="inputvalue" placeholder="Enter your Password"><br>
      <input name="login" type="submit" id="login_btn" value="Login"/><br>
      <a href="register.php"><input type="button" id="register_btn" value="Register"/><br></a>
      <div class="modal-footer"></div>
        </div>
    </form>
    <?php
    if(isset($_POST['login'])){
    
    $username_login= $_POST['username_login'];
    $password= $_POST['password_login'];
    
    $query= "select * from credentials where userName='$username_login' AND Password='$password'";
    $query_run= mysqli_query($con,$query);
      if(mysqli_num_rows($query_run)>0)
        {
        
        }
        else
        {
        
          echo '<script type="text/javascript">alert("Please check your credential!")</script>';
        
        }
    
    
    
    
    }
      
    
    
    
    ?>
        </div>
        </div>
      </div>
 



  <!-- Signup Modal -->
  <div class="modal fade" id="signupModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
    <form class="myform" action="index.php" method="post">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration Form</h4>
        </div><br>
    

    <div class="form-group">
      <label class="col-md-3 control-label" ><b>User Name:</b></label><br>
      <div class="col-sm-10">
      <input name="username" type="text" class="inputvalue" placeholder="Enter your UserName" required></div>
    </div>


    <div class="form-group">
      <label class="col-md-3 control-label"><b>Password:</b></label><br>
      <div class ="col-sm-10">
      <input name="password" type="password" class="inputvalue" placeholder="Enter your Password" required><br></div>
    </div>

    <div class="form-group">
      <label class="col-md-6 control-label"><b>Confirm Password:</b></label><br>
        <div class ="col-sm-10">
      <input name="cpassword" type="password" class="inputvalue" placeholder="Confirm your password" required><br></div>
    </div>

      <div class="form-group">
        <div class ="col-sm-10">
      <input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/>&nbsp;&nbsp;&nbsp;
      <a href="Signup.php">
        <input type="button" id="back_btn" value="Back"/>
        <br></a><br>
      </div>
    </div>
        <div class="modal-footer"></div>
        </div>


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
      
    </div>
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
                        <li><a href="ReturnsCenter.html">Returns Center</a></li>
                        <li><a href="sopaholicAssistance.html">Shopaholic Assitant</a> <i class="fa fa-shopping-bag"></i></li>
                        <li><a href="sopaholicAssistance.html">Help</a></li>


                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Get to Know Us</h5>
                    <ul>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="careers.html">Careers</a></li>
                        <li><a href="#">Press Releases</a></li>
                                                <li><a href="#">Gift a Smile</a> <i class="fa fa-gift"></i></li>
                                                <li><a href="#">Coupons</li>

                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Our Policies</h5>
                    <ul>
                        <li><a href="termsandconditions.html">Terms and Conditions</a></li>
                        <li><a href="privacypolicy.html">Privacy Policy</a></li>
                        <li><a href="FAQ.html">FAQ</a></li>
                    </ul>
                </div>
‌                <div class="col-sm-3">
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
