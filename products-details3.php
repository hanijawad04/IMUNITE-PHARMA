<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - I'MUNITE PHARMA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="images1/logo.png" width="125px"></a>
            </div>
            <nav>
                <ul id="menuItems">
                        <li><a href="index.php">Home</a></li>
                         <li><a href="products.php">Products</a></li>
                         <li><a href="about.php">About</a></li>
                         <li><a href="login.php">Login</a></li>
                         <li><a href="register.php">Register</a></li>
                </ul>
            </nav>
            <a href="add_to_cart.php"><img src="images1/cart.png" width="30px" height="30px"></a>
            <img src="images1/menu.png" class="menu-icon" onClick="menutoggle()">
        </div>
    </div>

    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="images1/product-10.jpg" width="100%" id="productImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="images1/product-10.jpg" width="100%" class="small-img" onclick="changeImage(this)">
                    </div>
                    <div class="small-img-col">
                        <img src="images1/product-10.jpg" width="100%" class="small-img" onclick="changeImage(this)">
                    </div>
                    <div class="small-img-col">
                        <img src="images1/product-10.jpg" width="100%" class="small-img" onclick="changeImage(this)">
                    </div>
                    <div class="small-img-col">
                        <img src="images1/product-10.jpg" width="100%" class="small-img" onclick="changeImage(this)">
                    </div>
                </div>
            </div>
            <div class="col-2">
                <form action="add_to_cart.php" method="post">
                    <p>Home / Daily Needs</p>
                    <h1>Colgate Total 120 gm + 120 gm (240 gm) Advanced Health Antibacterial Toothpaste</h1>
                    <h4>₹305</h4>
                    <input type="number" name="quantity" class="btn" value="1" style="width: 80px; height: 30px; text-align: center;">
                    <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                    <input type="hidden" name="Item_Name" value="Colgate Total 120 gm + 120 gm (240 gm) Advanced Health Antibacterial Toothpaste">
                    <input type="hidden" name="price" value="305">
                </form>
                <pre>
-12-HOUR DEFENSE: Only 20% of the germs in your mouth are on your teeth.
80% are on your gums, tongue, and cheeks.
-ANTI-GERM SHIELD: Featuring Dual Zinc Arginine technology, this 
toothpaste actively targets bacteria on your teeth, tongue, cheeks, 
and gums, creating a protective anti-germ barrier for enhanced oral 
health - a step above ordinary toothpaste.
-TOTAL CARE: Colgate Total helps prevent cavities, plaque build-up, 
tartar formation, gingivitis, and sensitivity. It is also certified 
by the Indian Dental Association, gluten-free, and responsibly made.
                </pre>
            </div>
        </div>
    </div>

    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <a href="products.php"><p>View More</p></a>
        </div>
    </div>

    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <a href="products-details.php"><img src="images1/product-11.jpg"></a>
                <a href="products-details.php"><h4>Colgate Gentle Enamel Ultra Soft Brush</h4></a>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₹208</p>
            </div>
            <div class="col-4">
                <a href="products-details1.php"><img src="images1/product-2.jpg"></a>
                <h4>Head & Shoulders, Anti Dandruff Shampoo, Lemon Fresh</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>₹199</p>
            </div>
            <div class="col-4">
                <a href="products-details2.php"><img src="images1/product-3.jpg"></a>
                <h4>NIVEA MEN Deep Impact Freshness Deodorant Spray</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₹197</p>
            </div>
            <div class="col-4">
                <a href="products-details3.php"><img src="images1/product-10.jpg"></a>
                <h4>Colgate Total 120 gm + 120 gm (240 gm) Advanced Health Antibacterial Toothpaste</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₹305</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and iOS mobile phone.</p>
                    <div class="app-logo">
                        <img src="images1/play-store.png" alt="">
                        <img src="images1/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="images1/logoblack.png" alt="">
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
            <hr>
            <p class="copyright">Copyright 2024 - I'MUNITE PHARMA</p>
        </div>
    </div>

    <script>
        var menuItems = document.getElementById("menuItems");
        menuItems.style.maxHeight = "0px";

        function menutoggle() {
            if (menuItems.style.maxHeight === "0px") {
                menuItems.style.maxHeight = "200px";
            } else {
                menuItems.style.maxHeight = "0px";
            }
        }

        function changeImage(image) {
            var productImg = document.getElementById("productImg");
            productImg.src = image.src;
        }
    </script>
</body>

</html>
