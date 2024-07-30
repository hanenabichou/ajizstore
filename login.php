<?php

session_start();

if (isset($_SESSION['user'])) {
  header('Location: index.php');
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title> Login form </title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  if (isset($_GET['error'])) {
    echo 'Veuillez vérifier vos info';
  }
  ?>
  <form class="test" action="signin.php" method="post">
    <h1> <label>Email :<input type="text" name="user"></h1>
    <label> Password : <input type="password" name="pwd"></label>

    <h3><button> Login </butyon>
    </h3>


  </form>

</body>

</html>