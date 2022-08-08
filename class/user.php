<?php


validate();

function validate(){
  if($_POST){

    $pathname=$_POST["pathname"];
    $pathname=strval($pathname);

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
    else if (strpos($pathname,'Eliminar')) {

    }
    else{
      $search = $_POST['search'];
      $users;

      $users = user::find($search);

      echo json_encode($users); // codigo de capa logica no interactua con la capa interfaz, <echo> no va.
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
    
    return $stmt->execute() ? true : null;
  }
  public static function delete($user){
    
    include '../database/database.php';
    
    $query = 'DELETE FROM users WHERE users.UserKey = :user_key';
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':user_key', $user['UserKey']);
    
    return $stmt->execute() ? true : null;
  }
  public static function find($search){

    include '../database/database.php';
    
    $search = "%" . $search . "%";
    $query = "SELECT * FROM users WHERE UserKey LIKE '$search' OR Name LIKE '$search' OR Surname LIKE '$search' OR Email LIKE '$search' ";
    $stmt = $connection->prepare($query);
    
    return ($stmt->execute()) ? $stmt->fetchAll(PDO::FETCH_ASSOC) : null;
  }
  public function get_user($user_key){
    
    include '../database/database.php';

    $query = "SELECT * FROM users WHERE UserKey = $user_key";
    $stmt = $connection->prepare($query);
    
    return $stmt->execute() ? $stmt->fetch() : null;
  }
  public function to_string(){
    
    return 
      "<p>" . "Nombre: "   . $this->name    . "</p>" . 
      "<p>" . "Apellido: " . $this->surname . "</p>" . 
      "<p>" . "Email: "    . $this->email   . "</p>";
  }
  public static function to_string_record($user){
    
    return
      "<p>" . "Nombre: " .   $user['Name']    . "</p>" . 
      "<p>" . "Apellido: " . $user['Surname'] . "</p>" . 
      "<p>" . "Email: " .    $user['Email']   . "</p>" . 
      "<p>" . "ID: " .       $user['UserKey'] . "</p>";
  }
}
