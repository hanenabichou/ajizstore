<?php
session_start();
if(!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
$user = $_SESSION['user'];
$userName = $user['name'];
echo "Hello $userName";
?>
<a href="logout.php"> Logout </a>