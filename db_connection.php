<?php
// db_connection.php
try {
    $db = new PDO('mysql:host=localhost;dbname=quickbite;charset=utf8', 'root', 'mariamkupi2#');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Error : ' . $e->getMessage());
}
?>
