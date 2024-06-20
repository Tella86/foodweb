<?php
// login_process.php
session_start();
include('db_connection.php'); // include your database connection file

$email = $_POST['email'];
$password = $_POST['password'];

// Check for valid input
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Invalid email format');
}

// Fetch user from database
$query = $db->prepare('SELECT * FROM user_reg WHERE email = ?');
$query->execute([$email]);
$user = $query->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    header('Location: order.html');
} else {
    echo 'Invalid email or password';
}
?>
