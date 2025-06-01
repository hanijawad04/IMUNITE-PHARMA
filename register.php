<?php
session_start();

// Database connection
$host = 'localhost';
$dbname = 'wt';
$username = 'hani';
$password = '1234';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Handle form submission
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Insert user data into Users table
    $stmt = $pdo->prepare("INSERT INTO user (username, password, email, address) VALUES (?, ?, ?, ?)");
    $stmt->execute([$username, $password, $email, $address]);

    // Redirect to login page after successful registration
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
    <style>
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 500px;
            height: 700px;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        textarea {
            resize: vertical;
            height: 80px;
        }
        button {
            background-color: #ff523b;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .container1 {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            text-align: center;
        }
    </style>
</head>
<body>
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
            <img src="images1/menu.png" class="menu-icon" onClick="menutoggle()">
        </div>
        <div class="row">
    <div class="col-2">
        <div class="container1">
            <form action="register.php" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="email" name="email" placeholder="Email" required>
                <textarea name="address" placeholder="Address" required></textarea>
                <button type="submit" name="register">Sign Up</button>
            </form>
        </div>
    </div>
    <div class="col-2">
        <img src="images1/image1.png" alt="Image">
    </div>
</div>

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

