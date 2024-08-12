<?php
$name=$_POST["user"];
$pwd=$_POST["pwd"];
session_start();

require('users.php');

foreach ($users as $user) {
    if($user['name'] == $name && $user['pwd'] == $pwd) {
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
        exit;
    }
}

header('Location: login.php?error=wrong credentials');
