<?php
  function dbconnect() {
    $username = "root";
    $password = "password";

    try {
      $conn = new PDO('mysql:host=localhost;dbname=tacotruck', $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
    }

    return $conn;
  }

  function registerUser($fName, $lName, $email, $pw, $ccp, $ccnum) {
    verifyRegistered($email, $pw);

    
  }
  ?>