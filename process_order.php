<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $paperSize = $_POST['paperSize'];
    $frame = isset($_POST['frame']) ? 'Yes' : 'No';
    $paymentMethod = $_POST['paymentMethod'];
    
    // Process uploaded photo
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["photo"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    // Email content
    $subject = "New Sketch Order";
    $message = "Name: $name\n";
    $message .= "Contact: $contact\n";
    $message .= "Address: $address\n";
    $message .= "Paper Size: $paperSize\n";
    $message .= "Frame: $frame\n";
    $message .= "Payment Method: $paymentMethod\n";

    // Send email
    $to = "swastiksjannu@gmail.com"; // Change this to your email address
    $headers = "From: example@example.com"; // Change this to your email address
    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Order placed successfully. We will contact you shortly.</p>";
    } else {
        echo "<p>Failed to place the order. Please try again later.</p>";
    }
}
?>
