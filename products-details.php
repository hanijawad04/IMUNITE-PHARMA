<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>All Products - I'MUNITE PHARMA</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <!--<div class ="header">-->
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images1/logo.png" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                         <li><a href="products.php">Products</a></li>
                         <li><a href="about.php">About</a></li>
                         <li><a href="login.php">Login</a></li>
                         <li><a href="register.php">Register</a></li>

                    </ul>
                </nav>
                <a href="add_to_cart.php"><img src="images1/cart.png" width="30px" height="30px"></a>
                <img src="images1/menu.png" class="menu-icon" onClick="menutoggle()" >
            </div>
           
        </div>
    <!--</div>-->
    
        
        <!------------------------------ Single product details------------------------------>
        <div class="small-container single-product">
            
            
            <!--<h2 class="title" >Featured Products</h2>-->
            <div class="row">
                    <div class="col-2">
                        <img src="images1/product-11.jpg" width="100%" id="productImg">
                        
                        <div class="small-img-row">
                            <div class="small-img-col">
                                <img src="images1/product-11.jpg" width="100%" class="small-img">
                            </div>
                             <div class="small-img-col">
                                <img src="images1/product-11.jpg" width="100%" class="small-img">
                            </div>
                             <div class="small-img-col">
                                <img src="images1/product-11.jpg" width="100%" class="small-img">
                            </div>
                             <div class="small-img-col">
                                <img src="images1/product-11.jpg" width="100%" class="small-img">
                            </div>
                        </div>
                    </div>
                
                    <div class="col-2">
                        <form action="add_to_cart.php" method="post">
                            <p>Home / Daily Needs</p>
                            <h1>Colgate Gentle Enamel Ultra Soft Brush</h1>
                            <h4>₹208</h4>
                            <input type="number" name="quantity" class="btn" value="1" style="width: 80px; height: 30px; text-align: center;">
                            <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Colgate Gentle Enamel Ultra Soft Brush">
                            <input type="hidden" name="price" value="208">
                        </form>
                        <pre>
-The entire Colgate Gentle Toothbrush range is endorsed by the Indian 
 Dental Association and specially designed with dentists to offer a 
 gentle clean
-Colgate Gentle Enamel Toothbrush is a super-soft toothbrush, specially 
 designed to protect your tooth enamel
-Colgate Gentle Enamel Toothbrush has a wide brush head and a dual-layer
 bristle technology which wrap around your teeth for greater coverage while
 brushing
-Colgate Gentle Enamel Toothbrush is made for sensitive teeth and gums.
 It contains specially designed ultra-soft tapered bristles, which are 
 gentle on your enamel, teeth and gums
-This toothbrush for sensitive teeth is designed for a superior comfortable
 grip so that you can have an effortless brushing experience
                        </pre>
                    </div>
                </div>
            </div>
        
        
        <!----------------------------------Title------------------------------------->
        <div class="small-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <a href="products.php"><p>View More</p></a>
            </div>
        </div>
                
        <!----------------------------------products------------------------------------->
        <div class="small-container">
             <div class="row">
                     <div class="col-4">
                        <a href="products-details.php"><img src="images1/product-11.jpg"></a>
                        <a href="products-details.php"><h4>Colgate Gentle Enamel Ultra Soft Brush</h4></a>
                        <div class="rating">
                            
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>₹208</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details1.php"><img src="images1/product-2.jpg"></a>
                        <h4>Head & Shoulders , Anti Dandruff Shampoo, Lemon Fresh</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>₹199</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details2.php"><img src="images1/product-3.jpg"></a>
                        <h4>NIVEA MEN Deep Impact Freshness Deodorant Spray</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>₹197</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details3.php"><img src="images1/product-10.jpg"></a>
                        <h4>Colgate Total 120 gm + 120 gm (240 gm) Advanced Health Antibacterial Toothpaste</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>₹305</p>
                    </div>  
                </div>
        </div>

        <!----------------------------------footer------------------------------------->
        <div class ="footer">
        <div class="container">
            
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="images1/play-store.png" alt="">
                        <img src="images1/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images1/logoblack.png">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                   <ul>
                       <li>Coupons</li>
                       <li>Blog Post</li>
                       <li>Return Policy</li>
                       <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                   <ul>
                       <li>Facebook</li>
                       <li>Twitter</li>
                       <li>Instagram</li>
                       <li>Youtube</li>
                    </ul>
                </div>
                
            </div>
            
            <hr><!--horizontal line-->
            <p class="copyright">Copyright 2024 - I'MUNITE PHARMA</p>
            
        </div>
    </div>
        
        
        <!-----------------------------------js for toggle menu----------------------------------------------->
        <script>
            var menuItems=document.getElementById("MenuItems");
            
            MenuItems.style.maxHeight="0px";
            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight="200px";
                }
                else{
                    MenuItems.style.maxHeight="0px";
                }
            }
        </script>
        
        <!-----------------------js for product gallery-------------------->
        
        <script>
            var productImg=document.getElementById("productImg");
            var smallImg=document.getElementsByClassName("small-img");
            
            smallImg[0].onclick=function(){
                productImg.src=smallImg[0].src;
            }
             smallImg[1].onclick=function(){
                productImg.src=smallImg[1].src;
            }
              smallImg[2].onclick=function(){
                productImg.src=smallImg[2].src;
            }
               smallImg[3].onclick=function(){
                productImg.src=smallImg[3].src;
            }
        </script>
    </body>
</html>