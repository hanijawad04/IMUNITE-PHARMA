<?php
// Include database connection code (PDO setup)
include_once 'db_connect.php'; // Adjust the path to your database connection file

if (isset($_POST['add_to_cart'])) {
    $user_id = 6; // Assuming a static user_id for demonstration purposes; replace with actual user_id
    $Item_Name = $_POST['Item_Name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    // Additional data sanitization and validation can be performed here

    // Check if the product already exists in the cart for the user
    $stmt = $pdo->prepare("SELECT * FROM cart WHERE user_id = ? AND Item_Name = ?");
    $stmt->execute([$user_id, $Item_Name]);
    $existing_item = $stmt->fetch();

    if ($existing_item) {
        // If the product already exists in the cart, update the quantity
        $new_quantity = $existing_item['quantity'] + $quantity;
        $stmt = $pdo->prepare("UPDATE cart SET quantity = ? WHERE user_id = ? AND Item_Name = ?");
        $stmt->execute([$new_quantity, $user_id, $Item_Name]);
    } else {
        // If the product is not already in the cart, insert it as a new item
        $stmt = $pdo->prepare("INSERT INTO cart (user_id, Item_Name, price, quantity) VALUES (?, ?, ?, ?)");
        $stmt->execute([$user_id, $Item_Name, $price, $quantity]);
    }

    // Redirect user to cart page or show success message
    header("Location: cart.php");
    exit();
}
?>
