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
  
  <header class="header">
    <nav class="nav">
      <button class="nav__menu" onclick="window.location.href = '../index.php'"> Volver al menú </button>
    </nav>
  </header>
  
  <form method="post" class="form" onsubmit="return state();">
    <div class="control">
      <label for="name">Ingrese nombre</label>
      <input type="text" name="name" id="name" require>
    </div>
    <div class="control">
      <label for="surname">Ingrese apellido</label>
      <input type="text" name="surname" id="surname" require>
    </div>
    <div class="control">
      <label for="email">Ingrese e-mail</label>
      <input type="text" name="email" id="email" require>
    </div>
    
    <input class="form__submit" type="submit" value="Agregar Usuario" id="submit" require>
    
  </form>
  <div class="resp">
  </div>
</body>
</html>
