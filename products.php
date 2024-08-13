<?php

$products = [];

require('db.php');

$result = mysqli_query($mysqli, "SELECT * from products");
while(($product = mysqli_fetch_assoc($result))!= false) {
    $products[] = $product;   
}