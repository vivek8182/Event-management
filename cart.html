<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Shopping Cart</title>
</head>
<body>
    <?php include('includes/header.php'); ?>

    <div class="content">
        <h1>Your Shopping Cart</h1>

        <?php
        // Check if the cart is empty
        if (empty($_SESSION['cart'])) {
            echo "<p>Your cart is empty. <a href='user.php'>Go back to shopping.</a></p>";
        } else {
            // Display cart items
            foreach ($_SESSION['cart'] as $item) {
                echo "<div class='cart-item'>";
                echo "<p>{$item['name']}</p>";
                echo "<p>Quantity: {$item['quantity']}</p>";
                echo "<p>Price: ${$item['price']}</p>";
                echo "</div>";
            }

            // Calculate total amount
            $totalAmount = 0;
            foreach ($_SESSION['cart'] as $item) {
                $totalAmount += $item['price'] * $item['quantity'];
            }

            echo "<p>Total Amount: $${totalAmount}</p>";

            // Display payment and cancel buttons
            echo "<form method='post'>";
            echo "<input type='submit' name='payment' value='Proceed to Payment'>";
            echo "<input type='submit' name='cancel' value='Cancel'>";
            echo "</form>";
        }
        ?>
    </div>

    <?php include('includes/footer.php'); ?>
</body>
</html>
