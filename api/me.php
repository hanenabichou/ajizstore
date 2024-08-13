<?php
session_start();
header('Content-Type: application/json');
require '../db.php';
$uid = $_SESSION['user'] ?? null;
if (!$uid) {
    echo 'null';
    exit;
}


echo json_encode($db->query("select * from users where id=$uid")->fetch_assoc());