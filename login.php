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

// Redirect logged-in users
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// Handle form submission
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement to fetch user data
    $stmt = $pdo->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Authentication successful
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: index.php");
        exit();
    } else {
        // Invalid credentials
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 500px;
            height: 500px;
            margin: auto;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
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
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
        }
        .navbar, .footer {
            width: 100%;
        }
        .navbar ul {
            display: flex;
            list-style: none;
        }
        .navbar ul li {
            margin: 0 15px;
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
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>
    <a href="cart.php"><img src="images1/cart.png" width="30px" height="30px"></a>
    <img src="images1/menu.png" class="menu-icon" onClick="menutoggle()">
</div>

<div class="container1">
    <div class="login-container">
        <h2>Login</h2>
        <?php
        if (isset($error)) {
            echo '<p style="color: red;">' . $error . '</p>';
        }
        ?>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" name="login">Login</button>
        </form>
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
</script>    
</body>
</html>
