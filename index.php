<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="styles/style.css">
    <title>Store</title>
  
</head>
<body>
   <!-- Top section Begin -->
 <div id="top">
    <div class="container">
<!-- Top Left --><div class="col-md-6 offer"><a href="" class="btn btn-success btn-sm">Welcome</a><a href="#">4 Items In Your Cart | Total Price: 300 MAD</a></div>
<!-- Top Right -->
 <div class="col-md-6">
    <ul class="menu">
        <li class="active"><a href="customer_register.php">Register</a></li>
        <li><a href="my_account.php">My Account</a></li>
        <li><a href="cart.php">Go To Cart</a></li>
        <li><a href="checkout.php">Login</a></li>
    </ul>
 </div>
    </div>
 </div>
     <!-- Top section End -->
  <!-- ____________________________________________________ -->
  <!-- Navigation AND Search Section Begin -->
  <div id="navbar" class="navbar navbar-default">
  <div class="container">
          <!-- Navbar Header Begin -->
         <div class="navbar-header">
<!--Pour un Logo cliquable -->
            <a href="index.php" class="navbar-brand home">
                <img src="images/logo-ezgif.com-resize (1).png" alt="Image cliquable" class="hidden-xs">
                <img src="images/logo-ezgif.com-resize (2).png" alt="extra small" class="visible-xs">
            </a>
            <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only" >Toggle Navigation</span>
                <i class="fa fa-align-justify" style="font-size:30px;color:#007bff;"></i>
                        </button>
            
                <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                <span class="sr-only">Toggle Search</span>
                <i class="fa fa-search" style="font-size:30px;color:#007bff;"></i>
                        </button>
         </div>  
          <!-- Navbar Header End -->
       <!-- Navigation Begin  -->
       <div class="navbar-collapse collapse" id="navigation">
       <!---Left Side-->
            <div class="padding-nav">
               <ul class="nav navbar-nav left">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="my_account.php">My Account</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="contact.php">Contact Us</a></li>
               </ul>
            </div>
            <!---Right Side-->
            <a href="cart.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart" style="font-size:25px"></i>
         <span> 4 items in Your Cart </span></a>
        <div class="navbar-collapse collapse right">
<button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
<span class="sr-only">Toggle Search</span>
<i class="fa fa-search"></i></button>
        </div>
           
           <!---Search Begin-->
<div class="collapse clearfix" id="search"></div>
      <form action="results.php" method="get" class="navbar-form">
      <div class="input-group">
        <input type="text" class="form-control" name="user_query" placeholder="Search" required >
        <span class="input-group-btn">
            <button type="submit" class="btn btn-primary" name="search">
                <i class="fa fa-search"></i>
            </button>
        </span>
      </div>
      </form>   

<!---Search End-->
        </div>
        
        
         <!-- Navigation End  -->

    </div>
</div>
  <!-- Navigation AND Search Section End -->
<!-- Slider Section Begin -->
<div id="slide" class="container">
    <div class="col-md-12">
        <!-- Carousel Begin -->
        <div class="carousel slide" id="myCarousel" data-ride="carousel">
            <!-- Carousel indicators Begin -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- Carousel indicators End -->

            <!-- Carousel inner Begin -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/slide1-ezgif.com-resize.png" alt="slide1">
                </div>
                <div class="item">
                    <img src="images/slide2-ezgif.com-resize (1).png" alt="slide2">
                </div>
                <div class="item">
                    <img src="images/slide3png-ezgif.com-resize.png" alt="slide3">
                </div>
                <div class="item">
                    <img src="images/slide4-ezgif.com-resize.png" alt="slide4">
                </div>
            </div>
            <!-- Carousel inner End -->

            <!-- Left & Right chevron Begin -->
            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            <!-- Left & Right chevron End -->
        </div>
        <!-- Carousel End -->
    </div>
</div>
<!-- Slider Section End -->

<!-- Advantages Section Begin -->
<div id="advantages">
    <div class="container">
        <div class="same-height-row">
            <!--First Advantage-->
<div class="col-sm-4"><div class="box same-height" style="background: #FFF; margin: 0 0 30px; border: 1px solid #E6E6E6; box-sizing: border-box; height: auto; padding: 20px;box-shadow:0px 2px 5px rgba(0,0,0, .3);"><div class="icon text-center"><i class="fa fa-heart"></i></div><h3 class="text-center"><a href="#">BEST OFFER</a></h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, doloremque!</p></div></div>
             <!--Second Advantage-->
