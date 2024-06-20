<?php
include "dbconn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $amount = $conn->real_escape_string($_POST['amount']);
    $food_type = $conn->real_escape_string($_POST['food-type']);
    $quantity = $conn->real_escape_string($_POST['quantity']);
    $address = $conn->real_escape_string($_POST['address']);

    $sql = "INSERT INTO orders (name, email, phone, amount, food_type, quantity, address)
            VALUES ('$name', '$email', '$phone', '$amount', '$food_type', '$quantity', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "New order created successfully";
        header('location: pay.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
