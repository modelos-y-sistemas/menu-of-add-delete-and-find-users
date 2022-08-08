<?php


validate();

function validate(){
  if($_POST){

    $pathname=$_POST["pathname"];
    $pathname=strval($pathname);
<<<<<<< HEAD

    if(strpos($pathname,'Agregar')){
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
=======
>>>>>>> 38d87c4de8233cb239eaeda50236efd45a610242

    if(strpos($pathname,'Agregar')){

      $name = $_POST["name"];
      $surname = $_POST["surname"];
      $email = $_POST["email"];

      if($name!=""&&$surname!=""&&$email!=""){
        $o_user = new user($name, $surname, $email);
        $o_user->add();
        $resp=$o_user->to_string();
        echo json_encode($resp);
      }
    }
<<<<<<< HEAD
    }
    elseif (strpos($pathname,'Eliminar')) {
      //$search=$_POST['search'];
      $user_keyarr=$_POST['user_keyarr'];
      $users;


      $o_user = new user();
      $o_user->delete($user_keyarr);

      //$users = user::delete($user_keyarr);
      //$users = user::find($search);
  
      //echo json_encode($users);
=======
    else if (strpos($pathname,'Eliminar')) {

>>>>>>> 38d87c4de8233cb239eaeda50236efd45a610242
    }
    else{
      $search = $_POST['search'];
      $users;
<<<<<<< HEAD
  
      $users = user::find($search);
  
      echo json_encode($users);
=======

      $users = user::find($search);

      echo json_encode($users); // codigo de capa logica no interactua con la capa interfaz, <echo> no va.
>>>>>>> 38d87c4de8233cb239eaeda50236efd45a610242
    }
  }
}

class user{
  
  private $name;
  private $surname;
  private $emali;
  
  public function __construct($name = "n/n", $surname = "n/n", $email = "nn@nn.com"){
    $this->name = $name;
    $this->email = $email;
    $this->surname = $surname;
  }

  public function add(){
    
    include '../database/database.php';
    $message = '';
    
    $query = 'INSERT INTO users (Name, Surname, Email) VALUES (:name, :surname, :email)';
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':surname', $this->surname);
    $stmt->bindParam(':email', $this->email);
    
    if ($stmt->execute()) {
      $message = '<script> alert("USUARIO AGREGADO"); </script>';
    } else {
      $message = '<script> alert("ERROR: usuario no creado"); </script>';
    }
  }
<<<<<<< HEAD
  public function delete($user_keyarr){
=======
  public static function delete($user){
>>>>>>> 38d87c4de8233cb239eaeda50236efd45a610242
    
    include '../database/database.php';
    $message = '';

    for($i=0;$i<count($user_keyarr);$i++){
      $ent=intval($user_keyarr[$i]);
      $query = "DELETE FROM users WHERE UserKey = :ent";
      $stmt=$connection->prepare($query);
      $stmt->bindParam(':ent', $ent);
      $stmt->execute();
    }

    /*$query = 'DELETE FROM users WHERE users.UserKey = :user_key';

    $stmt = $connection->prepare($query);
<<<<<<< HEAD
    $stmt->bindParam(':user_key', $this.user_key);*/

    //$queryBus='SELECT * FROM users';
    //$stmt = $connection->prepare($queryBus);
    //return $stmt->fetchAll(PDO::FETCH_ASSOC);
=======
    $stmt->bindParam(':user_key', $user['UserKey']);
>>>>>>> 38d87c4de8233cb239eaeda50236efd45a610242
    
    if ($stmt->execute()) {
      //return $stmt->fetchAll(PDO::FETCH_ASSOC);
      $message = '<script> alert("USUARIO ELIMINADO"); </script>';
    } else {
      $message = '<script> alert("ERROR: usuario no eliminado"); </script>';
    }
  }
  public static function find($search){

    include '../database/database.php';
    $message = '';
    $method_result;

    $search = "%" . $search . "%";
    $query = "SELECT * FROM users WHERE UserKey LIKE '$search' OR Name LIKE '$search' OR Surname LIKE '$search' OR Email LIKE '$search' ";
    $stmt = $connection->prepare($query);
    if ($stmt->execute()) {
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
      $message = '<script> alert("ERROR: no se pudo ejecutar la consulta"); </script>';
      return null;
    }
  }
  public function to_string(){
    
    /*
      Este metodo devuelve la informacion del objeto usuario.
    */
    
    return 
      "<p>" . "Nombre: "   . $this->name    . "</p>" . 
      "<p>" . "Apellido: " . $this->surname . "</p>" . 
      "<p>" . "Email: "    . $this->email   . "</p>";
  }
  public static function to_string_record($user){
    
    /*
      Este metodo devuelve la informacion del usuario recuperado de una query
    */

    return
      "<p>" . "Nombre: " .   $user['Name']    . "</p>" . 
      "<p>" . "Apellido: " . $user['Surname'] . "</p>" . 
      "<p>" . "Email: " .    $user['Email']   . "</p>" . 
      "<p>" . "ID: " .       $user['UserKey'] . "</p>";
  }
}
