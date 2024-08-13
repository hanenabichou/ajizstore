<?php
session_start();
if(!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
$userId = $_SESSION['user'];
require('db.php');
$result = mysqli_query($mysqli, "SELECT * from users WHERE id=$userId");
$user = mysqli_fetch_assoc($result);

$userName = $user['name'];
echo "Hello $userName";
?>
<a href="logout.php"> Logout </a>