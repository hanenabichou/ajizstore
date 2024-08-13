<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AJIZ STORE | Recherche</title>
  <link rel="stylesheet" href="./css/style.css" />
  <script src="https://ajiz-org.github.io/element.js"></script>
  </head>

<body>
  <st-layout>
    <st-search></st-search>
    <st-list-products>
    <?php
    require('./products.php');
    foreach ($products as $product) { 
  ?>  <st-product price="<?=$product["price"]?>">
        <span slot="name"><?=$product["name"]?></span>
        <span slot="description"><?=$product["description"]?></span>
      </st-product>
    <?php } ?>
    </st-list-products>
  </st-layout>
  <script>elements('st-product', 'st-layout', 'st-search', 'st-list-products')</script>
</body>
</html>
