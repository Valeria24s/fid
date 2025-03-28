<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $size = $_POST['size'];
    $toppings = isset($_POST['toppings']) ? implode(', ', $_POST['toppings']) : 'None';
    $special = $_POST['special'];

    // Display the data (you can modify this part to save data to a database or send it by email)
    echo "<h1>Order Received</h1>";
    echo "<p>Name: $name</p>";
    echo "<p>Phone: $phone</p>";
    echo "<p>Size: $size</p>";
    echo "<p>Toppings: $toppings</p>";
    echo "<p>Special Instructions: $special</p>";
} else {
    echo "<p>No order data submitted.</p>";
}
?>
