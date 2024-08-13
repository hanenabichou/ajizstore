<?php
$name = $_POST["user"];
$pwd = $_POST["pwd"];
session_start();

require('db.php');
$stmt = mysqli_prepare($mysqli, "SELECT * from users WHERE name=? and password=?");
$stmt->bind_param('ss', $name, $pwd);
$stmt->execute();
$result = $stmt->get_result();

$user = mysqli_fetch_assoc($result);

if ($user == false) {
    header('Location: login.php?error=wrong credentials');
} else {
    $_SESSION['user'] = $user['id'];
    header('Location: dashboard.php');
}
