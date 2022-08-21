<?php $message = ""; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <title>Eliminar Usuario</title>
</head>
<body>

  <header class="header">
    <nav class="nav">
      <button class="nav__menu" onclick="window.location.href = '../index.php'"> Volver al menú </button>
    </nav>
  </header>

  <form method="post" class="form" name="form" id="form" onsubmit="return Eliminar();">
    <div class="filter"> 
      <p class="filter__instruction">Filtrar por:</p>
      <div class="controls">
        <div class="control">
          <label class="filter__label" for="name">Nombre</label>
          <input class="filter__input" type="checkbox" name="name" id="name">
        </div>
        <div class="control">
          <label class="filter__label" for="surname">Apellido</label>
          <input class="filter__input" type="checkbox" name="surname" id="surname">
        </div>
        <div class="control">
          <label class="filter__label" for="email">E-mail</label>
          <input class="filter__input" type="checkbox" name="email" id="email">
        </div>
        <div class="control">
          <label class="filter__label" for="userKey">ID</label>
          <input class="filter__input" type="checkbox" name="userKey" id="userKey">
        </div>
      </div>
    </div>
    <div class="search control">
      <label class="search__label" for="search">Buscar</label>
      <input class="search__input" type="text" name="search" id="search">
    </div>
    
    <input class="form__submit" type="button" name="submit_search" value="Buscar Usuario(s)" onclick="return Buscar();">

    <table class="list-users" border="1">
      <thead class="list-users__thead">
        <tr class="list-users__tr">
          <th class="list-users__th"> Nombre </th>
          <th class="list-users__th"> Apellido </th>
          <th class="list-users__th"> Email </th>
          <th class="list-users__th"> ID </th>
          <th class="list-users__th"> Seleccionar </th>
        </tr>
      </thead>
      <tbody class="list-users__tbody">
      </tbody>
    </table>
    <input class="form__submit" type="submit" name="submit_delete" id="submit_delete" value="Eliminar Usuario(s)">
  </form>
  <p id="message"> <?= $message; ?> </p>
</body>
</html>
