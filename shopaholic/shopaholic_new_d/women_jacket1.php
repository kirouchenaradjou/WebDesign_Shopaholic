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
<div class="row">
  <div class="col-md-6">
<figure class="individualPic">
  
  <img src="images/jacket1.jpg" alt="Iced Coffee" width="225" height="168">
  </figure>
</div>
  
  <div class="col-md-6">
    <div style="margin-top: 150px; ">
        <strong><label>FAUX SUEDE BIKER JACKET</label></strong><br>

      <form class="myform_toaddtoCart" action="women_jacket1.php" method="post">
        <label><b>Price: 40</b></label><br>
      <b><label>Size:</label></b>
  <select name="Choose your size">
     
     <option value="XS" selected>XS</option>
     <option value="S">S</option>
     <option value="M">M</option>
     <option value="L">L</option>
     <option value="XL">XL</option>
    </select> <br>
    <b><label>Quantity:</label></b>
    <select name="Quantity">
    <option value="1" selected>1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
    </select> <br><br>

      <input name="add_but" type="submit" id="addToCart_But" value="Add to Cart"/><br>
      </form>
  </div>
</div>
</div>

<?php
      if(isset($_POST['add_but']))
      {
        
        //echo '<script type="text/javascript">alert("signup button clicked")</script>';
        
        $quantity = $_POST['Quantity'];
        
        
          $sql= "select prdquantity,productname from productList where prd_ID='01'";
      $result = $con->query($sql);
      if($result->num_rows>0)
      {
        while($row= $result->fetch_assoc())
        {
          //update the prdList table
                  $existingQuantity= $row["prdquantity"];
                  $productName = $row["productname"];
                  $newquantity = $existingQuantity - $quantity;
                  $updatequery= "UPDATE productList set prdquantity =$newquantity where prd_ID=01 ";
                  $con->query($updatequery);
          //Add a new entry to the CartList Table
                  //product Name
                  //total Price
                  $totalPriceForPrd = $quantity*40;
                  //$query = "insert into credentials values('$username','$password')";
                  $sql_cart= "select prdQuantity from cartlist where prdID='1'";
                   $result_cart = $con->query($sql_cart);
      if($result_cart->num_rows>0)
      {
        while($row_cart= $result_cart->fetch_assoc())
        {
        $existingQuantity_cart= $row_cart["prdQuantity"];
        $newquantity_cart = $existingQuantity_cart + $quantity;

        $totalPriceForPrd_cart = $newquantity_cart*40;
        $updatequery_cart ="UPDATE cartlist set prdQuantity =$newquantity_cart , prdTotalProce =$totalPriceForPrd_cart where prdID=1";

                  $con->query($updatequery_cart);
                  echo '<script type="text/javascript">alert("Your cart was updated!")</script>';

      }
    }
      else
      {
         $insertquery ="insert into cartlist values ('1','$productName','40','$quantity','$totalPriceForPrd')";
                  mysqli_query($con, $insertquery);
        echo '<script type="text/javascript">alert("Items were added to your cart!")</script>';

      }
                 
        }
      }
  
          
          
        }
        
      
      
    
    ?>

<br><br><br><br>
<!-- Set Carousels -->

<div class="container">
<div id="myCarousel" class="carousel slide bg-inverse ml-auto mr-auto" data-ride="carousel">
   <div class="carousel-inner" role="listbox" style="margin-top: 200px;">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    

  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/jacket1a.jpg" alt="Fall Jacket" style="width:100%; height: 1000px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/jacket1b.jpg" alt="Gown" style="width:100%; height: 1000px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/jacket1c.jpg" alt="suit" style="width:100%; height: 1000px">
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
</div>
</div>




<br><br>


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