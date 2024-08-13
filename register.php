<?php

require 'db.php';
$stmt = $db->prepare('insert into users(email, phone, name, password) values (?, ?, ?, ?)');

$stmt->bind_param('ssss', $_POST['email'], $_POST['phone'], $_POST['name'], $_POST['password']);

try {
    $stmt->execute();
    header('Location: login.html?register');
} catch (Exception $e) { 
    header('Location: register.html?error');
}
$stmt->close();