<?php
  /*if($_POST)
  {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];

    require("../class/user.php");

    $o_user = new user($name, $surname, $email);
    $o_user->add();
  }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <script src="js/main.js"></script>
  <title>Agregar Usuario</title>
</head>
<body>
  <button class="vam" onclick="window.location.href = '../index.php'"><p>Volver al men&uacute;</p></button>
  <form method="post" class="form" onsubmit="return state();">
    <div class="control">
      <label for="name">Ingrese nombre:</label>
      <input type="text" name="name" id="name" require>
    </div>
    <div class="control">
      <label for="surname">Ingrese apellido:</label>
      <input type="text" name="surname" id="surname" require>
    </div>
    <div class="control">
      <label for="email">Ingrese e-mail:</label>
      <input type="text" name="email" id="email" require>
    </div>
    <div class="control">
      <input type="submit" value="Agregar Usuario" id="submit" require>
    </div>
    <div class="resp">
    </div>
    <?php //echo "usuario agregado: <br>" . $o_user->to_string(); ?>
  </form>
</body>
</html>
