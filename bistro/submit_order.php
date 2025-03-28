<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $size = $_POST['size'];
    $toppings = isset($_POST['toppings']) ? implode(', ', $_POST['toppings']) : 'None';
    $special = $_POST['special'];

    // Display the data (for testing purposes)
    echo "<h1>Order Received</h1>";
    echo "<p>Name: $name</p>";
    echo "<p>Phone: $phone</p>";
    echo "<p>Size: $size</p>";
    echo "<p>Toppings: $toppings</p>";
    echo "<p>Special Instructions: $special</p>";

    // Redirect to the Thank You page
    header("Location: thank_you.html"); // This line redirects to the thank_you.html page
    exit;
} else {
    echo "<p>No order data submitted.</p>";
}
?>
