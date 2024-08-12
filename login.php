<?php
session_start();
if(isset($_SESSION['user'])) {
  header('Location: dashboard.php');
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
  <form class="test" action="auth.php?version=1" method="post">
    <div><span style="color:red"><?=@$_GET['error']?></span></div>
    <label>Name :<input type="text" name="user"></label>
    <label> Password : <input type="password" name="pwd"></label>

    <h3><button> Login </button></h3>


  </form>

</body>

</html>