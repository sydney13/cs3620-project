<?php
require_once('./user/userDAO.php');

class User implements \JsonSerializable {
  // Properties
  private $user_id;
  private $username;
  private $first_name;
  private $last_name;
  private $password;

  // Methods
  function __construct() {
  }
  function getUserId(){
    return $this->user_id;
  }
  function setUserId($user_id){
    $this->user_id = $user_id;
  }
  function getUsername() {
    return $this->username;
  }
  function setUsername($username){
    $this->username = $username;
  }
  function getFirstName() {
    return $this->first_name;
  }
  function setFirstName($first_name){
    $this->first_name = $first_name;
  }
  function getLastName() {
    return $this->last_name;
  }
  function setLastName($last_name){
    $this->last_name = $last_name;
  }
  function setPassword($password){
    $this->password = hash("sha256", $password);
  }
  function getPassword(){
    return $this->password;
  }

  function getUser($user_id){
    $this->user_id = $user_id;
    $userDAO = new userDAO();
    $userDAO->getUser($this);
    return $this;
  }

  function getTheUserName($username){
    $this->username = $username;
    $userDAO = new userDAO();
    $userDAO->getTheUserName($this);
    return $this;
  }

  function getTheFirstName($first_name){
    $this->first_name = $first_name;
    $userDAO = new userDAO();
    $userDAO->getTheFirstName($this);
    return $this;
  }

  function getTheLastName($last_name){
    $this->last_name = $last_name;
    $userDAO = new userDAO();
    $userDAO->getTheLastName($this);
    return $this;
  }

  function createUser(){
    $userDAO = new userDAO();
    $userDAO->createUser($this);
  }

  function deleteUser($username){
    $userDAO = new userDAO();
    $userDAO->deleteUser($username);
  }

  public function jsonSerialize(){
      $vars = get_object_vars($this);
      return $vars;
  }
}
?>