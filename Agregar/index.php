<?php

  if($_POST)
  {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];

    require("../class/user.php");

    $o_user = new user($name, $surname, $email);
    $o_user->add();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Usuario</title>
</head>
<body>
  <form action="./" method="post">
    <div class="control">
      <label for="name">Ingrese Nombre</label>
      <input type="text" name="name" id="name" require>
    </div>
    <div class="control">
      <label for="surname">Ingrese Apellido</label>
      <input type="text" name="surname" id="surname" require>
    </div>
    <div class="control">
      <label for="email">Ingrese Email</label>
      <input type="text" name="email" id="email" require>
    </div>
    <div class="control">
      <input type="submit" value="Agregar Usuario" id="submit" require>
    </div>
    <?php echo "usuario agregado: <br>" . $o_user->to_string(); ?>
  </form>
</body>
</html>
