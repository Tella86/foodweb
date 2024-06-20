<?php
// signup_process.php
include('db_connection.php'); // include your database connection file

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Check for valid input
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Invalid email format');
}

if ($password !== $confirm_password) {
    die('Passwords do not match');
}

if (strlen($password) < 6) {
    die('Password must be at least 6 characters long');
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user into database
$query = $db->prepare('INSERT INTO user_reg (full_name, email, password) VALUES (?, ?, ?)');
$query->execute([$full_name, $email, $hashed_password]);

header('Location: order.html');
?>
