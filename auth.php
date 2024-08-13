<?php
session_start();

require 'db.php';
$stmt = $db->prepare('select id from users where email = ? and password = ?');
$stmt->bind_param('ss', $_POST['email'], $_POST['password']);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

if ($user) {
    $_SESSION['user'] = $user['id'];
    header('Location: /');
} else {
    header('Location: login.html?error');
}

$stmt->close();
