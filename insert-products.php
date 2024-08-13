<?php

require('products.php');

require('db.php');


foreach ($products as $product) {
    $stmt = mysqli_prepare($mysqli, "INSERT INTO products (name, price, description, category) values (?, ?, ?, ?)");
    $stmt->bind_param('sdss', $product['name'], $product['price'], $product['description'], $product['category']);
    $stmt->execute();
}


