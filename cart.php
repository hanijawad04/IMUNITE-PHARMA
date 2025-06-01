<?php
// Include database connection code
include_once 'db_connect.php';

// Assuming user_id is retrieved from session or authentication
$user_id = 6; // Replace with actual user ID

// Function to update item quantity in the cart
if (isset($_POST['update_quantity'])) {
    $item_id = isset($_POST['item_id']) ? $_POST['item_id'] : null;
    $new_quantity = isset($_POST['new_quantity']) ? $_POST['new_quantity'] : null;

    if ($item_id && $new_quantity !== null) {
        // Update the quantity of the specified item in the cart
        $stmt = $pdo->prepare("UPDATE cart SET quantity = ? WHERE item_id = ? AND user_id = ?");
        $stmt->execute([$new_quantity, $item_id, $user_id]);
    }

    // Redirect back to cart.php after updating quantity
    header("Location: cart.php");
    exit();
}

// Function to remove item from the cart
if (isset($_POST['remove_item'])) {
    $item_id = isset($_POST['item_id']) ? $_POST['item_id'] : null;

    if ($item_id) {
        // Delete the specified item from the cart
        $stmt = $pdo->prepare("DELETE FROM cart WHERE item_id = ? AND user_id = ?");
        $stmt->execute([$item_id, $user_id]);

        // Redirect back to cart.php after removing item
        header("Location: cart.php");
        exit();
    }
}

// Query to retrieve cart items for the logged-in user
$stmt = $pdo->prepare("SELECT * FROM cart WHERE user_id = ?");
$stmt->execute([$user_id]);
$cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Add your CSS styles here -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
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
    </div>    

    <?php
    // Check if cart has items
    if (count($cart_items) > 0) {
        echo '<table>';
        echo '<tr><th>Item Name</th><th>Price</th><th>Quantity</th><th>Actions</th></tr>';
        foreach ($cart_items as $item) {
            echo '<tr>';
            echo '<td>' . $item['Item_Name'] . '</td>';
            echo '<td>' . $item['price'] . '</td>';
            echo '<td>';
            echo '<form method="post" action="cart.php">';
            echo '<input type="hidden" name="item_id" value="' . $item['item_id'] . '">';
            echo '<input type="number" name="new_quantity" value="' . $item['quantity'] . '" style="width: 50px;" >';
            echo '<button type="submit" name="update_quantity" class="btn">Update</button>';
            echo '</form>';
            echo '</td>';
            echo '<td>';
            echo '<form method="post" action="cart.php">';
            echo '<input type="hidden" name="item_id" value="' . $item['item_id'] . '">';
            echo '<button type="submit" name="remove_item" class="btn">Remove</button>';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '<form action="checkout.php" method="post">';
        echo '<button type="submit" class="btn">Proceed to Checkout &#8594;</button>';
        echo '</form>';
    } else {
        echo '<p>Your cart is empty.</p>';
    }
    ?>
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