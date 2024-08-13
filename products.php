<?php
require 'db.php';

$bind_types = "";
$bind_values = [];

$search = $_GET['search'] ?? '';
$name_q = '';
if($search) {
    $name_q = "and MATCH(name, description) AGAINST(?)";
    $bind_types .= "s";
    $bind_values[] = $search;
}
$range = $_GET['price'] ?? '';
$min_price_q = "";
$max_price_q = "";
if(preg_match('/^(\\d+)-(\\d+)$/', $range, $matches)) {
    $min_price_q = "and (price > ?)";
    $max_price_q = "and (price <= ?)";
    $bind_types .= "dd";
    $bind_values[] = $matches[1];
    $bind_values[] = $matches[2];
}

if(preg_match('/^>(\\d+)$/', $range, $matches)) {
    $min_price_q = "and (price > ?)";
    $bind_types .= "d";
    $bind_values[] = $matches[1];
}
$tag_q = "";
$tag = $_GET["category"] ??"";
if($tag) {
    $tag_q = "and category = ?";
    $bind_types .= "s";
    $bind_values[] = $tag;
}
$query = "select * from products where 1=1 $name_q $min_price_q $max_price_q $tag_q";
$stmt = $db->prepare($query);
if($bind_types) $stmt->bind_param($bind_types, ...$bind_values);

$stmt->execute();
$products = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();

$categories = $db->query("select distinct category from products")->fetch_all();
