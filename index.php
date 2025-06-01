<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>I'MUNITE PHARMA</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <div class ="header"></div>
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
                <a href="cart.php"><img src="images1/cart.png" width="30px" height="30px"></a>
                <img src="images1/menu.png" class="menu-icon" onClick="menutoggle()" >
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Elevate your Health <br>Embrace Consistency </h1>
                    <p>Health isn't just about one grand effort; it's about the daily dedication to wellness. Your path to well-being begins with steadfast commitment.</p>
                    <a href="products.php" class="btn">Buy Now &#8594;</a><!---&#8594; right arrow symbol ke liye---->
                </div>
                <div class="col-2">
                    <img src="images1/image1.png">
                </div>
            </div>
        </div>
        
        <!------------------------------ featured categories------------------------------>
        <div class="categories">
            <div class="small-container">
                <div class="row">
                <div class="col-3">
                    <img src="images1/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="images1/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="images1/category-3 (2).jpg">
                </div>
            </div>
            </div>
        </div>
        
        <!------------------------------ featured Products------------------------------>
        <div class="small-container">
            <h2 class="title" >Daily Needs</h2>
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
            
            
             <h2 class="title" >Essential Products</h2>
                <div class="row">
                    <div class="col-4">
                        <a href="products-details.php"><img src="images1/product-5.jpg"></a>
                        <h4>Minimalist 10% Vitamin B5 Gel Face Moisturizer For Oily & Acne Prone Skin</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>₹331</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.php"><img src="images1/product-3.jpg"></a>
                        <h4>NIVEA MEN Deep Impact Freshness Deodorant Spray</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>₹197</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.php"><img src="images1/product-7.jpg"></a>
                        <h4>Minimalist Anti-Pigmentation Kit, Skin Care Routine Kit For Unisex, Face Wash, Serum & Sunscreen Combo, 180g</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>₹1,212 </p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.php"><img src="images1/product-2.jpg"></a>
                        <h4>Head & Shoulders , Anti Dandruff Shampoo, Lemon Fresh, 180 ML</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>₹199</p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-4">
                        <a href="products-details.php"><img src="images1/product-77.jpg"></a>
                        <h4>Life Aveda De Stress Ayurvedic medicine for stress & anxiety</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>₹999</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.php"><img src="images1/product-100.jpg"></a>
                        <h4>Minimalist 5% Niacinamide Face Serum for Clear Glowing Skin</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>₹569</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.php"><img src="images1/product-111.jpg"></a>
                        <h4>three60+ PAIN RELIEF & JOINT MOBILITY tablets |  60 Tablets</h4>
                        <div class="rating">
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>₹1,450</p>
                    </div>
                    <div class="col-4">
                        <a href="products-details.php"><img src="images1/product-12.jpg"></a>
                        <h4>Minimalist Maleic Bond Repair Complex Shampoo & Conditioner Combo (Hair Shampoo & Mask)</h4>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>₹1,167 </p>
                    </div>  
                </div>
            </div>
        
        <!--------------------------`   offer   --------------------------------->
        <div class="offer">
            <div class="small-container">
                <div class="row">
                    <div class="col-2">
                        <img src="images1/image1.png" class="offer-img">
                    </div>
                    <div class="col-2">
                        <p>Exclusively Available on I'munite Pharma</p>
                        <h1>Medicines And Daily Products</h1>
                        <small> Purchase the latest collections of medicines online on I'munite Pharma at competitive prices from renowned brands such as Pfizer, GlaxoSmithKline, Novartis, Roche, and Sanofi at your convenience. </small><br>
                        <a href="products.php" class="btn">Buy Now &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <!------------------------------Testimonial---------------------------------->
        <div class="testimonial">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>I'm a frequent user of I'munite Pharma's website, and I'm impressed. The layout is user-friendly, making it easy to find what I need. They offer a wide range of brands at competitive prices, and their customer service is excellent. I highly recommend it for all your pharmaceutical needs.</p>
                        <div class="rating"> 
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images1/user-1.png">
                        <h3>Sean Parkar</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>Having recently discovered I'munite Pharma's website, I'm thrilled with the experience. It's incredibly user-friendly, and I easily found the medications I needed. The range of brands available is impressive, and the prices are competitive. What really stands out is their exceptional customer service—they're responsive and helpful. I'm definitely sticking with I'munite Pharma for all my pharmaceutical needs.</p>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images1/user-2.png">
                        <h3>Mike Smith</h3>
                    </div>
                    <div class="col-3">
                        <i class="fa fa-quote-left" ></i>
                        <p>I recently stumbled upon I'munite Pharma's website, and I'm thoroughly impressed. The site is easy to navigate, and I quickly found the medications I was looking for. The selection of brands is diverse, and the prices are quite reasonable. What sets them apart, though, is their outstanding customer service. Whenever I had a question, their team was quick to respond and very helpful. I'm definitely making I'munite Pharma my go-to for all my pharmaceutical needs. </p>
                        <div class="rating"> 
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <img src="images1/user-3.png">
                        <h3>Mabel Joe</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <!----------------------------------Brands------------------------------------>
        <div class="brands">
            <div class="small-container">
                <div class="row">
                    <div class="col-5">
                        <img src="images1/logo-Minimalist.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images1/logo-nivea.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images1/logo-olay.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images1/logo-cipla.png" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images1/logo-dettol.png" alt="">
                    </div>
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
                    <p>"Our Mission Is to Provide Sustainable Access to the Comfort and Healing Benefits of Medicine for All. Just as sports bring joy and wellness, our goal is to ensure that the benefits of medicine are within reach for everyone."</p>
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
    </body>
</html>
