<?php

session_start();

if($_POST['user'] == 'admin' && $_POST['pwd'] == '123') {
    $_SESSION['user'] = ['name' => 'Admin', 'age' => 30];
    header('Location: index.php');
} else {
    header('Location: login.php?error=cred');
}

