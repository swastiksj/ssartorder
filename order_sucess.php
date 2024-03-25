<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success</title>
    <!-- Add any CSS or JavaScript files needed for animations -->
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="success-container">
        <div class="success-icon">&#10004;</div>
        <h1>Order Placed Successfully!</h1>
        <!-- Display order summary here -->
        <div class="order-summary">
            <!-- Fetch and display order details -->
            <p>Order ID: <?php echo $orderId; ?></p>
            <p>Name: <?php echo $name; ?></p>
            <p>Contact: <?php echo $contact; ?></p>
            <p>Address: <?php echo $address; ?></p>
            <!-- Add more order details as needed -->
        </div>
    </div>
</body>
</html>
