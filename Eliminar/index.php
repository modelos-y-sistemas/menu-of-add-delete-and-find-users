<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <title>Eliminar Usuario</title>
</head>
<body>
  <form method="post" class="form" onsubmit="return Buscar();">
    <div class="filtro">
      <p class="filtro__instruction">Filtrar por:</p>    
      <div class="control">
        <label class="filtro__label" for="name">Nombre</label>
        <input class="filtro__input" type="checkbox" name="name" id="name">
      </div>
      <div class="control">
        <label class="filtro__label" for="surname">Apellido</label>
        <input class="filtro__input" type="checkbox" name="surname" id="surname">
      </div>
      <div class="control">
        <label class="filtro__label" for="email">Email</label>
        <input class="filtro__input" type="checkbox" name="email" id="email">
      </div>
      <div class="control">
        <label class="filtro__label" for="userKey">ID</label>
        <input class="filtro__input" type="checkbox" name="userKey" id="userKey">
      </div>
    </div>
    <div class="search control">
      <label class="search__label" for="search">Buscar</label>
      <input class="search__input" type="text" name="search" id="search">
    </div>
    <input class="form__submit" type="submit" name="submit" id="submit" value="Buscar Usuario(s)">
  </form>

  <form name="formel" id="formel" method="post" onsubmit="return Eliminar();">
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

  
    <input type="submit" value="Eliminar Usuarios(s)">
  </form>
</body>
</html>
