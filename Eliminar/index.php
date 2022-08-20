<?php
  
  $message = "";
/*
  if($_POST){

    include ('../class/user.php');
    $submit_search = $_POST['submit_search'];
    $submit_delete = $_POST['submit_delete'];
    
    if($submit_search){
      $search = $_POST['search'];
      $users = user::find($search);
    }

    if($submit_delete){
      
      try{
        $users_key_selected = get_users_keys_selected();
        
        foreach($users_key_selected as $user_key_selected){
          $user_selected = user::get_user($user_key_selected);
          if(user::delete($user_selected)){
            $message = "el(los) usuario(s) fueron eliminados";
          } else{
            $message = "el(los) usuario(s) no fueron eliminados";
          }
        }
      }
      catch(PDOException $e){
        $message = "ERROR: No se puede eliminar el(los) usuario(s)";
      }
    }
  }

  function get_users_keys_selected(){
    
    $search = $_POST['search'];
    $i = 0;

    $users = user::find($search);
    $users_keys = array();

    foreach($users as $user){
      
      $number_key = $user['UserKey'];
      
      if(isset($_POST['user' . $number_key])){ // cada check tiene como 'name' -> "user + <UserKey>"
        $users_keys[$i] = $number_key;
        $i++;
      }
    }
    foreach($users_keys as $key){
      // echo $key . "<br>";
    }

    return $users_keys;
  }
*/
?>
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
        <?php
          //foreach($users as $user){
        ?>
          <tr class="list-users__tr">
            <td class="list-users__td"> <?php //echo $user['Name']; ?> </td>
            <td class="list-users__td"> <?php //echo $user['Surname']; ?> </td>
            <td class="list-users__td"> <?php //echo $user['Email']; ?> </td>
            <td class="list-users__td"> <?php //echo $user['UserKey']; ?> </td>
            <td class="list-users__td"> <input type="checkbox" name="user<?php //echo $user['UserKey']; ?>" id="user<?php //echo $user['UserKey']; ?>"> </td>
          </tr>
        <?php    
          //}
        ?>
      </tbody>
    </table>

    <input class="form__submit" type="submit" name="submit_delete" id="submit_delete" value="Eliminar Usuario(s)">
  </form>
  
  <p id="message"> <?= $message; ?> </p>

</body>
</html>