<div class="col-sm-4"><div class="box same-height" style="background: #FFF; margin: 0 0 30px; border: 1px solid #E6E6E6; box-sizing: border-box; height: auto; padding: 20px;box-shadow:0px 2px 5px rgba(0,0,0, .3);"><div class="icon text-center"><i class="fa fa-tags"></i></div><h3 class="text-center"><a href="#">BEST PRICES</a></h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, doloremque!</p></div></div>
             <!--Third Advantage-->
<div class="col-sm-4"><div class="box same-height" style="background: #FFF; margin: 0 0 30px; border: 1px solid #E6E6E6; box-sizing: border-box; height: auto; padding: 20px;box-shadow:0px 2px 5px rgba(0,0,0, .3);"><div class="icon text-center"><i class="fa fa-thumbs-up"></i></div><h3 class="text-center"><a href="#">100% ORIGINAL</a></h3><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, doloremque!</p></div></div>

        </div>
    </div>
</div>
<!-- Advantages Section End -->
     <!-- Latest Products section Begin -->
   <div id="hot">
    <div class="box" style="background: #FFF;margin: 0 0 30px; border: 1px solid #E6E6E6; box-sizing: border-box; height: auto; padding: 20px;box-shadow:0px 2px 5px rgba(0,0,0, .3);text-align:center;">
  <div class="container">
    <div class="col-md-12">
        <h2>Our Latest Products</h2>
    </div>
  </div>
    </div>
   </div>
        <!-- Latest Products section End -->
         <!-- Products Content Begin -->
         <div id="content" class="container">
    <div class="row">
        <!-- Première Carte -->
        <div class="col-sm-6 col-md-4 col-4 single">
            <div class="products">
                <a href="details.php">
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="images/v1-ezgif.com-resize.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 1</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet. <span>Price: 300 MAD</span></p>
                            <a href="details.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        <!-- Deuxième Carte -->
        <div class="col-sm-6 col-md-4 col-4 single">
            <div class="products">
                <a href="details.php">
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="images/v2-ezgif.com-resize.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 2</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet. <span>Price: 400 MAD</span></p>
                            <a href="details.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        <!-- Troisième Carte -->
        <div class="col-sm-6 col-md-4 col-4 single">
            <div class="products">
                <a href="details.php">
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="images/v3-ezgif.com-resize.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet. <span>Price: 500 MAD</span></p>
                            <a href="details.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<hr>
<div id="content" class="container">
    <div class="row">
        <!-- Première Carte -->
        <div class="col-sm-6 col-md-4 col-4 single">
            <div class="products">
                <a href="details.php">
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="images/v4-ezgif.com-resize.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 1</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet. <span>Price: 300 MAD</span></p>
                            <a href="details.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        <!-- Deuxième Carte -->
        <div class="col-sm-6 col-md-4 col-4 single">
            <div class="products">
                <a href="details.php">
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="images/v5-ezgif.com-resize.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 2</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet. <span>Price: 400 MAD</span></p>
                            <a href="details.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        <!-- Troisième Carte -->
        <div class="col-sm-6 col-md-4 col-4 single">
            <div class="products">
                <a href="details.php">
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="images/v6.jfif" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet. <span>Price: 500 MAD</span></p>
                            <a href="details.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<hr>
<div id="content" class="container">
    <div class="row">
        <!-- Première Carte -->
        <div class="col-sm-6 col-md-4 col-4 single">
            <div class="products">
                <a href="details.php">
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="images/v7-ezgif.com-resize.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 1</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet. <span>Price: 300 MAD</span></p>
                            <a href="details.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        <!-- Deuxième Carte -->
        <div class="col-sm-6 col-md-4 col-4 single">
            <div class="products">
                <a href="details.php">
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="images/v8-ezgif.com-resize.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 2</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet. <span>Price: 400 MAD</span></p>
                            <a href="details.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
        <!-- Troisième Carte -->
        <div class="col-sm-6 col-md-4 col-4 single">
            <div class="products">
                <a href="details.php">
                    <div class="card" style="width:300px">
                        <img class="card-img-top" src="images/v3-ezgif.com-resize.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">Product 3</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet. <span>Price: 500 MAD</span></p>
                            <a href="details.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


          </div>
           <!-- Products Content End --> 
   <script src="js/jquery-331.min.js"></script>
   <script src="js/bootstrap-337.min.js"></script> 
</body>
</html>