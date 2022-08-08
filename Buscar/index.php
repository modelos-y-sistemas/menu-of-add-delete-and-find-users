<?php
  /*
  if($_POST){

    $search = $_POST['search'];
    require("../class/user.php");
    $users;

    $users = user::find($search);
  }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/main.js"></script>
  <title>Buscar Usuario</title>
</head>
<body>
        <!-- action="./" -->
  <form  method="post" class="form" onsubmit="return state();">
    <div class="filter">
      <p class="filter__instruction">Filtrar por:</p>    
      <div class="control">
        <label class="filter__label" for="name">Nombre</label>
        <input class="filter__input" type="checkbox" name="name" id="name">
      </div>
      <div class="control">
        <label class="filter__label" for="surname">Apellido</label>
        <input class="filter__input" type="checkbox" name="surname" id="surname">
      </div>
      <div class="control">
        <label class="filter__label" for="email">Email</label>
        <input class="filter__input" type="checkbox" name="email" id="email">
      </div>
      <div class="control">
        <label class="filter__label" for="userKey">ID</label>
        <input class="filter__input" type="checkbox" name="userKey" id="userKey">
      </div>
    </div>
    <div class="search control">
      <label class="search__label" for="search">Buscar</label>
      <input class="search__input" type="text" name="search" id="search">
    </div>
    <input class="form__submit" type="submit" name="submit" id="submit" value="Buscar Usuario(s)">
  </form>

  <table class="list-users" border="1">
    <thead class="list-users__thead">
      <tr class="list-users__tr">
        <th class="list-users__th"> Nombre </th>
        <th class="list-users__th"> Apellido </th>
        <th class="list-users__th"> Email </th>
        <th class="list-users__th"> ID </th>
      </tr>
    </thead>
    <tbody class="list-users__tbody">
      <!--
      <?php
        //foreach($users as $user){
      ?>
        <tr class="list-users__tr">
          <td class="list-users__td"> <//?php echo $user['Name']; ?> </td>
          <td class="list-users__td"> <//?php echo $user['Surname']; ?> </td>
          <td class="list-users__td"> <//?php echo $user['Email']; ?> </td>
          <td class="list-users__td"> <//?php echo $user['UserKey']; ?> </td>
        </tr>
      <?php
        //}
      ?>
      -->
    </tbody>
  </table>
</body>
</html>
