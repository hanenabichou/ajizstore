<?php

require('../products.php');
header('Content-Type: application/json');
echo json_encode($products);