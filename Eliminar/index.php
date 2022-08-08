<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <title>Eliminar Usuario</title>
</head>
<body>
  <button class="vam" onclick="window.location.href = '../index.php'"><p>Volver al men&uacute;</p></button>
      <p class="filtro__instruction">Filtrar por:</p>   
  <form action="./" method="post" class="form">
    <div class="filtro"> 
      <div class="control">
        <label class="filtro__label" for="name">Nombre</label>
        <input class="filtro__input" type="checkbox" name="name" id="name">
      </div>
      <br>
      <br>
      <br>
      <div class="control">
        <label class="filtro__label" for="surname">Apellido</label>
        <input class="filtro__input" type="checkbox" name="surname" id="surname">
      </div>
      <br>
      <br>
      <br>
      <div class="control">
        <label class="filtro__label" for="email">E-mail</label>
        <input class="filtro__input" type="checkbox" name="email" id="email">
      </div>
      <br>
      <br>
      <br>
      <div class="control">
        <label class="filtro__label" for="userKey">ID</label>
        <input class="filtro__input" type="checkbox" name="userKey" id="userKey">
      </div>
    </div>
      <br>
      <br>
      <br>
      <br>
    <div class="search control">
      <label class="search__label" for="search">Buscar:</label>
      <input class="search__input" type="text" name="search" id="search">
    </div>
      <br>
      <br>
      <br>
      <br>
    <input class="form__submit" type="submit" name="submit" id="submit" value="Buscar Usuario(s)">
  </form>
      <br>
      <br>
  <table class="list-users" border="5">
    <thead class="list-users__thead">
      <tr class="list-users__tr">
        <th class="list-users__th"> Nombre </th>
        <th class="list-users__th"> Apellido </th>
        <th class="list-users__th"> E-mail </th>
        <th class="list-users__th"> ID </th>
        <th class="list-users__th"> Seleccionar </th>
      </tr>
    </thead>
    <tbody class="list-users__tbody">
      <tr class="list-users__tr">
        <td class="list-users__td"> Jeremias </td>
        <td class="list-users__td"> Cuello </td>
        <td class="list-users__td"> cuellojeremiasnatanael@gmail.com </td>
        <td class="list-users__td"> 21 </td>
        <td class="list-users__td"> <input type="checkbox" name="user21" id="user21"> </td>
      </tr>
      <tr class="list-users__tr">
        <td class="list-users__td"> Jesus </td>
        <td class="list-users__td"> Zerda </td>
        <td class="list-users__td"> jesuszerda@gmail.com </td>
        <td class="list-users__td"> 35 </td>
        <td class="list-users__td"> <input type="checkbox" name="user35" id="user35"> </td>
      </tr>
    </tbody>
  </table>
  <form action="./" method="post">
    <input type="submit" value="Eliminar Usuarios(s)">
  </form>
</body>
</html>
