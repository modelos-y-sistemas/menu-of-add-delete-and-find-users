<?php

class user{
  
  private $name;
  private $surname;
  private $emali;
  
  function __construct($name, $surname, $email)
  {
    $this->name = $name;
    $this->email = $email;
    $this->surname = $surname;
  }

  public function add(){
    
    require '../database/database.php';

    $message = '';
  
    $query = 'INSERT INTO users (Name, Surname, Email) VALUES (:name, :surname, :email)';
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':surname', $this->surname);
    $stmt->bindParam(':email', $this->email);
    
    if ($stmt->execute()) {
      $message = '<script> alert("USUARIO AGREGADO"); </>';
    } else {
      $message = '<script> alert("ERROR: usuario no creado"); </script>';
    }
  }
  public function delete(){
    
    require '../database/database.php';
    $message = '';

    $query = 'DELETE FROM `users` WHERE `users`.`UserKey` = :user_key';
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':user_key', $this.user_key);
    
    if ($stmt->execute()) {
      $message = '<script> alert("USUARIO ELIMINADO"); </script>';
    } else {
      $message = '<script> alert("ERROR: usuario no eliminado"); </script>';
    }
  }
  public function find($search){

    require '../database/database.php';
    $message = '';

    $query =
    'SELECT FROM `users`
    WHERE
      `UserKey` LIKE %:search% OR
      `Name` LIKE %:search% OR
      `Surname` LIKE %:search% OR
      `Email` LIKE %:search%
    ';
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':search', $search);
    
    if ($stmt->execute()) {
      $results = $records->fetch(PDO::FETCH_ASSOC);
      return $results;
    } else {
      $message = '<script> alert("ERROR: no se pudo ejecutar la consulta"); </script>';
      return null;
    }
  }
  public function to_string(){
    return "Nombre: " . $this->name . "<br>" . "Apellido: " . $this->surname . "<br>" . "Email: " . $this->email; 
  } 
}
