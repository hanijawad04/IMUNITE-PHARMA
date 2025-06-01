<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        </div>
            


    <h1>about ussssssssssss</h1>







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

</body>
</html>